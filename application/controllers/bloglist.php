<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class bloglist extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("artikel_model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $data['lihatartikel'] = $this->artikel_model->tampil_data()->result();
        $data['user'] = $this->db->get_where('tb_pengguna', 
        ['email' =>$this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/blog-list');
        $this->load->view('admin/footer');
    }
    function lihat($artikel_id)
    {
        $data['ambil']=$this->artikel_model->get_artikel_id($artikel_id);
        $data['user'] = $this->db->get_where('tb_pengguna', 
        ['email' =>$this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/blog-detail-sidebar',$data);
        $this->load->view('admin/footer');
    }
    function update($artikel_id)
    {
        $data['ambil']=$this->artikel_model->get_artikel_id($artikel_id);
        $data['user'] = $this->db->get_where('tb_pengguna', 
        ['email' =>$this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/blog-post2',$data);
        $this->load->view('admin/footer');
	}
	
    function updateartikel(){
        
        $artikel_id = $this->input->post('artikel_id');
        $judul_artikel = $this->input->post('judul_artikel');
        $kategori = $this->input->post('kategori');
        $fotoo = $this->input->post('old_image');
        
        $deskripsi_artikel = $this->input->post('deskripsi_artikel');
        // $foto_hewan = $_FILES['foto_hewan'];
        $foto = NULL;

        if (!empty($_FILES["foto"])) {
          $foto = $this->_uploadImage();
        } else {
          $foto = $this->input->post('old_image');
        };
       
        $foto = $foto;

        $data = array(
            'artikel_id' => $artikel_id,
            'judul_artikel' => $judul_artikel,
            'kategori' => $kategori,
            'foto' => $foto,
            'deskripsi_artikel' => $deskripsi_artikel
        );

    $artikel_id = $this->input->post('artikel_id');
    $this->db->set($data);
	$this->db->where('artikel_id', $artikel_id);
        $this->db->update('tb_artikel',$data);
        redirect('bloglist');
	}

    function _uploadImage()
    {
        $config['upload_path'] = './assets/images/artikel_gambar';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['remove_space'] = TRUE;
        $config['max_size']      = '1024';
        $config['max_width']     = '7000';
        $config['max_height']    = '7000';
        $config['overwrite']            = true;
    
        $this->load->library('upload', $config);
    
        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        
       return $this->input->post('old_image',true);
    }
    function delete($artikel_id){
        $this->artikel_model->delete($artikel_id);
        redirect('bloglist');
    }
}

