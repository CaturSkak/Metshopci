<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class formsadvanced extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("hewan_model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $data['lihathewan'] = $this->hewan_model->tampil_data()->result();
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->db->get_where('tb_hewan')->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/forms-advanced');
        $this->load->view('admin/footer');
    }
    function update($hewan_id)
    {
        $data['ambil'] = $this->hewan_model->get_hewan_id($hewan_id);
        $data['user'] = $this->db->get_where(
            'tb_pengguna',
            ['email' => $this->session->userdata('email')]
        )->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/forms-basic2', $data);
        $this->load->view('admin/footer');
    }

    function UpdateMobil()
    {
        $data['lihathewan'] = $this->hewan_model->tampil_data()->result();
        $hewan_id = $this->input->post('hewan_id');
        $jenis_hewan = $this->input->post('jenis_hewan');
        $jenis = $this->input->post('jenis');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $rincian = $this->input->post('rincian');
        $harga = $this->input->post('harga');
        // $fotoo = $this->input->post('old_image');

        $deskripsi = $this->input->post('deskripsi');

        // $foto_hewan = $_FILES['foto_hewan'];
        $foto_hewan = NULL;



        if (!empty($_FILES["foto_hewan"])) {
            $img = $this->input->post('foto_hewan', TRUE);


            $upload_image = $_FILES[$img];


            $config['upload_path']          = './assets/images/daftar_hewan/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 100000;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto_hewan')) {
                $foto_hewan = $this->input->post('old_image');
            } else {
                $old_image = $this->input->post('old_image');;
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/images/daftar_hewan/' . $old_image);
                }

                $foto_hewan = $this->upload->data('file_name');
            }
        
            };
            // var_dump($old_image);
            // die;
            $foto_hewan = $foto_hewan;
    
            $data = array(
                'hewan_id' => $hewan_id,
                'jenis_hewan' => $jenis_hewan,
                'jenis' => $jenis,
                'umur' => $umur,
                'jenis_kelamin' => $jenis_kelamin,
                'berat' => $berat,
                'rincian' => $rincian,
                'harga' => $harga,
                'jumlah' => $jumlah,
                'foto_hewan' => $foto_hewan,
                'deskripsi' => $deskripsi
            );
            $hewan_id = $this->input->post('hewan_id');
            $this->db->set($data);
            $this->db->where('hewan_id', $hewan_id);
            $this->db->update('tb_hewan', $data);
            redirect('formsadvanced');
        }


    function delete($hewan_id){
        $hewan_id = $this->input->post('hewan_id');;
        $old_image = $this->input->post('foto_hewan');;
        if (!empty($old_image)) unlink(FCPATH . 'assets/images/daftar_hewan/' . $old_image);
        // var_dump($old_image);
        // die;

        $this->hewan_model->delete($hewan_id);
        redirect('formsadvanced');
    }
}
