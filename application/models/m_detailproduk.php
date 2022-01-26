<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_detailproduk extends CI_Model
{
    public function getDataById($id)
    {
        $this->db->select('tb_hewan.*, tb_kategori_produk.product_type_name');
        $this->db->from('tb_hewan');
        $this->db->join('tb_kategori_produk', 'tb_kategori_produk.product_type_id = tb_hewan.product_type_id', 'left');
        $this->db->where("hewan_id = $id");
        $query = $this->db->get();
        return $query;
    }

    public function getOverallRating($id)
    {
        $this->db->select_avg('review_star');
        $this->db->where("hewan_id = $id");
        $query = $this->db->get('tb_review');
        return $query;
    }

    public function countReview($id)
    {
        $this->db->from('tb_review');
        $this->db->where("hewan_id = $id");
        return $this->db->count_all_results();
    }

    public function getReview($id)
    {
        $this->db->select('tb_review.*, tb_customer.customer_name, tb_customer.customer_image');
        $this->db->from('tb_review');
        $this->db->join('tb_customer', 'tb_customer.pengguna_id = tb_review.pengguna_id', 'left');
        $this->db->where("tb_review.hewan_id = $id");
        $query = $this->db->get();
        return $query;
    }

    public function addReview($data)
    {
        return $this->db->insert('tb_review', $data);
    }

    public function cekReview($customer, $product)
    {
        $this->db->from('tb_review');
        $this->db->where("pengguna_id = $customer");
        $this->db->where("hewan_id = $product");
        return $this->db->count_all_results();
    }

    public function editReview($customer, $product, $var)
    {
        $this->db->set($var);
        $this->db->where("pengguna_id = $customer");
        $this->db->where("hewan_id = $product");
        return $this->db->update('tb_review');
    }

    public function cekKeranjang($customer, $product)
    {
        $this->db->from('tb_keranjang');
        $this->db->where("pengguna_id = $customer");
        $this->db->where("hewan_id = $product");
        return $this->db->count_all_results();
    }

    public function addKeranjang($data)
    {
        return $this->db->insert('tb_keranjang', $data);
    }

    public function editKeranjang($customer, $product, $var)
    {
        $this->db->set($var);
        $this->db->where("pengguna_id = $customer");
        $this->db->where("hewan_id = $product");
        return $this->db->update('tb_keranjang');
    }

    public function getCartItemQty($pengguna_id, $hewan_id)
    {
        $this->db->select('jumlah_keranjang');
        $this->db->from('tb_keranjang');
        $this->db->where("pengguna_id = $pengguna_id");
        $this->db->where("hewan_id = $hewan_id");
        $query = $this->db->get();
        return $query;
    }

    public function getItemStock($hewan_id)
    {
        $this->db->select('jumlah');
        $this->db->from('tb_hewan');
        $this->db->where("hewan_id = $hewan_id");
        $query = $this->db->get();
        return $query;
    }
}
