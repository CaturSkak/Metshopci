<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Pembayaran extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('m_pembayaran');
		$this->load->library('session');
	}

	public function index($var = null)
	{
		$data['pembayaran'] = $this->m_pembayaran->getData()->result();

		$data['tittle'] = 'MetShop Pets -Selamat Datang di MetShop Pets';
		$data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
		$this->session->userdata('email')])->row_array();

		// echo 'Selamat Datang ' 
		$this->load->view('admin/header', $data);
		$this->load->view('admin/pembayaran', $data);
		$this->load->view('admin/footer');
	}

	public function delete()
	{
		// menyimpan nilai dari form post yang dikirimkan
		$payment_method_id = $this->input->post('payment_method_id', TRUE);
		$payment_method_image = $this->input->post('payment_method_image', TRUE);

		// delete file
		if (!empty($payment_method_image)) unlink(FCPATH . "assets/img/pembayaran/" . $payment_method_image);

		$result = $this->m_pembayaran->deleteData($payment_method_id);

		if ($result == TRUE) {

			$this->session->set_flashdata('success_flashData', '<div class="alert alert-success" role="alert">
            Data berhasil dihapus!
          </div> ');
			redirect(base_url('Admin_Pembayaran'));
		} else {

			$this->session->set_flashdata('error_flashData', 'Gagal menghapus data.');
			redirect(base_url('Admin_Pembayaran'));
		}
	}

	public function add()
	{
		// menyimpan nilai dari form post yang dikirimkan
		$payment_method_name = $this->input->post('payment_method_name', TRUE);
		$payment_method_transfer_code = $this->input->post('payment_method_transfer_code', TRUE);
		$payment_method_details = $this->input->post('payment_method_details', TRUE);
		$error = '';

		$config['upload_path']          = './assets/img/pembayaran/';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 20000;
		$config['encrypt_name']         = TRUE;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('payment_method_image')) {

			$error = array('error' => $this->upload->display_errors());
			$this->load->view('errors/error', $error);
		} else {
			$data = $this->upload->data();

			$imgdata = exif_read_data($this->upload->upload_path . $this->upload->file_name, 'IFD0');

			// resize
			$config['image_library'] = 'gd2';
			$config['source_image'] = './assets/img/pembayaran/' . $data["file_name"];
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 400;
			$config['new_image'] = './assets/img/pembayaran/' . $data["file_name"];

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();

			// Fix EXIF Image
			$this->image_lib->clear();
			$config = array();

			$config['image_library'] = 'gd2';
			$config['source_image'] = $this->upload->upload_path . $this->upload->file_name;

			switch ($imgdata['Orientation']) {
				case 3:
					$config['rotation_angle'] = '180';
					break;
				case 6:
					$config['rotation_angle'] = '270';
					break;
				case 8:
					$config['rotation_angle'] = '90';
					break;
			}

			$this->image_lib->initialize($config);
			$this->image_lib->rotate();

			$data = array(
				'payment_method_name' => $payment_method_name,
				'payment_method_transfer_code' => $payment_method_transfer_code,
				'payment_method_details' => $payment_method_details,
				'payment_method_image' => $this->upload->data('file_name')
			);

			$result = $this->m_pembayaran->addData($data);

			if ($result == TRUE) {

				$this->session->set_flashdata('success_flashData', '<div class="alert alert-success" role="alert">
				Data Berhasil ditambahkan!
			  </div> ');
				redirect(base_url('Admin_Pembayaran'));
			} else {

				$this->session->set_flashdata('error_flashData', 'Gagal menambahkan data.');
				redirect(base_url('Admin_Pembayaran'));
			}
		}
	}
	function Update()
	{
		$data['pembayaran'] = $this->m_pembayaran->getData()->result();

		$payment_method_id = $this->input->post('payment_method_id', TRUE);
		$payment_method_name = $this->input->post('payment_method_name', TRUE);
		$payment_method_transfer_code = $this->input->post('payment_method_transfer_code', TRUE);
		$payment_method_details = $this->input->post('payment_method_details', TRUE);

		$foto = Null;
		if (!empty($_FILES['payment_method_image'])) {
			$lama = $this->input->post('img', TRUE);
			$baru = $this->input->post('payment_method_image', TRUE);
			$upload_image = $_FILES['payment_method_image'];

			$config['upload_path']          = './assets/img/pembayaran/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 10000;
			$config['encrypt_name']         = TRUE;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto')) {
				$foto = $lama;
			} else {
				$old_image = $lama;
				if ($old_image != 'default.png') {
					unlink(FCPATH . 'assets/img/pembayaran/' . $old_image);
				}
				$foto = $this->upload->data('file_name');
			}
		};
		$foto = $foto;
		var_dump($old_image);
		die;

		$data = array(
			'payment_method_name' => $payment_method_name,
			'payment_method_transfer_code' => $payment_method_transfer_code,
			'payment_method_details' => $payment_method_details,
			'payment_method_image' => $foto

		);

		$this->db->set($data);
		$this->db->where('payment_method_id', $payment_method_id);
		$this->db->update('tb_payment_method', $data);
		$this->session->set_flashdata('success_flashData', '<div class="alert alert-success" role="alert">
		Data Berhasil di ubah!
	  </div>');
		redirect('Admin_Pembayaran');
	}

	public function edit()
	{
		$payment_method_id = $this->input->post('payment_method_id', TRUE);
		$payment_method_name = $this->input->post('payment_method_name', TRUE);
		$payment_method_transfer_code = $this->input->post('payment_method_transfer_code', TRUE);
		$payment_method_details = $this->input->post('payment_method_details', TRUE);
		$img = $this->input->post('img');

		$data = array(
			'payment_method_name' => $payment_method_name,
			'payment_method_transfer_code' => $payment_method_transfer_code,
			'payment_method_details' => $payment_method_details
		);

		$result = $this->m_pembayaran->editData($payment_method_id, $data);

		// Edit Image Jika Ada
		if (isset($_FILES["payment_method_image"])) {
			$config['upload_path']          = './assets/img/pembayaran/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 20000;
			$config['encrypt_name']         = TRUE;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('payment_method_image')) {

				$error = array('error' => $this->upload->display_errors());
				$this->load->view('errors/error', $error);
			} else {

				$data = $this->upload->data();
				$imgdata = exif_read_data($this->upload->upload_path . $this->upload->file_name, 'IFD0');

				unlink(FCPATH . "assets/img/pembayaran/" . $img);

				// resize
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/img/pembayaran/' . $data['file_name'];
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 400;
				$config['new_image'] = './assets/img/pembayaran/' . $data['file_name'];


				$data2['payment_method_image'] = $data['file_name'];

				$result2 = $this->m_pembayaran->editData($payment_method_id, $data2);
			}
		}
		var_dump($data2);
		die;
		if ($result == TRUE || $result2 == TRUE) {

			$this->session->set_flashdata('success_flashData', '<div class="alert alert-success" role="alert">
			Data Berhasil diubah!
		  </div>');
			redirect(base_url('Admin_Pembayaran'));
		} else {

			$this->session->set_flashdata('error_flashData', 'Gagal mengedit data.');
			redirect(base_url('Admin_Pembayaran'));
		}
	}
}
