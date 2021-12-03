<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class appchat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/app-chat');
        $this->load->view('admin/footer');
    }
}
