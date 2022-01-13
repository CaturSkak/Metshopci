<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model
{

    public function getDataByID($userID)
    {

        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->join('tb_provinces', 'tb_provinces.province_id = tb_pengguna.province_id', 'left');
        $this->db->join('tb_cities', 'tb_cities.city_id = tb_pengguna.city_id', 'left');
        $this->db->join('tb_subdistricts', 'tb_subdistricts.subdistrict_id = tb_pengguna.subdistrict_id', 'left');
        $this->db->where("email", $userID);
        $query = $this->db->get();
        return $query;
    }

    public function getProvinsi()
    {
        $this->db->select('*');
        $this->db->from('tb_provinces');
        $query = $this->db->get();
        return $query;
    }

    public function getUserProvinsi($id)
    {
        $this->db->select('province_id');
        $this->db->from('tb_pengguna');
        $this->db->where("email", $id);
        $query = $this->db->get();
        return $query;
    }

    public function getUserKota($id)
    {
        $this->db->select('city_id');
        $this->db->from('tb_pengguna');
        $this->db->where("email", $id);
        $query = $this->db->get();
        return $query;
    }

    public function getKota($id)
    {
        $this->db->select('*');
        $this->db->from('tb_cities');
        $this->db->where("province_id", $id);
        $query = $this->db->get();
        return $query;
    }


    public function getKecamatan($id)
    {
        $this->db->select('*');
        $this->db->from('tb_subdistricts');
        $this->db->where("city_id", $id);
        $query = $this->db->get();
        return $query;
    }

    public function editData($id, $data)
    {
        $this->db->set($data);
        $this->db->where('pengguna_id', $id);
        return $this->db->update('tb_pengguna');
    }

    public function existsEmail($data)
    {
        $this->db->where("login_id = '$data'");
        $this->db->from('tb_pengguna');

        return $this->db->count_all_results();
    }

    public function defaultEmail($id, $data)
    {
        $this->db->where("pengguna_id = '$id'");
        $this->db->where("login_id = '$data'");
        $this->db->from('tb_pengguna');

        return $this->db->count_all_results();
    }
    public function wilayah($id)
    {
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->join('tb_provinces', 'tb_provinces.province_id = tb_pengguna.province_id');
        $this->db->join('tb_cities', 'tb_cities.city_id = tb_pengguna.city_id');
        $this->db->join('tb_subdistricts', 'tb_subdistricts.subdistrict_id = tb_pengguna.subdistrict_id');
        $this->db->where("pengguna_id  = $id");
        return $this->db->get('');
    }
}
