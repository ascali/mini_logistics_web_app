<?php 
/**
* 
*/
class Provinsi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function read_json(){
		$id = $this->input->get('id');
		if (empty($id)) {
			$query = $this->db->query("SELECT * FROM provinsi ORDER BY nama_provinsi ASC");
			$data = $query->result_array();
		} else {
			$query = $this->db->query("SELECT * FROM provinsi WHERE id_provinsi = $id ");
			$data = $query->result_array();
			$data = $data[0];
		}
		$status = 1;
		$json = array('status' => $status, 'data' => $data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}

	public function create_json(){
		$this->_validate();

		$nama_provinsi = $this->input->post('nama_provinsi'); 		
		$data = array('nama_provinsi' => $nama_provinsi);
		$this->db->insert('provinsi', $data);

		$status = 1;
		$json = array('status' => $status, 'data' => $data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}

	public function update_json(){
		$this->_validate();

		$id = $this->input->post('id_provinsi');
		$nama_provinsi = $this->input->post('nama_provinsi');
		$data = array('nama_provinsi' => $nama_provinsi);
		$this->db->where('id_provinsi', $id);
		$this->db->update('provinsi', $data);

		$status = 1;
		$json = array('status' => $status, 'data' => $data);
		header('Content-type: application/json');
		echo json_encode($json, JSON_PRETTY_PRINT);
	}

	public function delete_json(){
		$id = $this->input->post('id');
		$this->db->where('id_provinsi', $id);
		$data = $this->db->delete('provinsi');
		
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
		
		if($this->input->post('nama_provinsi') == '')
		{
			$data['inputerror'][] = 'nama_provinsi';
			$data['error_string'][] = 'nama provinsi harus di isi';
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