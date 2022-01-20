<?php

class karyawan_model extends CI_Model{
    public $title;
    public $content;
    public $date;
    
    
    function ambil_data($table)
    {
            return $this->db->get($table);
    }


    function tampil_data(){
        $this->db->where('tipepengguna_id', '3');
        return $this->db->get('tb_pengguna');
    }

    function get_artikel_id($artikel_id){
        $query = $this->db->get_where('tb_artikel', array('artikel_id' => $artikel_id));
        return $query->row();
    }
}
