<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class BerandaAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['tittle'] = 'MetShop Pets -Selamat Datang di MetShop Pets';
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();

        // echo 'Selamat Datang ' 
        $this->load->view('admin/header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }
}
