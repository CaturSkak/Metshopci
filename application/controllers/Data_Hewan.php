<?php
 defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Hewan extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_Hewan_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}
    public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Data_Hewan_model->getAll()->result();
		$this->load->view('admin/header');
        $this->load->view('admin/forms-advanced' ,$data);
        $this->load->view('admin/foote');
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	
}
?>