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

	function get_karyawan_id($pengguna_id){
        $query = $this->db->get_where('tb_pengguna', array('pengguna_id' => $pengguna_id));
        return $query->row();
    }
    function delete($pengguna_id){
        $this->db->where('pengguna_id', $pengguna_id);
        $this->db->delete('tb_pengguna');
    }
}
