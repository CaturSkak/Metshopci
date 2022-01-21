<?php

class admin_model extends CI_Model{
    public $title;
    public $content;
    public $date;
    
    
    function ambil_data($table)
    {
            return $this->db->get($table);
    }

    public function tambah_artikel()
    {
            $this->title    = $_POST['judul_artikel'];
            $this->content  = $_POST['judul'];
            $this->date     = time('Y-m-d H:m:s');
            
            $this->title    = $_POST['kategori'];
            $this->content  = $_POST['Kategori'];
            $this->date     = time('Y-m-d H:m:s');

            $this->title    = $_POST['foto'];
            $this->content  = $_POST['upload'];
            $this->date     = time('Y-m-d H:m:s');

            $this->title    = $_POST['deskripsi_artikel'];
            $this->content  = $_POST['deskripsi'];
            $this->date     = time('Y-m-d H:m:s');

            $this->db->insert('tb_artikel', $this);
    }

    public function update_artikel()
    {
        $this->title    = $_POST['judul_artikel'];
        $this->content  = $_POST['judul'];
        $this->date     = time('Y-m-d H:m:s');
        
        $this->title    = $_POST['kategori'];
        $this->content  = $_POST['Kategori'];
        $this->date     = time('Y-m-d H:m:s');

        $this->title    = $_POST['foto'];
        $this->content  = $_POST['upload'];
        $this->date     = time('Y-m-d H:m:s');

        $this->title    = $_POST['deskripsi_artikel'];
        $this->content  = $_POST['deskripsi'];
        $this->date     = time('Y-m-d H:m:s');
        
            $this->db->update('tb_artikel', $this, array('id' => $_POST['id']));
        }
    
    function tampil_data(){
        $this->db->where('tipepengguna_id', '1');
        return $this->db->get('tb_pengguna');
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    function add_data($nama_lengkap,$nomor_telepon,$alamat,$aktif){
        $data = array(
            'nama_lengkap' => $nama_lengkap,
            'nomor_telepon' => $nomor_telepon,
            'alamat' => $alamat,
            'aktif' => $aktif
        );
        $this->db->insert('tb_pengguna',$data);
        }
    function get_admin_id($pengguna_id){
        $query = $this->db->get_where('tb_pengguna', array('pengguna_id' => $pengguna_id));
        return $query->row();
    }
    function delete($pengguna_id){
        $this->db->where('pengguna_id', $pengguna_id);
        $this->db->delete('tb_pengguna');
    }
}
