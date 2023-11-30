<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Daftar Log Book',
			'pages' => 'page/pembimbing/daftar_logbook',
			'pageTitle' => 'Daftar Log Book Harian'
		);

		$this->load->view('main', $data);
		
	}

}

/* End of file Main_controller.php */
?>
