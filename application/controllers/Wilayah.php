<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Wilayah extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('url', 'html'));
		$this->load->model('m_wilayah');
		$this->load->database();
	}

	function index()
	{
		$data['user'] =
			$this->db->get_where('tb_pengguna', ['email' =>
			$this->session->userdata('email')])->row_array();
		$data['provinsi'] = $this->m_wilayah->get_all_provinsi();

		$data['path'] = base_url('assets');

		$this->load->view('admin/header', $data);
		$this->load->view('wilayah', $data);
		$this->load->view('admin/footer');
	}

	function add_ajax_kab($id_prov)
	{
		$query = $this->db->get_where('wilayah_kabupaten', array('provinsi_id' => $id_prov));
		$data = "<option value=''>- Select Kabupaten -</option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
		}
		echo $data;
	}

	function add_ajax_kec($id_kab)
	{
		$query = $this->db->get_where('wilayah_kecamatan', array('kabupaten_id' => $id_kab));
		$data = "<option value=''> - Pilih Kecamatan - </option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
		}
		echo $data;
	}

	function add_ajax_des($id_kec)
	{
		$query = $this->db->get_where('wilayah_desa', array('kecamatan_id' => $id_kec));
		$data = "<option value=''> - Pilih Desa - </option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
		}
		echo $data;
	}

	public function edit()
	{
		$data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('pengguna_id', 'Pengguna Id', 'required|trim');

		if ($this->form_validation->run() == false) {

			$this->load->view('admin/header', $data);
			$this->load->view('admin/page-profile');
			$this->load->view('admin/footer');
		} else {
			$customer_id = $this->input->post('pengguna_id', TRUE);
			$img = $this->input->post('foto_pengguna', TRUE);

			$upload_image = $_FILES[$img];

			$config['upload_path']          = './assets/images/profil/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 10000;
			$config['encrypt_name']         = TRUE;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('file')) {

				$error = array('error' => $this->upload->display_errors());
				$this->load->view('errors/error', $error);
			} else {
				$old_image = $data['user']['foto_pengguna'];
				if ($old_image != 'default.png') {
					unlink(FCPATH . 'assets/images/profil/' . $old_image);
				}

				$new_image = $this->upload->data('file_name');
				$this->db->set('foto_pengguna', $new_image);




				// $this->db->set('foto_pengguna', $upload_image);
				$this->db->where('pengguna_id', $customer_id);
				$this->db->update('tb_pengguna');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Foto Profil telah di ubah!
          </div> ');
				redirect('pageprofile');
			}
		}
	}
	public function editpassword()
	{
		$data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('password0', 'Password Lama', 'required|trim');
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[5]|matches[password2]',
			[
				'matches' => 'Kata Sandi tidak sama!',
				'min_length' => 'Password minimal 5 karakter!'
			]
		);
		$this->form_validation->set_rules(
			'password2',
			'Password',
			'required|trim|matches[password]',
			[
				'matches' => 'Kata Sandi tidak sama!',
				'min_length' => 'Password minimal 5 karakter!'
			]
		);

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/header', $data);
			$this->load->view('admin/page-profile');
			$this->load->view('admin/footer');
		} else {
			$password_lama = $this->input->post('password0');
			$password_baru = $this->input->post('password');
			if (!password_verify($password_lama, $data['user']['password'])) {
				$this->session->set_flashdata('messagge', '<div class="alert alert-danger" role="alert">
                Kata Sandi Lama Salah!
              </div> ');
				redirect('pageprofile');
			} else {
				if ($password_lama == $password_baru) {
					$this->session->set_flashdata('messagge', '<div class="alert alert-danger" role="alert">
                Kata Sandi baru tidak boleh sama dengan password lama!
              </div> ');
					redirect('pageprofile');
				} else {
					$password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('tb_pengguna');

					$this->session->set_flashdata('messagge', '<div class="alert alert-success" role="alert">
                        Kata Sandi telah diperbarui!
                      </div> ');
					redirect('pageprofile');
				}
			}
		}
	}
}
