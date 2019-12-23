<?php
/**
* @author Ascaliko
*/
class Cabang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$masuk = $this->session->userdata('status');
		if ($masuk != "masuk") {
			$this->login();
		} else {
			$data['judul'] = 'Beranda';
			$data['aktif'] = 'active';
			$data['module'] = 'beranda';
			$data['konten'] = 'cabang/beranda';
			$this->load->view('cabang/pg_cabang', $data);
		}
	}

	public function agen()
	{
		$masuk = $this->session->userdata('status');
		if ($masuk != "masuk") {
			$this->login();
		} else {
			$data['judul'] = 'Agen';
			$data['aktif'] = 'active';
			$data['module'] = 'cabang_cabang_agen';
			$data['konten'] = 'cabang/agen';
			$this->load->view('cabang/pg_cabang', $data);
		}
	}

	public function login()
	{
		$data['judul'] = 'Login Halaman Cabang';
		$data['module'] = 'login';
		$this->load->view('cabang/login', $data);
	}

	public function ceklogin()
	{
		$this->load->library('encrypt');
		$username = $this->input->post('txtEmail');
		$password = $this->input->post('txtPassword');
		$row = $this->mcustomer->validasi_cabang($username, $password);
		if (count($row) > 0) {
			$item = array(
				'id_cabang' => $row['id_cabang'],
				'email_cabang' => $row['email_cabang'],
				'password_cabang' => $row['password_cabang'],
				'nama_cabang' => $row['nama_cabang'],
				'status' => 'masuk'
			);
			$this->session->set_userdata($item);
			redirect('cabang', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Maaf, silahkan coba lagi!');
			redirect('cabang/login', 'refresh');
		}
	}

	public function logout()
	{	
		$this->session->sess_destroy();
		$this->session->set_flashdata('result', 'Anda sudah keluar');
		header('location:'.base_url().'index.php/cabang');
		redirect('cabang', 'refresh');
	}

	public function read_json(){
		if (!$this->input->get('id')) {
			$data = $this->madmin->getAllCabang();
		} else {
			$data = $this->madmin->getCabangById($this->input->get('id'));
			$data = $data[0];
		}
		$json = array('data'=>$data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}

	public function create_json(){
		$nama_cabang 		= $this->input->post('nama_cabang');
		$email_cabang 		= $this->input->post('email_cabang');
		$password_cabang 	= $this->input->post('password_cabang');
		$ID_KOTA			= $this->input->post('ID_KOTA');
		$alamat_cabang		= $this->input->post('alamat_cabang');
		$no_telp_cabang		= $this->input->post('no_telp_cabang');
		
		$data = array(
			'nama_cabang' => $nama_cabang,
			'email_cabang' => $email_cabang,
			'password_cabang' => $password_cabang,
			'ID_KOTA' => $ID_KOTA,
			'alamat_cabang' => $alamat_cabang,
			'no_telp_cabang' => $no_telp_cabang
		);
		$this->db->insert('cabang', $data);

		$json = array('data'=>$data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}

	public function update_json(){
		$id_cabang 			= $this->input->post('id_cabang');
		$nama_cabang 		= $this->input->post('nama_cabang');
		$email_cabang 		= $this->input->post('email_cabang');
		$password_cabang 	= $this->input->post('password_cabang');
		$ID_KOTA			= $this->input->post('ID_KOTA');
		$alamat_cabang		= $this->input->post('alamat_cabang');
		$no_telp_cabang		= $this->input->post('no_telp_cabang');
		
		$data = array(
			'nama_cabang' => $nama_cabang,
			'email_cabang' => $email_cabang,
			'password_cabang' => $password_cabang,
			'ID_KOTA' => $ID_KOTA,
			'alamat_cabang' => $alamat_cabang,
			'no_telp_cabang' => $no_telp_cabang
		);
		$this->db->where('id_cabang', $id_cabang);
		$this->db->update('cabang', $data);

		$json = array('data'=>$data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}

	public function delete_json(){
		$id_cabang = $this->input->post('id_cabang');
		$data = array('id_cabang' => $id_cabang);
		$this->db->delete('cabang', $data);
		$json = array('data'=>$data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}
}
?>