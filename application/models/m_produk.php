<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_produk extends CI_Model
{
    public function getData()
    {
        $this->db->select('tb_produk.*, tb_kategori_produk.product_type_name');
        $this->db->from('tb_produk');
        $this->db->join('tb_kategori_produk', 'tb_kategori_produk.product_type_id = tb_produk.product_type_id', 'left');
        $query = $this->db->get();
        return $query;
    }

    public function getDataCategory()
    {
        $query = $this->db->get('tb_kategori_produk');
        return $query;
    }

    public function countProduct()
    {
        $query = $this->db->count_all('tb_produk');
        return $query;
    }

    public function getDataKategori()
    {
        $this->db->select('*');
        $this->db->from('kategori_jumlah_produk');
        $query = $this->db->get();
        return $query;
    }

    public function getDataSearch($data)
    {
        $this->db->select('tb_produk.*, tb_kategori_produk.product_type_name');
        $this->db->from('tb_produk');
        $this->db->join('tb_kategori_produk', 'tb_kategori_produk.product_type_id = tb_produk.product_type_id', 'left');
        $this->db->like('product_name', $data);
        $query = $this->db->get();
        return $query;
    }

    public function getDataFilter($var)
    {
        $this->db->select('tb_produk.*, tb_kategori_produk.product_type_name');
        $this->db->from('tb_produk');
        $this->db->join('tb_kategori_produk', 'tb_kategori_produk.product_type_id = tb_produk.product_type_id', 'left');
        $this->db->where("tb_kategori_produk.product_type_id = $var");
        $query = $this->db->get();
        return $query;
    }

    public function getDataFilterBy($var, $order, $filter)
    {
        $field = 'tb_produk.' . $filter;
        $this->db->select('tb_produk.*, tb_kategori_produk.product_type_name');
        $this->db->from('tb_produk');
        $this->db->join('tb_kategori_produk', 'tb_kategori_produk.product_type_id = tb_produk.product_type_id', 'left');
        $this->db->order_by($field, $order);
        $this->db->where("tb_kategori_produk.product_type_id = $var");
        $query = $this->db->get();
        return $query;
    }

    public function getDataBy($order, $filter)
    {
        $field = 'tb_produk.' . $filter;
        $this->db->select('tb_produk.*, tb_kategori_produk.product_type_name');
        $this->db->from('tb_produk');
        $this->db->join('tb_kategori_produk', 'tb_kategori_produk.product_type_id = tb_produk.product_type_id', 'left');
        $this->db->order_by($field, $order);
        $query = $this->db->get();
        return $query;
    }
}
