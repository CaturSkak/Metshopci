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
        $umur = $this->input->post('umur');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $berat = $this->input->post('berat');
        $rincian = $this->input->post('rincian');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
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
            'umur' => $umur,
            'jenis_kelamin' => $jenis_kelamin,
            'berat' => $berat,
            'rincian' => $rincian,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'foto_hewan' => $foto_hewan,
            'deskripsi' => $deskripsi
        );
        $this->artikel_model->input_data($data, 'tb_hewan');
            redirect('formsadvanced');
        $this->load->view('admin/forms-advanced', $data);
        $this->load->view('admin/footer');
        }
    }

