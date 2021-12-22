<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class provinsi extends CI_Model
{

    public function wilayah()
    {
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->join('wilayah_provinsi', ' wilayah_provinsi.id =  tb_pengguna.province_id');
        // $this->db->where("pengguna_id  = $id");
        return $this->db->get('');
    }
    public function kab()
    {
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->join('wilayah_kabupaten', ' wilayah_kabupaten.id =  tb_pengguna.city_id');

        return $this->db->get('');
    }
    public function emboh()
    {
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->join('wilayah_desa', ' wilayah_desa.id =  tb_pengguna.desa');

        return $this->db->get('');
    }
    public function des()
    {
        $this->db->select('*');
        $this->db->from('wilayah_desa');
        $this->db->join('tb_pengguna', ' tb_pengguna.desa =  wilayah_desa.id');

        return $this->db->get('');
    }
    public function kec()
    {
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->join('wilayah_kecamatan', ' wilayah_kecamatan.id =  tb_pengguna.subdistrict_id');

        return $this->db->get('');
    }
    // public function desa()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tb_pengguna');
    //     $this->db->join('wilayah_desa', ' wilayah_desa.id =  tb_pengguna.desa');

    //     return $this->db->get('');
    // }
    public function getData($id)
    {
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = tb_pengguna.province_id', 'left');
        $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id = tb_pengguna.city_id', 'left');
        $this->db->join('wilayah_kecamatan', 'wilayah_kecamatan.id = tb_pengguna.subdistrict_id', 'left');
        $this->db->join('wilayah_desa', 'wilayah_desa.id = tb_pengguna.desa', 'left');
        $this->db->where("pengguna_id  = $id");
        $query = $this->db->get();
        return $query;
    }
}
