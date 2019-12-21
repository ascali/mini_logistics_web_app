<?php
/**
* 
*/
class Kota extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function read_json(){
		if (!$this->input->get('id')) {
			$data = $this->mkota->getAllKota();
		} else {
			$data = $this->mkota->getAllKotaId($this->input->get('id'));
			$data = $data[0];
		}
		$json = array('data'=>$data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}

	public function create_json(){
		$id_provinsi = $this->input->post('id_provinsi');
		$nama_kota = $this->input->post('nama_kota');
		//$id_provinsi = $this->mkota->getIdProvinsi($nama_provinsi);
		$data = $this->mkota->addKota($id_provinsi, $nama_kota);
		$json = array('data'=>$data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}


	public function update_json(){
		$this->_validate();

		$id = $this->input->post('id_kota');
		$id_provinsi = $this->input->post('id_provinsi');
		$nama_kota = $this->input->post('nama_kota');
		$data = array('id_provinsi' => $id_provinsi,'nama_kota' => $nama_kota);
		$this->db->where('id_kota', $id);
		$this->db->update('kota', $data);

		$status = 1;
		$json = array('status' => $status, 'data' => $data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}

	public function delete_json(){
		$id = $this->input->post('id');
		$this->db->where('id_kota', $id);
		$data = $this->db->delete('kota');
		
		$status = 1;
		$json = array('status' => $status, 'data' => $data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}

    private function _validate(){
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		
		if($this->input->post('id_provinsi') == '')
		{
			$data['inputerror'][] = 'id_provinsi';
			$data['error_string'][] = 'provinsi harus di isi';
			$data['status'] = FALSE;
		}
		
		if($this->input->post('nama_kota') == '')
		{
			$data['inputerror'][] = 'nama_kota';
			$data['error_string'][] = 'nama kota harus di isi';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			header('Content-type: application/json');
			echo json_encode($data);
			exit();
		}
	}
}
?>