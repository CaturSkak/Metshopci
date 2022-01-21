<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Pembayaran extends CI_Model
{
    public function getData()
    {
        $this->db->select('*');
        $this->db->from('tb_payment_method');
        $query = $this->db->get();
        return $query;
    }

    public function getDataById($id)
    {
        $this->db->select('*');
        $this->db->from('tb_payment_method');
        $this->db->where("payment_method_id = $id");
        $query = $this->db->get();
        return $query;
    }

    public function deleteData($id)
    {
        $this->db->where('payment_method_id', $id);
        return $this->db->delete('tb_payment_method');
    }

    public function editData($id, $data)
    {
        $this->db->set($data);
        $this->db->where('payment_method_id', $id);
        return $this->db->update('tb_payment_method');
    }

    public function addData($data)
    {
        return $this->db->insert('tb_payment_method', $data);
    }
}
