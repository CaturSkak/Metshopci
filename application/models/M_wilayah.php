<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_wilayah extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function getDataByID($id)
	{

		$this->db->select('*');
		$this->db->from('tb_pengguna');
		$this->db->join('tb_provinces', 'tb_provinces.province_id = tb_pengguna.province_id', 'left');
		$this->db->join('tb_cities', 'tb_cities.city_id = tb_pengguna.city_id', 'left');
		$this->db->join('tb_subdistricts', 'tb_subdistricts.subdistrict_id = tb_pengguna.subdistrict_id', 'left');
		$this->db->where("pengguna_id = $id");
		$query = $this->db->get();
		return $query;
	}

	public function data($id)
	{

		$this->db->select('*');
		$this->db->from('tb_pengguna');
		$this->db->join('tb_provinces', 'tb_provinces.province_id = tb_pengguna.province_id', 'left');
		$this->db->join('tb_cities', 'tb_cities.city_id = tb_pengguna.city_id', 'left');
		$this->db->join('tb_subdistricts', 'tb_subdistricts.subdistrict_id = tb_pengguna.subdistrict_id', 'left');
		$this->db->where("pengguna_id = $id");
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

	public function getUserProvinsi($id)
	{
		$this->db->select('province_id');
		$this->db->from('tb_pengguna');
		$this->db->where("email = $id");
		$query = $this->db->get();
		return $query;
	}

	public function getUserKota($id)
	{
		$this->db->select('city_id');
		$this->db->from('tb_pengguna');
		$this->db->where("email = $id");
		$query = $this->db->get();
		return $query;
	}

	public function getKota($id)
	{
		$this->db->select('*');
		$this->db->from('tb_cities');
		$this->db->where("province_id = $id");
		$query = $this->db->get();
		return $query;
	}

	public function getKecamatan($id)
	{
		$this->db->select('*');
		$this->db->from('tb_subdistricts');
		$this->db->where("city_id = $id");
		$query = $this->db->get();
		return $query;
	}

	public function editData($id, $data)
	{
		$this->db->set($data);
		$this->db->where('pengguna_id', $id);
		return $this->db->update('tb_pengguna');
	}

	function get_all_provinsi($id)
	{
		$this->db->select('*');
		$this->db->from('wilayah_provinsi');
		$query = $this->db->get();
		$this->db->where("pengguna_id  = $id");
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
