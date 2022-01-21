<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class appcontact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin_model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $data['lihatadmin'] = $this->admin_model->tampil_data()->result();
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/app-contact');
        $this->load->view('admin/footer');
    }
    function update($pengguna_id)
    {
        $data['ambil'] = $this->admin_model->get_admin_id($pengguna_id);
        $data['user'] = $this->db->get_where(
            'tb_pengguna',
            ['email' => $this->session->userdata('email')]
        )->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/app-contact-grid', $data);
        $this->load->view('admin/footer');
    }

    function updateadmin()
    {
        $data['lihatadmin'] = $this->admin_model->tampil_data()->result();

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
        redirect('appcontact');
    }
    function delete($pengguna_id)
    {
        $this->admin_model->delete($pengguna_id);
        redirect('appcontact');
    }
}
