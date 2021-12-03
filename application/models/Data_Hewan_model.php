<?php
/**
 * 
 */
class Data_Hewan_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('tb_hewan');// dari tabel tm_user
		//$this->db->join('tm_grup', 'tm_user.grup = tm_grup.id_grup');
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}

}
?>