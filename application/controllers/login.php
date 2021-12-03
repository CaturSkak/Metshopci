<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Controller {
 public function __construct()
 {
    parent::__construct();
    $this->load->model('customer_model');
 }
 public function index()
 {
  $this->load->view('layout/header');
  $this->load->view('konten/login');
  $this->load->view('layout/footer');
 }
 public function cek_log() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $cek = $this->customer_model->login($username, $password,'tb_customer')->result();
    if($cek != FALSE) {
        foreach ($cek as $row) {
            $user = $row->username;
            $password = $row->password;
        }
        $this->session->set_userdata('session_user', $user);
        $this->session->set_userdata('session_password', $password);
        redirect('Beranda');
    } else {
        $this->load->view('layout/header');
        $this->load->view('konten/login');
        $this->load->view('layout/footer');
 }
    
}
function logout(){
    $this->session->sess_destroy();
    redirect('Login');
}
}
?>