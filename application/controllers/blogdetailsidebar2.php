<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class blogdetailsidebar2 extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model("artikel_model");
  $this->load->library('form_validation');
 }
 public function index($artikel_id)
 {
  $data['user'] = $this->db->get_where('tb_pengguna', 
  ['email' =>$this->session->userdata('email')])->row_array();
  $data['artikel']=$this->artikel_model->get_artikel_id($artikel_id);
  $this->load->view('admin/header', $data);
  $this->load->view('admin/blog-detail-sidebar');
  $this->load->view('admin/footer');
 }
 function lihat($artikel_id)
 {
     $data['ambil']=$this->artikel_model->get_artikel_id($artikel_id);
     $data['user'] = $this->db->get_where('tb_pengguna', 
     ['email' =>$this->session->userdata('email')])->row_array();
     $this->load->view('admin/header', $data);
     $this->load->view('admin/blog-detail-sidebar',$data);
     $this->load->view('admin/footer');
 }
}