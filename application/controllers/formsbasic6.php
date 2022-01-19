<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class formsbasic6 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('artikel_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/forms-basic6');
        $this->load->view('admin/footer');
    }
}