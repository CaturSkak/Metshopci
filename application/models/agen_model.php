<?php

class agen_model extends CI_Model{
    public $title;
    public $content;
    public $date;
    
    
    function ambil_data($table)
    {
            return $this->db->get($table);
    }

function tampil_data(){
        return $this->db->get('tb_agen');
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    function add_data($nama_agen,$alamat,$nomer_telepon,$deskripsi){
        $data = array(
            'nama_agen' => $nama_agen,
            'alamat' => $alamat,
            'nomer_telepon' => $nomer_telepon,
            'deskripsi' => $deskripsi
        );
        $this->db->insert('tb_agen',$data);
        }
    function delete($agen_id){
        $this->db->where('agen_id', $agen_id);
        $this->db->delete('tb_agen');
    }
    function get_agen_id($agen_id){
        $query = $this->db->get_where('tb_agen', array('agen_id' => $agen_id));
        return $query->row();
    }
}
