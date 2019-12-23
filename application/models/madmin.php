<?php
/**
* 
*/
class Madmin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAllAdmin()
	{
		$data = array();
		$this->db->select('admin_id, admin_name, admin_password');
		$this->db->from('admin');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function getAllCabang()
	{
		$data = array();
		$query = $this->db->query("SELECT *
			from cabang c JOIN kota k ON c.ID_KOTA=k.ID_KOTA JOIN provinsi p ON k.ID_PROVINSI=p.ID_PROVINSI order by id_cabang asc");
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}
	public function getCabangById($id)
	{
		$data = array();
		$query = $this->db->query("SELECT *
			from cabang c JOIN kota k ON c.ID_KOTA=k.ID_KOTA JOIN provinsi p ON k.ID_PROVINSI=p.ID_PROVINSI WHERE c.id_cabang=$id order by id_cabang asc");
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function getAllAgen($id_cabang)
	{
		$data = array();
		$query = $this->db->query("SELECT *
			from agen c JOIN kota k ON c.ID_KOTA=k.ID_KOTA JOIN provinsi p ON k.ID_PROVINSI=p.ID_PROVINSI WHERE c.id_cabang=$id_cabang order by id_agen asc");
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}
	public function getAgenById($id)
	{
		$data = array();
		$query = $this->db->query("SELECT *
			from agen c JOIN kota k ON c.ID_KOTA=k.ID_KOTA JOIN provinsi p ON k.ID_PROVINSI=p.ID_PROVINSI WHERE c.id_agen=$id order by id_agen asc");
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function getBidangById($admin_id)
	{
		$data = array();
		$param = array('admin_id' => $admin_id);
		$this->db->select('admin_id, admin_name, admin_password');
		$query = $this->db->get_where('admin', $param, 1);
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function update($admin_id, $admin_name, $admin_password)
	{
		$data = array('admin_name' => $admin_name, 'admin_password' => $admin_password);
		$this->db->where('admin_id', $admin_id);
		$this->db->update('admin', $data);
	}
}
?>