<?php 
/**
* @author Ascaliko
*/
class Mloginadmin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->database();
	}	

	function validasi($username, $password)
	{
		$this->db->select('admin_id, admin_name, admin_password');
		$this->db->where('admin_name', $username);
		$this->db->where('admin_password', $password);
		$this->db->limit(1);
		$query = $this->db->get('admin');
		$this->session->set_userdata('lastquery', $this->db->last_query());
		if ($query->num_rows() > 0) {
			$row = $query->row_array();
			return $row;
		} else {
			$this->session->set_flashdata('error', 'Maaf, silahkan coba lagi!');
			return array();
		}
	}

	function validasi_cabang($email, $password)
	{
		// $this->db->select('id_cabang, email_cabang, password_cabang, nama_cabang, id_kota');
		// $this->db->where('email_cabang', $email);
		// $this->db->where('password_cabang', $password);
		// $this->db->limit(1);
		// $query = $this->db->get('cabang');
		$query = $this->db->query("SELECT  *
			from cabang c JOIN kota k ON c.id_kota=k.ID_KOTA JOIN provinsi p ON k.ID_PROVINSI=p.ID_PROVINSI where c.email_cabang = '$email' AND c.password_cabang = '$password' LIMIT 1");
		$this->session->set_userdata('lastquery', $this->db->last_query());
		if ($query->num_rows() > 0) {
			$row = $query->row_array();
			return $row;
		} else {
			$this->session->set_flashdata('error', 'Maaf, silahkan coba lagi!');
			return array();
		}
	}

	function validasi_agen($email, $password)
	{
		// $this->db->select('id_agen, email_agen, password_agen, nama_agen, id_kota');
		// $this->db->where('email_agen', $email);
		// $this->db->where('password_agen', $password);
		// $this->db->limit(1);
		// $query = $this->db->get('agen');
		$query = $this->db->query("SELECT *
			from agen a JOIN kota k ON a.id_kota=k.ID_KOTA JOIN provinsi p ON k.ID_PROVINSI=p.ID_PROVINSI where a.email_agen = '$email' AND a.password_agen = '$password' LIMIT 1");
		$this->session->set_userdata('lastquery', $this->db->last_query());
		if ($query->num_rows() > 0) {
			$row = $query->row_array();
			return $row;
		} else {
			$this->session->set_flashdata('error', 'Maaf, silahkan coba lagi!');
			return array();
		}
	}
}
?>