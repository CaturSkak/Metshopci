<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header');
        $this->load->view('konten/my-account', $data);
        $this->load->view('layout/footer');
    }
}
