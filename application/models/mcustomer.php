<?php
/**
* @author Ascaliko
*/
class Mcustomer extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		//session_start();
		$this->load->database();
	}

	public function getAllCustomer()
	{
		$this->db->select('id_cust, id_bidang_kerja, email_cust, password_cust, nama_cust, jenis_kel_cust, tgl_lahir_cust,
			alamat_cust, kota_cust, no_telp_cust, perusahaan_cust, alamat_per_cust');
		$this->db->from('customer');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function getAllCustomerPengiriman()
	{
		$data = array();
		$query = $this->db->query('SELECT * FROM customer ORDER BY nama_cust ASC');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}

		$query->free_result();
		return $data;
	}

	public function getCustomerById($id_cust)
	{
		$data = array();
		$param = array('id_cust' => $id_cust);
		$this->db->select('id_cust, nama_bidang_kerja, email_cust, password_cust, nama_cust, jenis_kel_cust, tgl_lahir_cust,
					    alamat_cust, kota_cust, no_telp_cust, perusahaan_cust, alamat_per_cust');
		$this->db->from('customer');
		$this->db->join('bidang_kerja', 'customer.id_bidang_kerja = bidang_kerja.id_bidang_kerja', 'left');
		$this->db->where('id_cust', $id_cust);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function insert($bidang_kerja, $email_cust, $password_cust, $nama_cust, $jenis_kel_cust, $tgl_lahir_cust, 
		$alamat_cust, $kota_cust, $no_telp_cust, $perusahaan_cust, $alamat_per_cust)
	{
		$data = array(
			'id_bidang_kerja' => $bidang_kerja,
			'email_cust' => $email_cust,
			'password_cust' => $password_cust,
			'nama_cust' => $nama_cust,
			'jenis_kel_cust' => $jenis_kel_cust,
			'tgl_lahir_cust' => $tgl_lahir_cust,
			'alamat_cust' => $alamat_cust,
			'kota_cust' => $kota_cust,
			'no_telp_cust' => $no_telp_cust,
			'perusahaan_cust' => $perusahaan_cust,
			'alamat_per_cust' => $alamat_per_cust
			);
		$this->db->insert('customer', $data);
	}

	public function update($id_cust, $bidang_kerja, $email_cust, $password_cust, $nama_cust, $jenis_kel_cust, $tgl_lahir_cust,
		$alamat_cust, $kota_cust, $no_telp_cust, $perusahaan_cust, $alamat_per_cust)
	{
		$data = array(
			'id_bidang_kerja' => $bidang_kerja,
			'email_cust' => $email_cust,
			'password_cust' => $password_cust,
			'nama_cust' => $nama_cust,
			'jenis_kel_cust' => $jenis_kel_cust,
			'tgl_lahir_cust' => $tgl_lahir_cust,
			'alamat_cust' => $alamat_cust,
			'kota_cust' => $kota_cust,
			'no_telp_cust' => $no_telp_cust,
			'perusahaan_cust' => $perusahaan_cust,
			'alamat_per_cust' => $alamat_per_cust
			);
		$this->db->where('id_cust', $id_cust);
		$this->db->update('customer', $data);
	}

	public function delete($id_cust)
	{
		$data = array('id_cust' => $id_cust);
		$this->db->delete('customer', $data);
	}

	function validasi($email, $password)
	{
		$this->db->select('id_cust, email_cust, password_cust, nama_cust');
		$this->db->where('email_cust', $email);
		$this->db->where('password_cust', $password);
		$this->db->limit(1);
		$query = $this->db->get('customer');
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