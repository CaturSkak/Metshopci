<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class hewanumum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("hewan_model");
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('m_user');
    }
    public function index()
    {
        $data['lihathewan'] = $this->hewan_model->tampil_data()->result();
        $data['lihathewan1'] = $this->hewan_model->tampil_data()->result_array();
        $data['pembayaran'] = $this->m_user->show_barang();
        // var_dump($data);
        // die;
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->db->get_where('tb_hewan')->row_array();
        $this->load->view('layout/header',  $data);
        $this->load->view('konten/hewanumum');
        $this->load->view('layout/footer');
    }
    public function lihat($hewan_id)
    {
        $data['ambil'] = $this->hewan_model->get_hewan_id($hewan_id);
        $data['lihathewan'] = $this->hewan_model->tampil_data()->result();
        $data['lihathewan1'] = $this->hewan_model->tampil_data()->result_array();
        $data['pembayaran'] = $this->m_user->show_barang();
        // var_dump($data);
        // die;
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('layout/header');
        $this->load->view('konten/single-product', $data);
        $this->load->view('layout/footer');
    }
}
