<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class formsbasic3 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('produk_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/forms-basic3');
        $this->load->view('admin/footer');
    }
    public function add(){
        $produk_id = $this->input->post('produk_id');
        $nama_produk = $this->input->post('nama_produk');
        $kategori = $this->input->post('kategori');
        $jumlah_barang = $this->input->post('jumlah_barang');
        $harga = $this->input->post('harga');
        $foto_produk = $_FILES['foto_produk'];
        if($foto_produk=''){}else{
            $config['upload_path'] = './assets/images/daftar_produk/';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto_produk')){
                echo "Upload Gagal"; die();
            }else{
                $foto_produk=$this->upload->data('file_name');
            }
        }
        $deskripsi = $this->input->post('deskripsi');


        $data = array(
            'produk_id' => $produk_id,
            'nama_produk' => $nama_produk,
            'kategori' => $kategori,
            'jumlah_barang' => $jumlah_barang,
            'harga' => $harga,
            'foto_produk' => $foto_produk,
            'deskripsi' => $deskripsi
        );
        $this->produk_model->input_data($data, 'tb_produk');
            redirect('formsadvanced2');
        $this->load->view('admin/froms-advanced2', $data);
        $this->load->view('admin/footer');
        }
    }