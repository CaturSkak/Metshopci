<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_wilayah extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_all_provinsi()
	{
		$this->db->select('*');
		$this->db->from('wilayah_provinsi');
		$query = $this->db->get();

		return $query->result();
	}

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
	function getAll()
	{ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('tb_pengguna'); // dari tabel tm_user
		$this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = tb_pengguna.province_id');
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
}
