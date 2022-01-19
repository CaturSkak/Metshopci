<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class formsbasic5 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('agen_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/forms-basic5');
        $this->load->view('admin/footer');
    }
        public function add(){
        $agen_id = $this->input->post('agen_id');
        $nama_agen = $this->input->post('nama_agen');
        $alamat = $this->input->post('alamat');
        $nomer_telepon = $this->input->post('nomer_telepon');
        $deskripsi = $this->input->post('deskripsi');


        $data = array(
            'agen_id' => $agen_id,
            'nama_agen' => $nama_agen,
            'alamat' => $alamat,
            'nomer_telepon' => $nomer_telepon,
            'deskripsi' => $deskripsi
        );
        $this->agen_model->input_data($data, 'tb_agen');
            redirect('formsadvanced3');
        $this->load->view('admin/froms-advanced3', $data);
        $this->load->view('admin/footer');
        }
}