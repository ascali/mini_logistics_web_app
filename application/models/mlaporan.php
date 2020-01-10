<?php
/**
* @author Ascaliko
*/
class Mlaporan extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getTahunPengiriman()
	{
		$data = array();
		$query = $this->db->query('select distinct(year(tgl_pengiriman)) as tahun from pengiriman');
		if (count($query->result_array()) > 0) {
			foreach ($query->result_array() as $value) {
				$data[] = $value;
			}
		}
		$query->free_result();
		return $data;
	}

	public function getBulanPengiriman()
	{
		$data = array();
		$query = $this->db->query('select distinct(month(tgl_pengiriman)) as tahun from pengiriman');
		if (count($query->result_array()) > 0) {
			foreach ($query->result_array() as $value) {
				$data[] = $value;
			}
		}
		$query->free_result();
		return $data;
	}

	public function get_data_laporan_harian($date)
	{
		$data = array();
// 		$param = array('bulan' => $bln, 'tahun' => $thn);
		//$query = $this->db->get_where('view_laporan_pengiriman_bulanan', $param);
		$query = $this->db->query("select  `p`.`TGL_PENGIRIMAN` AS `tanggal`, `p`.`BIAYA_PENGIRIMAN` AS `biaya_pengiriman`, `p`.`ID_PENGIRIMAN` AS `id_pengiriman`,`c`.`NAMA_CUST` AS `nama_cust`,`k`.`NAMA_KOTA` AS `nama_kota`,
		    sum(`b`.`BERAT_BARANG`) AS `berat_pengiriman`,dayofmonth(`p`.`TGL_PENGIRIMAN`) AS `tanggal`,month(`p`.`TGL_PENGIRIMAN`) AS `bulan`,year(`p`.`TGL_PENGIRIMAN`) AS `tahun`,`t`.`STATUS_PENGIRIMAN` AS `status_pengiriman` 
		    from ((((((`pengiriman` `p` join `customer` `c`) join `barang` `b`) join `detil_pengiriman` `d`) join `tracking` `t`) join `biaya_pengiriman` `bp`) join `kota` `k`) 
		    where ((`c`.`ID_CUST` = `t`.`ID_CUST`) and (`t`.`ID_PENGIRIMAN` = `p`.`ID_PENGIRIMAN`) and (`p`.`ID_PENGIRIMAN` = `d`.`ID_PENGIRIMAN`) and (`d`.`ID_BARANG` = `b`.`ID_BARANG`) 
		    and (`p`.`ID_BIAYA` = `bp`.`ID_BIAYA`) and (`k`.`ID_KOTA` = `bp`.`ID_KOTA_TUJUAN`)) and (`p`.`TGL_PENGIRIMAN` = '$date') group by `p`.`ID_PENGIRIMAN`");
		if (count($query->result_array()) > 0) {
			foreach ($query->result_array() as $value) {
				$data[] = $value;
			}
		}
		$query->free_result();
		return $data;
	}

	public function get_data_laporan_mingguan($date1,$date2)
	{
		$data = array();
// 		$param = array('bulan' => $bln, 'tahun' => $thn);
		//$query = $this->db->get_where('view_laporan_pengiriman_bulanan', $param);
		$query = $this->db->query("select  `p`.`TGL_PENGIRIMAN` AS `tanggal`, `p`.`BIAYA_PENGIRIMAN` AS `biaya_pengiriman`, `p`.`ID_PENGIRIMAN` AS `id_pengiriman`,`c`.`NAMA_CUST` AS `nama_cust`,`k`.`NAMA_KOTA` AS `nama_kota`,
		    sum(`b`.`BERAT_BARANG`) AS `berat_pengiriman`,dayofmonth(`p`.`TGL_PENGIRIMAN`) AS `tanggal`,month(`p`.`TGL_PENGIRIMAN`) AS `bulan`,year(`p`.`TGL_PENGIRIMAN`) AS `tahun`,`t`.`STATUS_PENGIRIMAN` AS `status_pengiriman` 
		    from ((((((`pengiriman` `p` join `customer` `c`) join `barang` `b`) join `detil_pengiriman` `d`) join `tracking` `t`) join `biaya_pengiriman` `bp`) join `kota` `k`) 
		    where ((`c`.`ID_CUST` = `t`.`ID_CUST`) and (`t`.`ID_PENGIRIMAN` = `p`.`ID_PENGIRIMAN`) and (`p`.`ID_PENGIRIMAN` = `d`.`ID_PENGIRIMAN`) and (`d`.`ID_BARANG` = `b`.`ID_BARANG`) 
		    and (`p`.`ID_BIAYA` = `bp`.`ID_BIAYA`) and (`k`.`ID_KOTA` = `bp`.`ID_KOTA_TUJUAN`)) and (`p`.`TGL_PENGIRIMAN` >= '$date1') and (`p`.`TGL_PENGIRIMAN` <= '$date2') group by `p`.`ID_PENGIRIMAN`");
		if (count($query->result_array()) > 0) {
			foreach ($query->result_array() as $value) {
				$data[] = $value;
			}
		}
		$query->free_result();
		return $data;
	}

	public function get_data_laporan_bulanan($thn, $bln)
	{
		$data = array();
		$param = array('bulan' => $bln, 'tahun' => $thn);
		//$query = $this->db->get_where('view_laporan_pengiriman_bulanan', $param);
		$query = $this->db->query("select  `p`.`TGL_PENGIRIMAN` AS `tanggal`, `p`.`BIAYA_PENGIRIMAN` AS `biaya_pengiriman`, `p`.`ID_PENGIRIMAN` AS `id_pengiriman`,`c`.`NAMA_CUST` AS `nama_cust`,`k`.`NAMA_KOTA` AS `nama_kota`,
		    sum(`b`.`BERAT_BARANG`) AS `berat_pengiriman`,dayofmonth(`p`.`TGL_PENGIRIMAN`) AS `tanggal`,month(`p`.`TGL_PENGIRIMAN`) AS `bulan`,year(`p`.`TGL_PENGIRIMAN`) AS `tahun`,`t`.`STATUS_PENGIRIMAN` AS `status_pengiriman` 
		    from ((((((`pengiriman` `p` join `customer` `c`) join `barang` `b`) join `detil_pengiriman` `d`) join `tracking` `t`) join `biaya_pengiriman` `bp`) join `kota` `k`) 
		    where ((`c`.`ID_CUST` = `t`.`ID_CUST`) and (`t`.`ID_PENGIRIMAN` = `p`.`ID_PENGIRIMAN`) and (`p`.`ID_PENGIRIMAN` = `d`.`ID_PENGIRIMAN`) and (`d`.`ID_BARANG` = `b`.`ID_BARANG`) 
		    and (`p`.`ID_BIAYA` = `bp`.`ID_BIAYA`) and (`k`.`ID_KOTA` = `bp`.`ID_KOTA_TUJUAN`)) and (month(`p`.`TGL_PENGIRIMAN`) = '$bln') and (year(`p`.`TGL_PENGIRIMAN`) = '$thn') group by `p`.`ID_PENGIRIMAN`");
		if (count($query->result_array()) > 0) {
			foreach ($query->result_array() as $value) {
				$data[] = $value;
			}
		}
		$query->free_result();
		return $data;
	}

	public function get_data_laporan_tahunan($thn)
	{
		$data = array();
		$param = array('tahun' => $thn);
// 		$query = $this->db->get_where('view_jumlah_pengiriman', $param);
        $query = $this->db->query("select sum(`p`.`BIAYA_PENGIRIMAN`) AS `biaya_pengiriman`, `k`.`NAMA_KOTA` AS `kota`,count(`p`.`ID_PENGIRIMAN`) AS `jumlah`,month(`p`.`TGL_PENGIRIMAN`) AS `bulan`,year(`p`.`TGL_PENGIRIMAN`) AS `tahun` 
        from ((`kota` `k` join `pengiriman` `p`) join `biaya_pengiriman` `b`) where ((`p`.`ID_BIAYA` = `b`.`ID_BIAYA`) and (`b`.`ID_KOTA_TUJUAN` = `k`.`ID_KOTA`)) and (year(`p`.`TGL_PENGIRIMAN`) = '$thn') group by `k`.`NAMA_KOTA`");
		
		if (count($query->result_array()) > 0) {
			foreach ($query->result_array() as $value) {
				$data[] = $value;
			}
		}
		$query->free_result();
		return $data;
	}

	public function jumlah_pengiriman($thn)
	{
		$data = array();
		$query = $this->db->query('select count(*) as jumlah_pengiriman from pengiriman where year(tgl_pengiriman) = '.$thn);
		if (count($query->result_array()) > 0) {
			foreach ($query->result_array() as $value) {
				$data[] = $value;
			}
		}
		$query->free_result();
		return $data;
	}
}
?>