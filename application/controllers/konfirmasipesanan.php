<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class konfirmasipesanan extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
 }
 public function index()
 {
  $this->load->view('layout/header');
  $this->load->view('konten/konfirmasipesanan');
  $this->load->view('layout/footer');
 }
}