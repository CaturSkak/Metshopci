<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class formsadvanced extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("hewan_model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $data['lihathewan'] = $this->hewan_model->tampil_data()->result();
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->db->get_where('tb_hewan')->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/forms-advanced');
        $this->load->view('admin/footer');
    }
    function update($hewan_id)
    {
        $data['ambil'] = $this->hewan_model->get_hewan_id($hewan_id);
        $data['user'] = $this->db->get_where(
            'tb_pengguna',
            ['email' => $this->session->userdata('email')]
        )->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/forms-basic2', $data);
        $this->load->view('admin/footer');
    }

    function UpdateMobil()
    {

        $hewan_id = $this->input->post('hewan_id');
        $jenis_hewan = $this->input->post('jenis_hewan');
        $jenis = $this->input->post('jenis');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $rincian = $this->input->post('rincian');
        $harga = $this->input->post('harga');
        $fotoo = $this->input->post('old_image');

        $deskripsi = $this->input->post('deskripsi');
        // $foto_hewan = $_FILES['foto_hewan'];
        $foto_hewan = NULL;

        if (!empty($_FILES["foto_hewan"])) {
            $foto_hewan = $this->_uploadImage();
        } else {
            $foto_hewan = $this->input->post('old_image');
        };

        $foto = $foto_hewan;

        $data = array(
            'hewan_id' => $hewan_id,
            'jenis_hewan' => $jenis_hewan,
            'jenis' => $jenis,
            'jenis_kelamin' => $jenis_kelamin,
            'rincian' => $rincian,
            'harga' => $harga,
            'foto_hewan' => $foto,
            'deskripsi' => $deskripsi
        );

        $hewan_id = $this->input->post('hewan_id');
        $this->db->set($data);
        $this->db->where('hewan_id', $hewan_id);
        $this->db->update('tb_hewan', $data);
        redirect('formsadvanced');
    }

    function _uploadImage()
    {
        $config['upload_path'] = './assets/images/daftar_hewan';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['remove_space'] = TRUE;
        $config['max_size']      = '1024';
        $config['max_width']     = '6000';
        $config['max_height']    = '6000';
        $config['overwrite']            = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_hewan')) {
            return $this->upload->data("file_name");
        }

        return $this->input->post('old_image', true);
    }
    function delete($hewan_id)
    {
        $this->hewan_model->delete($hewan_id);
        redirect('formsadvanced');
    }
}
