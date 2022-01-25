<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'html'));
        $this->load->model('m_wilayah');
        $this->load->model('m_customer');
        $this->load->database();
    }
    public function index()
    {

        $data['user'] =
            $this->db->get_where('tb_customer', ['email' =>
            $this->session->userdata('emailcustomer')])->row_array();
        // var_dump($data);
        // die;
        $data['path'] = base_url('assets');
        $userID = $this->session->userdata('emailcustomer');
        $id = $this->session->userdata('customer_id');

        $data['userr'] = $this->m_customer->getDataByID($userID)->row_array();
        $data['provinsi'] = $this->m_customer->getProvinsi()->result_array();
        $data['kot'] = $this->m_customer->getkot()->result_array();
        $data['kec'] = $this->m_customer->getkec()->result_array();



        $this->load->view('layout/header', $data);
        $this->load->view('konten/profile', $data);
        $this->load->view('layout/footer');
    }
    public function cekKota()
    {
        $id = $this->input->get('province_id', TRUE);
        $kota = $this->m_customer->getKota($id)->result();

        foreach ($kota as $row) {
            echo "<option value='" . $row->city_id . "'>" . $row->city_name . "</option>";
        }
    }

    public function cekKecamatan()
    {
        $id = $this->input->get('city_id', TRUE);
        $kecamatan = $this->m_customer->getKecamatan($id)->result();

        foreach ($kecamatan as $row) {
            echo "<option value='" . $row->subdistrict_id . "'>" . $row->subdistrict_name . "</option>";
        }
    }

    function add_ajax_kab($id_prov)
    {
        $query = $this->db->get_where('tb_cities', array('province_id' => $id_prov));
        $data = "<option value=''>- Select Kabupaten -</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->city_id . "'>" . $value->city_name . "</option>";
        }
        echo $data;
    }

    function add_ajax_kec($id_kab)
    {
        $query = $this->db->get_where('tb_subdistricts', array('city_id' => $id_kab));
        $data = "<option value=''> - Pilih Kecamatan - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->subdistrict_id . "'>" . $value->subdistrict_name . "</option>";
        }
        echo $data;
    }
    public function edit()
    {
        $data['user'] = $this->db->get_where('tb_customer', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('pengguna_id', 'Pengguna Id', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/header', $data);
            $this->load->view('admin/page-profile');
            $this->load->view('admin/footer');
        } else {
            $customer_id = $this->input->post('pengguna_id', TRUE);
            $img = $this->input->post('foto_pengguna', TRUE);

            $upload_image = $_FILES[$img];

            $config['upload_path']          = './assets/images/profil/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 10000;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('errors/error', $error);
            } else {
                $old_image = $data['user']['foto_pengguna'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/images/profil/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('foto_pengguna', $new_image);




                // $this->db->set('foto_pengguna', $upload_image);
                $this->db->where('pengguna_id', $customer_id);
                $this->db->update('tb_customer');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Foto Profil telah di ubah!
          </div> ');
                redirect('Profile');
            }
        }
    }

    public function perbarui()
    {
        $data['user'] = $this->db->get_where('tb_customer', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('pengguna_id', 'Pengguna Id', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('konten/profile');
            $this->load->view('layout/footer');
        } else {
            $id = $this->input->post('pengguna_id', TRUE);
            $customer_name = $this->input->post('customer_name', TRUE);
            $email = $this->input->post('email', TRUE);
            $gender = $this->input->post('gender', TRUE);
            $tanggal_lahir = $this->input->post('tanggal_lahir', TRUE);
            $phone_number = $this->input->post('phone_number', TRUE);

            $data = array(
                'nama_lengkap' => $customer_name,
                'jenis_kelamin' => $gender,
                'tanggal_lahir' => $tanggal_lahir,
                'nomor_telepon' => $phone_number,

            );

            $result = $this->m_customer->editData($id, $data);
            // $this->db->set('nama', $nama);
            // $this->db->where('pengguna_id', $pengguna_id);
            // $this->db->update('tb_customer');
            $this->session->set_flashdata('messagee', '<div class="alert alert-success" role="alert">
            Data Profil anda telah diperbarui!
          </div> ');
            redirect('Profile');
        }
    }
    public function updatealamat()
    {
        $data['user'] = $this->db->get_where('tb_customer', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('pengguna_id', 'Pengguna Id', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('konten/profile');
            $this->load->view('layout/footer');
        } else {
            $id = $this->input->post('pengguna_id', TRUE);

            $phone_number = $this->input->post('phone_number', TRUE);
            $province_id = $this->input->post('prov', TRUE);
            $city_id = $this->input->post('kab', TRUE);
            $subdistrict_id = $this->input->post('kec', TRUE);

            $address = $this->input->post('address', true);

            $data = array(

                'nomor_telepon' => $phone_number,
                'province_id' => $province_id,
                'city_id' => $city_id,
                'subdistrict_id' => $subdistrict_id,

                'alamat' => $address
            );

            $result = $this->m_customer->editData($id, $data);

            $this->session->set_flashdata('messagee', '<div class="alert alert-success" role="alert">
            Data Profil anda telah diperbarui!
          </div> ');
            redirect('Profile');
        }
    }


    public function editpassword()
    {
        $data['user'] = $this->db->get_where('tb_customer', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('password0', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'Kata Sandi tidak sama!',
                'min_length' => 'Password minimal 5 karakter!'
            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Password',
            'required|trim|matches[password]',
            [
                'matches' => 'Kata Sandi tidak sama!',
                'min_length' => 'Password minimal 5 karakter!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/page-profile');
            $this->load->view('admin/footer');
        } else {
            $password_lama = $this->input->post('password0');
            $password_baru = $this->input->post('password');
            if (!password_verify($password_lama, $data['user']['password'])) {
                $this->session->set_flashdata('messagge', '<div class="alert alert-danger" role="alert">
                Kata Sandi Lama Salah!
              </div> ');
                redirect('pageprofile');
            } else {
                if ($password_lama == $password_baru) {
                    $this->session->set_flashdata('messagge', '<div class="alert alert-danger" role="alert">
                Kata Sandi baru tidak boleh sama dengan password lama!
              </div> ');
                    redirect('pageprofile');
                } else {
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('tb_customer');

                    $this->session->set_flashdata('messagge', '<div class="alert alert-success" role="alert">
                        Kata Sandi telah diperbarui!
                      </div> ');
                    redirect('pageprofile');
                }
            }
        }
    }
    public function store()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'pesan' => $this->input->post('pesan')
        );

        $this->db->insert('tb_pesan', $data);
    }
}
