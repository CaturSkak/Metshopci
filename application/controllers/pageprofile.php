<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class pageprofile extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
 }
 public function index()
 {
  $this->load->view('admin/header');
  $this->load->view('admin/page-profile');
  $this->load->view('admin/footer');
 }
}