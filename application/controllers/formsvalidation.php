<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class formsvalidation extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
 }
 public function index()
 { 
  $this->load->view('admin/header');
  $this->load->view('admin/forms-validation');
  $this->load->view('admin/footer');
 }
}