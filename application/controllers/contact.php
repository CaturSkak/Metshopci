<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class contact extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
 }
 public function index()
 {
  $this->load->view('layout/header');
  $this->load->view('konten/contact');
  $this->load->view('layout/footer');
 }
}