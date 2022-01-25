<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_keranjang extends CI_Model
{
    public function getDataCustomer($customer_id)
    {
        $this->db->select('*');
        $this->db->from('tb_customer');
        $this->db->join('tb_provinces', 'tb_provinces.province_id = tb_customer.province_id', 'left');
        $this->db->join('tb_cities', 'tb_cities.city_id = tb_customer.city_id', 'left');
        $this->db->join('tb_subdistricts', 'tb_subdistricts.subdistrict_id = tb_customer.subdistrict_id', 'left');
        $this->db->where("customer_id = $customer_id");
        return $this->db->get();
    }

    public function getDataKeranjang($customer_id)
    {
        $this->db->select('tb_keranjang.*, tb_produk.product_name, tb_produk.product_price, tb_produk.product_image, tb_produk.product_stock, tb_produk.product_id');
        $this->db->from('tb_keranjang');
        $this->db->join('tb_customer', 'tb_customer.customer_id = tb_keranjang.customer_id', 'left');
        $this->db->join('tb_produk', 'tb_produk.product_id = tb_keranjang.product_id', 'left');
        $this->db->where("tb_customer.customer_id = $customer_id");
        return $this->db->get();
    }

    public function getDataMetodePembayaran()
    {
        $this->db->select('*');
        $this->db->from('tb_payment_method');
        return $this->db->get();
    }

    public function getDataBerat($id)
    {
        $stok = 0;
        $this->db->select('SUM(tb_produk.product_weight * tb_keranjang.cart_amount_item) AS berat');
        $this->db->from('tb_keranjang');
        $this->db->join('tb_produk', 'tb_produk.product_id = tb_keranjang.product_id', 'left');
        $this->db->where("tb_keranjang.customer_id = $id");
        $this->db->where("tb_produk.product_stock > $stok");
        return $this->db->get();
    }

    public function getDataKurir($kurir, $kab_id, $berat)
    {
        $asal = 160; // Alamat Toko / Pengirim
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=" . $asal . "&destination=" . $kab_id . "&weight=" . $berat . "&courier=" . $kurir . "",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: 1e09ec5d00c49c7e7244ecc47df9d967"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return FALSE;
        } else {
            return json_decode($response, true);
        }
    }

    public function deleteData($customer_id, $product_id)
    {
        $this->db->where('customer_id', $customer_id);
        $this->db->where('product_id', $product_id);
        return $this->db->delete('tb_keranjang');
    }

    public function cekKeranjang($customer, $product)
    {
        $this->db->from('tb_keranjang');
        $this->db->where("customer_id = $customer");
        $this->db->where("product_id = $product");
        return $this->db->count_all_results();
    }

    public function getItemStock($product_id)
    {
        $this->db->select('product_stock');
        $this->db->from('tb_produk');
        $this->db->where("product_id = $product_id");
        $query = $this->db->get();
        return $query;
    }

    public function editKeranjang($customer, $product, $var)
    {
        $this->db->set($var);
        $this->db->where("customer_id = $customer");
        $this->db->where("product_id = $product");
        return $this->db->update('tb_keranjang');
    }

    public function addKeranjang($data)
    {
        return $this->db->insert('tb_keranjang', $data);
    }

    public function addOrder($data)
    {
        return $this->db->insert('tb_order', $data);
    }

    public function getDataKeranjangCheckout($id)
    {
        $stok = 0;
        $this->db->select('tb_keranjang.*, tb_produk.*');
        $this->db->from('tb_keranjang');
        $this->db->join('tb_produk', 'tb_produk.product_id = tb_keranjang.product_id');
        $this->db->where("tb_keranjang.customer_id = $id");
        $this->db->where("tb_produk.product_stock > $stok");
        $query = $this->db->get();
        return $query;
    }

    public function addOrderItem($data)
    {
        return $this->db->insert('tb_order_item', $data);
    }

    public function addPayment($data)
    {
        return $this->db->insert('tb_payments', $data);
    }

    public function addKurir($data)
    {
        return $this->db->insert('tb_kurir', $data);
    }

    public function updateStock($id, $data)
    {
        $this->db->set($data);
        $this->db->where('product_id', $id);
        return $this->db->update('tb_produk');
    }
}
