<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class pageforgotpassword extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
 }
 public function index()
 {
 
  $this->load->view('admin/pageforgotpassword');
  $this->load->view('admin/footer');
 }
}