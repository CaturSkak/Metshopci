<?php

class produk_model extends CI_Model{
    public $title;
    public $content;
    public $date;
    
    
    function ambil_data($table)
    {
            return $this->db->get($table);
    }

function tampil_data(){
        return $this->db->get('tb_produk');
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    function add_data($nama_produk,$kategori,$jumlah_barang,$harga,$foto_produk,$deskripsi){
        $data = array(
            'nama_produk' => $nama_produk,
            'kategori' => $kategori,
            'jumlah_barang' => $jumlah_barang,
            'harga' => $harga,
            'foto_produk' => $foto_produk,
            'deskripsi' => $deskripsi
        );
        $this->db->insert('tb_produk',$data);
        }
    function delete($produk_id){
        $this->db->where('produk_id', $produk_id);
        $this->db->delete('tb_produk');
    }
    function get_produk_id($produk_id){
        $query = $this->db->get_where('tb_produk', array('produk_id' => $produk_id));
        return $query->row();
    }
}
