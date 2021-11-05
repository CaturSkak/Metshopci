<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class compare extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
 }
 public function index()
 {
  $this->load->view('layout/header');
  $this->load->view('konten/compare');
  $this->load->view('layout/footer');
 }
}