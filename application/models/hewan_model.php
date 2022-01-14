<?php

class hewan_model extends CI_Model{
    public $title;
    public $content;
    public $date;
    
    
    function ambil_data($table)
    {
            return $this->db->get($table);
    }

function tampil_data(){
        return $this->db->get('tb_hewan');
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    function add_data($jenis_hewan,$jenis,$jenis_kelamin,$rincian,$harga,$foto_hewan,$deskripsi){
        $data = array(
            'jenis_hewan' => $jenis_hewan,
            'jenis' => $jenis,
            'jenis_kelamin' => $jenis_kelamin,
            'rincian' => $rincian,
            'harga' => $harga,
            'foto_hewan' => $foto_hewan,
            'deskripsi' => $deskripsi
        );
        $this->db->insert('tb_hewan',$data);
        }
    function delete($hewan_id){
        $this->db->where('hewan_id', $hewan_id);
        $this->db->delete('tb_hewan');
    }
    function get_hewan_id($hewan_id){
        $query = $this->db->get_where('tb_hewan', array('hewan_id' => $hewan_id));
        return $query->row();
    }
}
