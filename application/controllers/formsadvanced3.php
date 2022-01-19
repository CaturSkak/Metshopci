<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class formsadvanced3 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("agen_model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $data['lihatagen'] = $this->agen_model->tampil_data()->result();
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/forms-advanced3');
        $this->load->view('admin/footer');
    }
    function update($agen_id)
    {
        $data['ambil']=$this->agen_model->get_agen_id($agen_id);
        $data['user'] = $this->db->get_where('tb_pengguna', 
        ['email' =>$this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/forms-basic6',$data);
        $this->load->view('admin/footer');
	}

    function updateagen(){
        
        $agen_id = $this->input->post('agen_id');
        $nama_agen = $this->input->post('nama_agen');
        $alamat = $this->input->post('alamat');
        $nomer_telepon = $this->input->post('nomer_telepon');
        $deskripsi = $this->input->post('deskripsi');
        
        $data = array(
            'agen_id' => $agen_id,
            'nama_agen' => $nama_agen,
            'alamat' => $alamat,
            'nomer_telepon' => $nomer_telepon,
            'deskripsi' => $deskripsi
        );
        $agen_id = $this->input->post('agen_id');
        $this->db->set($data);
        $this->db->where('agen_id', $agen_id);
            $this->db->update('tb_agen',$data);
            redirect('formsadvanced3');

	}
    function delete($agen_id){
        $this->agen_model->delete($agen_id);
        redirect('formsadvanced3');
    }
}