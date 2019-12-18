<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Page extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['judul'] = 'Home';
		$data['konten'] = 'guest/beranda';
		$data['aktif'] = 'active';
		$this->load->view('guest/page', $data);
	}
	
	public function biaya_pengiriman()
	{
		$data['judul'] = 'Biaya Pengiriman';
		$data['konten'] = 'guest/biaya';
		$data['aktif'] = 'active';
		$data['biaya'] = $this->mbiaya->getBiayaForView();
		$data['kota'] = $this->mkota->getAllKota();
		$this->load->view('guest/page', $data);
	}

	public function cek_biaya_pengiriman()
	{
		$id_kota_asal = $this->input->get('cbKotaAsal');
		$id_kota_tujuan = $this->input->get('cbKotaTujuan');
		$data['judul'] = 'Biaya Pengiriman';
		$data['aktif'] = 'active';
		$data['kota'] = $this->mkota->getAllKota();
		if (is_null($id_kota_asal)||is_null($id_kota_tujuan)||empty($id_kota_asal)||empty($id_kota_tujuan)) {
			$data['konten'] = 'guest/biaya';
			$data['biaya'] = $this->mbiaya->getBiayaForView();
		} else {
			$data['konten'] = 'guest/cek_biaya';
			$data['biaya'] = $this->mbiaya->getBiayaForSearch($id_kota_asal, $id_kota_tujuan);
		}
		$this->load->view('guest/page', $data);
	}

	public function daftar_pelanggan()
	{
		$data['judul'] = 'Daftar Pelanggan';
		$data['konten'] = 'guest/reg_pelanggan';
		$data['aktif'] = 'active';
		$data['bidang'] = $this->mbidang->getAllBidang();
		$this->load->view('guest/page', $data);
	}

	public function pengiriman_barang()
	{
		$data['judul'] = 'Pengiriman Barang';
		$data['konten'] = 'guest/pengiriman';
		$data['aktif'] = 'active';
		$id_pengiriman = $this->mpengiriman->genIdPengiriman();
		if (count($id_pengiriman)>0) {
			foreach ($id_pengiriman as $i) {
				$id = $id_pengiriman['new_id'];
			}
		}
		$data['id'] = $id;
		$data['kota1'] = $this->mkota->getKotaNotEqual('Surabaya');
		$data['kota'] = $this->mkota->getAllKota();
		$this->load->view('guest/page', $data);
	}

	public function tracking()
	{
		$id_cust = $this->session->userdata('id_cust');
		$data['judul'] = 'Tracking Area';
		$data['konten'] = 'guest/tracking';
		$data['aktif'] = 'active';
		$data['tracking'] = $this->mtracking->getTrackingForCust($id_cust);
		$this->load->view('guest/page', $data);
	}

	public function layanan()
	{
		$data['judul'] = 'Layanan';
		$data['konten'] = 'guest/layanan';
		$data['aktif'] = 'dark';
		$this->load->view('guest/page', $data);
	}

	public function profil()
	{
		$data['judul'] = 'Profil Perusahaan';
		$data['konten'] = 'guest/profil';
		$data['aktif'] = 'dark';
		$this->load->view('guest/page', $data);
	}

	public function lowongan()
	{
		$data['judul'] = 'Lowongan Kerja';
		$data['konten'] = 'guest/lowongan';
		$data['aktif'] = 'active';
		$this->load->view('guest/page', $data);
	}

	public function promo()
	{
		$data['judul'] = 'Promo';
		$data['konten'] = 'guest/promo';
		$data['aktif'] = 'active';
		$this->load->view('guest/page', $data);
	}

	public function rekanan()
	{
		$data['judul'] = 'Perusahaan Rekanan';
		$data['konten'] = 'guest/rekanan';
		$data['aktif'] = 'active';
		$this->load->view('guest/page', $data);
	}
}
?>