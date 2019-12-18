<?php
/**
* 
*/
class Mbiaya extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAllBiaya()
	{
		$data = array();
		/*$this->db->select('id_biaya, id_kota_asal, id_kota_tujuan, total_berat, biaya');
		$this->db->from('biaya_pengiriman');
		$query = $this->db->get();*/
		$query = $this->db->query("
			SELECT bp.id_biaya, bp.id_kota_asal, bp.id_kota_tujuan, bp.total_berat, bp.biaya, ka.nama_kota AS kota_asal, kt.nama_kota AS kota_tujuan FROM biaya_pengiriman bp
			JOIN kota ka ON bp.id_kota_asal=ka.id_kota
			JOIN kota kt ON bp.id_kota_tujuan=kt.id_kota
		");
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function getAllBiayaId($id)
	{
		$data = array();
		/*$this->db->select('id_biaya, id_kota_asal, id_kota_tujuan, total_berat, biaya');
		$this->db->from('biaya_pengiriman');
		$query = $this->db->get();*/
		$query = $this->db->query("
			SELECT bp.id_biaya, bp.id_kota_asal, bp.id_kota_tujuan, bp.total_berat, bp.biaya, ka.nama_kota AS kota_asal, kt.nama_kota AS kota_tujuan FROM biaya_pengiriman bp
			JOIN kota ka ON bp.id_kota_asal=ka.id_kota
			JOIN kota kt ON bp.id_kota_tujuan=kt.id_kota
			WHERE bp.id_biaya = $id
		");
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function getBiayaForView()
	{
		$data = array();
		/*$this->db->select('id_biaya, nama_kota, total_berat, biaya');
		$this->db->from('biaya_pengiriman');
		$this->db->join('kota', 'biaya_pengiriman.id_kota_tujuan = kota.id_kota');
		$query = $this->db->get();*/
		$query = $this->db->query("
			SELECT `b`.`ID_BIAYA` AS `id_biaya`, `b`.`ID_KOTA_ASAL` AS `id_kota_asal`,`b`.`ID_KOTA_TUJUAN` AS `id_kota_tujuan`,`k2`.`NAMA_KOTA` AS `nama_kota_asal`,`k`.`NAMA_KOTA` AS `nama_kota_tujuan`,`b`.`TOTAL_BERAT` AS `total_berat`,`b`.`BIAYA` AS `biaya` 
			FROM (`biaya_pengiriman` `b` join `kota` `k` join `kota` `k2`) 
			WHERE (`b`.`ID_KOTA_TUJUAN` = `k`.`ID_KOTA` AND `b`.`ID_KOTA_ASAL` = `k2`.`ID_KOTA`) 
			");
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function getBiayaForSearch($id_kota_asal,$id_kota_tujuan)
	{
		$data = array();
		/*$this->db->select('id_biaya, id_kota_tujuan, nama_kota_tujuan, total_berat, biaya');
		$this->db->from('view_cari_biaya');
		$this->db->where('id_kota_tujuan', $id_kota_tujuan);*/
		// $query = $this->db->get();
		$query = $this->db->query("
			SELECT `b`.`ID_BIAYA` AS `id_biaya`, `b`.`ID_KOTA_ASAL` AS `id_kota_asal`,`b`.`ID_KOTA_TUJUAN` AS `id_kota_tujuan`,`k2`.`NAMA_KOTA` AS `nama_kota_asal`,`k`.`NAMA_KOTA` AS `nama_kota_tujuan`,`b`.`TOTAL_BERAT` AS `total_berat`,`b`.`BIAYA` AS `biaya` 
			FROM (`biaya_pengiriman` `b` join `kota` `k` join `kota` `k2`) 
			WHERE (`b`.`ID_KOTA_TUJUAN` = `k`.`ID_KOTA` AND `b`.`ID_KOTA_ASAL` = `k2`.`ID_KOTA` AND `b`.`ID_KOTA_ASAL` = $id_kota_asal AND `b`.`ID_KOTA_TUJUAN` = $id_kota_tujuan) 
			");
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function getBiayaById($id_biaya)
	{
		$data = array();
		$param = array('id_biaya' => $id_biaya);
		$this->db->select('id_biaya, id_kota_asal, id_kota_tujuan, total_berat, biaya');
		$query = $this->db->get_where('biaya_pengiriman', $param, 1);
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function getIdBiaya($asal, $tujuan)
	{
		$data = array();
		$param = array('id_kota_asal' => $asal, 'id_kota_tujuan' => $tujuan);
		$this->db->select('id_biaya, id_kota_asal, id_kota_tujuan, total_berat, biaya');
		$query = $this->db->get_where('biaya_pengiriman', $param, 1);
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function insert($kota_asal, $kota_tujuan, $berat, $biaya)
	{
		$data = array(
			'id_kota_asal' => $kota_asal,
			'id_kota_tujuan' => $kota_tujuan,
			'total_berat' => $berat,
			'biaya' => $biaya
			);
		$this->db->insert('biaya_pengiriman', $data);
	}

	public function delete($id_biaya)
	{
		$data = array('id_biaya' => $id_biaya);
		$this->db->delete('biaya_pengiriman', $data);
	}

	public function update($id_biaya, $kota_asal, $kota_tujuan, $berat, $biaya)
	{
		$data = array(
			'id_kota_asal' => $kota_asal,
			'id_kota_tujuan' => $kota_tujuan,
			'total_berat' => $berat,
			'biaya' => $biaya
			);
		$this->db->where('id_biaya', $id_biaya);
		$this->db->update('biaya_pengiriman', $data);
	}
}
?>