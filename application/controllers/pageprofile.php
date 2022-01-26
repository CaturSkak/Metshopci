<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class pageprofile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'html'));
        $this->load->model('m_wilayah');
        $this->load->model('m_user');
        $this->load->database();
    }
    function index($var = null)
    {
        $data['user'] =
            $this->db->get_where('tb_pengguna', ['email' =>
            $this->session->userdata('email')])->row_array();


        $data['path'] = base_url('assets');
        $userID = $this->session->userdata('email');

        $data['userr'] = $this->m_user->getDataByID($userID)->row_array();
        // var_dump($data);
        // die;
        $data['provinsi'] = $this->m_wilayah->getProvinsi()->result_array();





        $this->load->view('admin/header', $data);
        $this->load->view('admin/page-profile', $data);
        $this->load->view('admin/footer');
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
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
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
                $this->db->update('tb_pengguna');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Foto Profil telah di ubah!
          </div> ');
                redirect('pageprofile');
            }
        }
    }

    // public function update()
    // {
    //     $customer_id = $this->input->post('pengguna_id', TRUE);
    //     $customer_name = $this->input->post('customer_name', TRUE);
    //     $email = $this->input->post('email', TRUE);
    //     $gender = $this->input->post('gender', TRUE);
    //     $tanggal_lahir = $this->input->post('tanggal_lahir', TRUE);
    //     $phone_number = $this->input->post('phone_number', TRUE);
    //     $province_id = $this->input->post('prov', TRUE);
    //     $city_id = $this->input->post('kab', TRUE);
    //     $subdistrict_id = $this->input->post('kec', TRUE);
    //     $des = $this->input->post('des', TRUE);
    //     $address = $this->input->post('address', TRUE);


    //     if (empty($this->input->post('pengguna_id', TRUE))) {
    //         $this->session->set_flashdata('error_flashData', 'Aksi Illegal!.');
    //         redirect(base_url('auth'));
    //     } else {



    //             $data = array(
    //                 'nama' => $customer_name,
    //                 'gender' => $gender,
    //                 'tanggal_lahir' => $tanggal_lahir,
    //                 'phone_number' => $phone_number,
    //                 'province_id' => $province_id,
    //                 'city_id' => $city_id,
    //                 'subdistrict_id' => $subdistrict_id,
    //                 'subdistrict_id' => $des,
    //                 'address' => $address
    //             );

    //             $result = $this->M_User->editData($customer_id, $data);


    //                 $this->session->set_flashdata('success_flashData', 'Biodata berhasil diedit.');
    //                 redirect(base_url('auth'));

    //         }
    //     }
    // }

    public function perbarui()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('pengguna_id', 'Pengguna Id', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/page-profile');
            $this->load->view('admin/footer');
        } else if ($province_id = $this->input->post('prov', TRUE) == 0) {
            $id = $this->input->post('pengguna_id', TRUE);
            $customer_name = $this->input->post('customer_name', TRUE);
            $email = $this->input->post('email', TRUE);
            $gender = $this->input->post('gender', TRUE);
            $tanggal_lahir = $this->input->post('tanggal_lahir', TRUE);
            $phone_number = $this->input->post('phone_number', TRUE);


            $address = $this->input->post('address', true);

            $data = array(
                'nama_lengkap' => $customer_name,
                'jenis_kelamin' => $gender,
                'tanggal_lahir' => $tanggal_lahir,
                'nomor_telepon' => $phone_number,


                'alamat' => $address
            );

            $result = $this->m_user->editData($id, $data);
            // $this->db->set('nama', $nama);
            // $this->db->where('pengguna_id', $pengguna_id);
            // $this->db->update('tb_pengguna');
            $this->session->set_flashdata('messagee', '<div class="alert alert-success" role="alert">
            Data Profil anda telah diperbarui!
          </div> ');
            redirect('pageprofile');
        } else {
            $id = $this->input->post('pengguna_id', TRUE);
            $customer_name = $this->input->post('customer_name', TRUE);
            $email = $this->input->post('email', TRUE);
            $gender = $this->input->post('gender', TRUE);
            $tanggal_lahir = $this->input->post('tanggal_lahir', TRUE);
            $phone_number = $this->input->post('phone_number', TRUE);
            $province_id = $this->input->post('prov', TRUE);
            $city_id = $this->input->post('kab', TRUE);
            $subdistrict_id = $this->input->post('kec', TRUE);

            $address = $this->input->post('address', true);

            $data = array(
                'nama_lengkap' => $customer_name,
                'jenis_kelamin' => $gender,
                'tanggal_lahir' => $tanggal_lahir,
                'nomor_telepon' => $phone_number,
                'province_id' => $province_id,
                'city_id' => $city_id,
                'subdistrict_id' => $subdistrict_id,

                'alamat' => $address
            );

            $result = $this->m_user->editData($id, $data);
            // $this->db->set('nama', $nama);
            // $this->db->where('pengguna_id', $pengguna_id);
            // $this->db->update('tb_pengguna');
            $this->session->set_flashdata('messagee', '<div class="alert alert-success" role="alert">
            Data Profil anda telah diperbarui!
          </div> ');
            redirect('pageprofile');
        }
    }


    public function editpassword()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
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
                    $this->db->update('tb_pengguna');

                    $this->session->set_flashdata('messagge', '<div class="alert alert-success" role="alert">
                        Kata Sandi telah diperbarui!
                      </div> ');
                    redirect('pageprofile');
                }
            }
        }
    }

    public function tambah()
    {
        if ($this->session->userdata('email')) {
            redirect('BerandaAdmin');
        }

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[tb_pengguna.email]',
            [
                'is_unique' => 'Email sudah didaftarkan!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $data['title'] = 'MetShop Pets - Daftar';
            $this->load->view('admin/pageregister', $data);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'nama' =>  htmlspecialchars($this->input->post('nama', 'true')),
                'email' => htmlspecialchars($this->input->post('email', 'true')),
                'password' => password_hash(
                    $this->input->post('password'),
                    PASSWORD_DEFAULT
                ),
                'aktif' => 1,
                'foto_pengguna' => 'default.png',
                'tipepengguna_id' => 1,
                'tanggal_dibuat' => time()

            ];

            $this->db->insert('tb_pengguna', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat akun anda telah dibuat, Silakan Login!
          </div> ');
            redirect('auth');
        }
    }

    public function upload()

    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();

        if (empty($this->input->post('pengguna_id', TRUE))) {
            $this->session->set_flashdata('error_flashData', 'Aksi Illegal!.');
            redirect(base_url('pageprofile'));
        } else {
            $customer_id = $this->input->post('pengguna_id', TRUE);
            $img = $this->input->post('foto_pengguna', TRUE);
            $error = '';

            $config['upload_path']          = './assets/images/profil/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 10000;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('errors/error', $error);
            } else {


                // Hapus gambar sebelumnya
                if (!empty($img)) {
                    unlink(FCPATH . "assets/images/profil/" . $img);
                }
                /* 
			* Manipulate image 
			*/

                $imgdata = exif_read_data($this->upload->upload_path . $this->upload->file_name, 'IFD0');

                // Crop Square
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/profil/' . $data["file_name"];
                $config['maintain_ratio'] = false;

                // Set cropping for y or x axis, depending on image orientation
                if ($data['image_width'] > $data['image_height']) {
                    $config['width'] = $data['image_height'];
                    $config['height'] = $data['image_height'];
                    $config['x_axis'] = (($data['image_width'] / 2) - ($config['width'] / 2));
                } else {
                    $config['height'] = $data['image_width'];
                    $config['width'] = $data['image_width'];
                    $config['y_axis'] = (($data['image_height'] / 2) - ($config['height'] / 2));
                }

                $config['new_image'] = './assets/images/profil/' . $data["file_name"];
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->crop();

                // Clear config
                $this->image_lib->clear();
                unset($config);

                // resize
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/profil/' . $data['file_name'];
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '60%';
                if ($data["image_width"] >= 1200) {
                    $config['width'] = ($data["image_width"] * 1 / 2);
                } else {
                    $config['width'] = ($data["image_width"] * 2 / 3);
                }
                $config['new_image'] = './assets/images/profil/' . $data['file_name'];

                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                // Clear config
                $this->image_lib->clear();
                unset($config);

                // Create Thumbnail
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/profil/' . $data['file_name'];
                $config['new_image'] = './assets/images/profil/';
                $config['maintain_ratio'] = TRUE;
                $config['create_thumb'] = TRUE;
                $config['thumb_marker'] = '';
                $config['width'] = 600;

                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                // Fix EXIF Image
                $this->image_lib->clear();
                $config = array();

                $config['image_library'] = 'gd2';
                $config['source_image'] = $this->upload->upload_path . $this->upload->file_name;

                switch ($imgdata['Orientation']) {
                    case 3:
                        $config['rotation_angle'] = '180';
                        break;
                    case 6:
                        $config['rotation_angle'] = '270';
                        break;
                    case 8:
                        $config['rotation_angle'] = '90';
                        break;
                }

                $this->image_lib->initialize($config);
                $this->image_lib->rotate();

                $data = array(
                    'foto_pengguna' => $data["file_name"],
                );

                $this->db->set('foto_pengguna', $data);
                $this->db->where('pengguna_id', $customer_id);

                $this->db->update('tb_pengguna');
                $this->session->set_flashdata('success_flashData', 'Profil berhasil diperbaharui.');
                redirect(base_url('pageprofile'));

                // if ($result == TRUE) {

                //     /**
                //      * Update Session
                //      */
                //     $session_array = array(
                //         'USER_IMAGE'  => $data["file_name"]
                //     );

                //     $this->session->set_userdata($session_array);

                //     // Update Cookie
                //     if (!empty(get_cookie('USER_ID'))) {
                //         $time = time() + (86400 * 30);
                //         set_cookie('USER_IMAGE', $data["file_name"], $time);
                //     }

                //     $this->session->set_flashdata('success_flashData', 'Profil berhasil diperbaharui.');
                //     redirect(base_url('pageprofile'));
                // } else {

                //     $this->session->set_flashdata('error_flashData', 'Gagal memperbarui profil.');
                //     redirect(base_url('pageprofile'));
                // }
            }
        }
    }
}

  // $data = $this->upload->data('file_name');

                // $this->db->set('foto_pengguna', $data);
                // $this->db->where('pengguna_id', $customer_id);
                // $this->db->update('tb_pengguna');

                // $this->db->update('tb_pengguna', $data);
                // $this->session->set_flashdata('success_flashData', 'Profil berhasil diperbaharui.');
                // redirect(base_url('pageprofile'));
