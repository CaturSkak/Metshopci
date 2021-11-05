<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class shopleftsidebar3 extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
 }
 public function index()
 {
  $this->load->view('layout/header');
  $this->load->view('konten/shop-left-sidebar3');
  $this->load->view('layout/footer');
 }
}