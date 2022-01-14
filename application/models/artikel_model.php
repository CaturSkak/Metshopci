<?php

class artikel_model extends CI_Model{
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
        return $this->db->get('tb_artikel');
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    function add_data($judul_artikel,$kategori,$foto,$deskripsi_artikel){
        $data = array(
            'judul_artikel' => $judul_artikel,
            'kategori' => $kategori,
            'foto' => $foto,
            'deskripsi_artikel' => $deskripsi_artikel
        );
        $this->db->insert('tb_artikel',$data);
        }
    function delete($artikel_id){
        $this->db->where('artikel_id', $artikel_id);
        $this->db->delete('tb_artikel');
    }
    function get_artikel_id($artikel_id){
        $query = $this->db->get_where('tb_artikel', array('artikel_id' => $artikel_id));
        return $query->row();
    }
}
