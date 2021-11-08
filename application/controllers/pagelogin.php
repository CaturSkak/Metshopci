<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class pagelogin extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
 }
 public function index()
 {
 
  $this->load->view('admin/page-login');
  $this->load->view('admin/footer');
 }
}