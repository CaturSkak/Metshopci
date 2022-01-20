<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class appcontact3 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("karyawan_model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $data['lihatkaryawan'] = $this->karyawan_model->tampil_data()->result();
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/app-contact3');
        $this->load->view('admin/footer');
    }
}
