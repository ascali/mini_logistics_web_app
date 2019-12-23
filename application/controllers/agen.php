<?php
/**
* @author Ascaliko
*/
class Agen extends CI_Controller
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
			$data['konten'] = 'agen/beranda';
			$this->load->view('agen/pg_agen', $data);
		}
	}

	public function login()
	{
		$data['judul'] = 'Login Halaman Agen';
		$data['module'] = 'login';
		$this->load->view('agen/login', $data);
	}

	public function ceklogin()
	{
		$this->load->library('encrypt');
		$username = $this->input->post('txtEmail');
		$password = $this->input->post('txtPassword');
		$row = $this->mcustomer->validasi_agen($username, $password);
		if (count($row) > 0) {
			$item = array(
				'id_agen' => $row['id_agen'],
				'email_agen' => $row['email_agen'],
				'password_agen' => $row['password_agen'],
				'nama_agen' => $row['nama_agen'],
				'status' => 'masuk'
			);
			$this->session->set_userdata($item);
			redirect('agen', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Maaf, silahkan coba lagi!');
			redirect('agen/login', 'refresh');
		}
	}

	public function logout()
	{	
		$this->session->sess_destroy();
		$this->session->set_flashdata('result', 'Anda sudah keluar');
		header('location:'.base_url().'index.php/agen');
		redirect('agen', 'refresh');
	}

	public function read_json(){
		if (!$this->input->get('id')) {
			$data = $this->madmin->getAllAgen($this->input->get('id_cabang'));
		} else {
			$data = $this->madmin->getAgenById($this->input->get('id'));
			$data = $data[0];
		}
		$json = array('data'=>$data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}

	public function create_json(){
		$id_cabang 		= $this->input->post('id_cabang');
		$nama_agen 		= $this->input->post('nama_agen');
		$email_agen 		= $this->input->post('email_agen');
		$password_agen 	= $this->input->post('password_agen');
		$ID_KOTA			= $this->input->post('ID_KOTA_AGEN');
		$alamat_agen		= $this->input->post('alamat_agen');
		$no_telp_agen		= $this->input->post('no_telp_agen');
		
		$data = array(
			'id_cabang' => $id_cabang,
			'nama_agen' => $nama_agen,
			'email_agen' => $email_agen,
			'password_agen' => $password_agen,
			'ID_KOTA' => $ID_KOTA,
			'alamat_agen' => $alamat_agen,
			'no_telp_agen' => $no_telp_agen
		);
		$this->db->insert('agen', $data);

		$json = array('data'=>$data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}

	public function update_json(){
		$id_agen 			= $this->input->post('id_agen');
		$nama_agen 		= $this->input->post('nama_agen');
		$email_agen 		= $this->input->post('email_agen');
		$password_agen 	= $this->input->post('password_agen');
		$ID_KOTA			= $this->input->post('ID_KOTA_AGEN');
		$alamat_agen		= $this->input->post('alamat_agen');
		$no_telp_agen		= $this->input->post('no_telp_agen');
		
		$data = array(
			'nama_agen' => $nama_agen,
			'email_agen' => $email_agen,
			'password_agen' => $password_agen,
			'ID_KOTA' => $ID_KOTA,
			'alamat_agen' => $alamat_agen,
			'no_telp_agen' => $no_telp_agen
		);
		$this->db->where('id_agen', $id_agen);
		$this->db->update('agen', $data);

		$json = array('data'=>$data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}

	public function delete_json(){
		$id_agen = $this->input->post('id_agen');
		$data = array('id_agen' => $id_agen);
		$this->db->delete('agen', $data);
		$json = array('data'=>$data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}
}
?>