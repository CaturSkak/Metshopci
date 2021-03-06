<?php
/**
 * 
 */
class customer_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('tb_cutomer');// dari tabel tm_customer
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}

	function input_data($data, $table) { //membuat function input_data
		$this->db->insert($table,$data);
		//untuk proses insert data ke database
	}
	function tampil_data(){
        $this->db->where('tipepengguna_id', '2');
        return $this->db->get('tb_pengguna');
    }

	function edit_data($where,$table) {
		return $this->db->get_where($table, $where);
	}

	function update_data($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_data($where, $table) {
		$this->db->where($where);
		$this->db->delete($table);
	}

	function login($user, $pass, $table){
		$this->db->select('*');
		$this->db->from('tb_customer');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$query = $this->db->get();
		return $query;
	}
	function get_customer_id($pengguna_id){
        $query = $this->db->get_where('tb_pengguna', array('pengguna_id' => $pengguna_id));
        return $query->row();
    }
	function delete($pengguna_id){
        $this->db->where('pengguna_id', $pengguna_id);
        $this->db->delete('tb_pengguna');
    }
}
?>