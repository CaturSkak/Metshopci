<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class appcontact3 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("karyawan_model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $data['lihatkaryawan'] = $this->karyawan_model->tampil_data()->result();
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/app-contact3');
        $this->load->view('admin/footer');
    }
    function update($pengguna_id)
    {
        $data['ambil'] = $this->karyawan_model->get_karyawan_id($pengguna_id);
        $data['user'] = $this->db->get_where(
            'tb_pengguna',
            ['email' => $this->session->userdata('email')]
        )->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/app-contact-grid3', $data);
        $this->load->view('admin/footer');
    }

    function updatekaryawan()
    {
        $data['lihatkaryawan'] = $this->karyawan_model->tampil_data()->result();

        $pengguna_id = $this->input->post('pengguna_id');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $nomor_telepon = $this->input->post('nomor_telepon');
        $alamat = $this->input->post('alamat');
        $aktif = $this->input->post('aktif');
 
        $data = array(
            'pengguna_id' => $pengguna_id,
            'nama_lengkap' => $nama_lengkap,
            'nomor_telepon' => $nomor_telepon,
            'alamat' => $alamat,
            'aktif' => $aktif
        );
        $pengguna_id = $this->input->post('pengguna_id');
        $this->db->set($data);
        $this->db->where('pengguna_id', $pengguna_id);
        $this->db->update('tb_pengguna', $data);
        redirect('appcontact3');
    }
    function delete($pengguna_id)
    {
        $this->karyawan_model->delete($pengguna_id);
        redirect('appcontact3');
    }
}
