<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_customer extends CI_Model
{

    public function getDataByID($userID)
    {

        $this->db->select('*');
        $this->db->from('tb_customer');
        $this->db->join('tb_provinces', 'tb_provinces.province_id = tb_customer.province_id', 'left');
        $this->db->join('tb_cities', 'tb_cities.city_id = tb_customer.city_id', 'left');
        $this->db->join('tb_subdistricts', 'tb_subdistricts.subdistrict_id = tb_customer.subdistrict_id', 'left');
        $this->db->where("email", $userID);
        $query = $this->db->get();
        return $query;
    }
    function show_barang()
    {
        $hasil = $this->db->query("SELECT * FROM tb_payment_method");
        return $hasil;
    }


    public function getDataMetodePembayaran()
    {
        $this->db->select('*');
        $this->db->from('tb_payment_method');
        return $this->db->get();
    }
    function show_hewan()
    {
        $hasil = $this->db->query("SELECT * FROM tb_hewan");
        return $hasil;
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
        $this->db->from('tb_customer');
        $this->db->where("email", $id);
        $query = $this->db->get();
        return $query;
    }

    public function getUserKota($id)
    {
        $this->db->select('city_id');
        $this->db->from('tb_customer');
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
        return $this->db->update('tb_customer');
    }

    public function existsEmail($data)
    {
        $this->db->where("login_id = '$data'");
        $this->db->from('tb_customer');

        return $this->db->count_all_results();
    }

    public function defaultEmail($id, $data)
    {
        $this->db->where("pengguna_id = '$id'");
        $this->db->where("login_id = '$data'");
        $this->db->from('tb_customer');

        return $this->db->count_all_results();
    }
    public function wilayah($id)
    {
        $this->db->select('*');
        $this->db->from('tb_customer');
        $this->db->join('tb_provinces', 'tb_provinces.province_id = tb_customer.province_id');
        $this->db->join('tb_cities', 'tb_cities.city_id = tb_customer.city_id');
        $this->db->join('tb_subdistricts', 'tb_subdistricts.subdistrict_id = tb_customer.subdistrict_id');
        $this->db->where("pengguna_id  = $id");
        return $this->db->get('');
    }


    public function getkot()
    {
        $this->db->select('*');
        $this->db->from('tb_cities');
        $query = $this->db->get();
        return $query;
    }
    public function getkec()
    {
        $this->db->select('*');
        $this->db->from('tb_subdistricts');
        $query = $this->db->get();
        return $query;
    }
}
