<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Ascaliko
*/
class Template extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}

	public function logistico()
	{
		$data['judul'] = 'Home';
		$data['konten'] = 'template/logistico';
		$data['aktif'] = 'active';
		$this->load->view('template/logistico', $data);
	}

}
?>