<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$model = array('PenggunaModel');
		$this->load->model($model);
	}
	public function login(){
		if ($this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'sudah_login');
			redirect(base_url('BerandaAdmin'));
		}
		if (isset($_POST['login'])) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = array(
				'username' => $username,
				'password' => md5($password)
			);
			$pengguna = $this->PenggunaModel->get_user_account($data);
			if ($pengguna != null) {
				if ($pengguna['pengguna'] == 'admin'){
					$session = array(
						'session_id' => $pengguna['admin_id'],
						'session_username' => $pengguna['username'],
						'session_nama' => $pengguna['nama_admin'],
					);
					$this->session->set_userdata($session);
					$this->session->set_flashdata('alert', 'login_sukses');
					redirect(base_url('BerandaAdmin'));
				} else {
					$this->session->set_flashdata('alert', 'login_gagal');
					redirect(base_url('pagelogin'));
				}
			} else {
				$this->session->set_flashdata('alert', 'login_gagal');
				redirect(base_url('pagelogin'));
			}
		} else {
			$data = array(
				'title' => 'Login | Metshoppets'
			);
			$this->load->view('admin/page-login',$data);
			$this->load->view('admin/footer');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('alert', 'logout_sukses');
		redirect(base_url());
	}

	public function register(){
		if (isset($_POST['register'])){
			$nama = $this->input->post('nama');
			$nomorHp = $this->input->post('no_hp');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$dataRegister = array(
				'pengguna_nama' => $nama,
				'pengguna_nomor_hp' => $nomorHp,
				'pengguna_email' => $email,
				'pengguna_username' => $username,
				'pengguna_password' => md5($password),
				'pengguna_level' => 'pemesan'
			);

			$this->PenggunaModel->register($dataRegister);
			$this->session->set_flashdata('alert', 'success_register');
			redirect('login');
		}
	}
}
