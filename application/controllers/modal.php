<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class modal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_pembayaran');
        $this->load->model('m_user');
    }
    public function index()
    {
        $data['pembayaran'] = $this->m_user->show_barang();

        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['tittle'] = 'MetShop Pets -Selamat Datang di MetShop Pets';
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();

        // echo 'Selamat Datang ' 
        $this->load->view('admin/header', $data);
        $this->load->view('admin/modal',  $data);
        $this->load->view('admin/footer');
    }
}
