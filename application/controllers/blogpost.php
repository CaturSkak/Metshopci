<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class blogpost extends CI_Controller
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
        $this->load->view('admin/blog-post');
        $this->load->view('admin/footer');
    }

    public function add(){
        $artikel_id = $this->input->post('artikel_id');
        $judul_artikel = $this->input->post('judul_artikel');
        $kategori = $this->input->post('kategori');
        $foto = $_FILES['foto'];
        if($foto=''){}else{
            $config['upload_path'] = './assets/images/artikel_gambar/';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto')){
                echo "Upload Gagal"; die();
            }else{
                $foto=$this->upload->data('file_name');
            }
        }
        $deskripsi_artikel = $this->input->post('deskripsi_artikel');


        $data = array(
            'artikel_id' => $artikel_id,
            'judul_artikel' => $judul_artikel,
            'kategori' => $kategori,
            'foto' => $foto,
            'deskripsi_artikel' => $deskripsi_artikel
        );
        $this->artikel_model->input_data($data, 'tb_artikel');
            redirect('bloglist');
        $this->load->view('admin/blog-list', $data);
        $this->load->view('admin/footer');
        }
    }