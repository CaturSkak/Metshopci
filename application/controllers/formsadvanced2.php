<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class formsadvanced2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("produk_model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $data['lihatproduk'] = $this->produk_model->tampil_data()->result();
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->db->get_where('tb_hewan')->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/forms-advanced2');
        $this->load->view('admin/footer');
    }
    function update($produk_id)
    {
        $data['ambil']=$this->produk_model->get_produk_id($produk_id);
        $data['user'] = $this->db->get_where('tb_pengguna', 
        ['email' =>$this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/forms-basic4',$data);
        $this->load->view('admin/footer');
	}

    function updateproduk(){
        $data['lihatproduk'] = $this->produk_model->tampil_data()->result();
        $produk_id = $this->input->post('produk_id');
        $nama_produk = $this->input->post('nama_produk');
        $kategori = $this->input->post('kategori');
        $berat = $this->input->post('berat');
        $jumlah_barang = $this->input->post('jumlah_barang');
        $harga = $this->input->post('harga');
        $deskripsi = $this->input->post('deskripsi');
        // $fotoo = $this->input->post('old_image');

        $deskripsi = $this->input->post('deskripsi');

        // $foto_hewan = $_FILES['foto_hewan'];
        $foto_produk = NULL;



        if (!empty($_FILES["foto_produk"])) {
            $img = $this->input->post('foto_produk', TRUE);

            $upload_image = $_FILES[$img];

            $config['upload_path']          = './assets/images/daftar_produk/';
            $config['allowed_types']        = 'jpeg|jpg|gif|png';
            $config['max_size']             = 100000;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto_produk')) {
                $foto_produk = $this->input->post('old_image');
            } else {
                $old_image = $this->input->post('old_image');;
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/images/daftar_produk/' . $old_image);
                }
                $foto_produk = $this->upload->data('file_name');
            }
        };
        // var_dump($old_image);
        // die;
        $foto_produk = $foto_produk;

        $data = array(
            'produk_id' => $produk_id,
            'nama_produk' => $nama_produk,
            'kategori' => $kategori,
            'berat' => $berat,
            'jumlah_barang' => $jumlah_barang,
            'harga' => $harga,
            'foto_produk' => $foto_produk,
            'deskripsi' => $deskripsi
        );
        $produk_id = $this->input->post('produk_id');
        $this->db->set($data);
        $this->db->where('produk_id', $produk_id);
        $this->db->update('tb_produk', $data);
        redirect('formsadvanced2');
    }
function _uploadImage()
{
    $config['upload_path'] = './assets/images/daftar_produk';
    $config['allowed_types'] = 'jpeg|jpg|gif|png';
    //$config['remove_space'] = TRUE;
    $config['max_size']      = '10240';
    $config['max_width']     = '10000';
    $config['max_height']    = '10000';
    $config['overwrite']     = true;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto_produk')) {
        return $this->upload->data("file_name");
    }
    
   return $this->input->post('old_image',true);
}
    function delete($produk_id){
        $produk_id = $this->input->post('produk_id');;
        $old_image = $this->input->post('foto_produk');;
        if (!empty($old_image)) unlink(FCPATH . 'assets/images/daftar_produk/' . $old_image);
        // var_dump($old_image);
        // die;
        $this->produk_model->delete($produk_id);
        redirect('formsadvanced2');
    }
}