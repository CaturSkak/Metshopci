<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class blogleftsidebar extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
 }
 public function index()
 { 
  $this->load->view('layout/header');
  $this->load->view('konten/blog-left-sidebar');
  $this->load->view('layout/footer');
 }
}
