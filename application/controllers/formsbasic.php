<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class formsbasic extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('artikel_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/forms-basic');
        $this->load->view('admin/footer');
    }
    public function add(){
        $hewan_id = $this->input->post('hewan_id');
        $jenis_hewan = $this->input->post('jenis_hewan');
        $jenis = $this->input->post('jenis');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $rincian = $this->input->post('rincian');
        $harga = $this->input->post('harga');
        $foto_hewan = $_FILES['foto_hewan'];
        if($foto_hewan=''){}else{
            $config['upload_path'] = './assets/images/daftar_hewan';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto_hewan')){
                echo "Upload Gagal"; die();
            }else{
                $foto_hewan=$this->upload->data('file_name');
            }
        }
        $deskripsi = $this->input->post('deskripsi');


        $data = array(
            'hewan_id' => $hewan_id,
            'jenis_hewan' => $jenis_hewan,
            'jenis' => $jenis,
            'jenis_kelamin' => $jenis_kelamin,
            'rincian' => $rincian,
            'harga' => $harga,
            'foto_hewan' => $foto_hewan,
            'deskripsi' => $deskripsi
        );
        $this->artikel_model->input_data($data, 'tb_hewan');
            redirect('formsadvanced');
        $this->load->view('admin/forms-advanced', $data);
        $this->load->view('admin/footer');
        }
    }

