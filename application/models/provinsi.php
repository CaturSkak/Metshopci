<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class provinsi extends CI_Model
{


    public function kec($userID)
    {
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->join('tb_provinces', 'tb_provinces.province_id = tb_pengguna.province_id', 'left');
        $this->db->join('tb_cities', 'tb_cities.city_id = tb_pengguna.city_id', 'left');
        $this->db->join('tb_subdistricts', 'tb_subdistricts.subdistrict_id = tb_pengguna.subdistrict_id', 'left');
        $this->db->where("email", $userID);
        return $this->db->get();
    }
    public function getUserProvinsi($userID)
    {
        $this->db->select('province_id');
        $this->db->from('tb_pengguna');
        $this->db->where("email", $userID);
        $query = $this->db->get();
        return $query;
    }

    public function getUserKota($userID)
    {
        $this->db->select('city_id');
        $this->db->from('tb_pengguna');
        $this->db->where("email", $userID);
        $query = $this->db->get();
        return $query;
    }

    public function getKota($userID)
    {
        $this->db->select('*');
        $this->db->from('tb_cities');
        $this->db->where("email", $userID);
        $query = $this->db->get();
        return $query;
    }


    public function getKecamatan($userID)
    {
        $this->db->select('*');
        $this->db->from('tb_subdistricts');
        $this->db->where("email", $userID);
        $query = $this->db->get();
        return $query;
    }

    public function editData($id, $data)
    {
        $this->db->set($data);
        $this->db->where('pengguna_id', $id);
        return $this->db->update('tb_pengguna');
    }
}
