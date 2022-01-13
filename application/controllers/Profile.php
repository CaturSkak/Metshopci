<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
 }
 public function index()
 {
  $this->load->view('layout/header');
  $data = array(
      'chat' => $this->db->order_by('pesan_id','ASC')->get('tb_pesan')->result()
  );
  $this->load->view('konten/profile', $data);
  $this->load->view('layout/footer');
 }
public function store()
{
    $data = array(
        'name' => $this->input->post('name'),
        'pesan' => $this->input->post('pesan')
    );

    $this->db->insert('tb_pesan', $data);
    
}

}


