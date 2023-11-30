<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		// if ($this->session->userdata('masuk') == TRUE) {
		// 	$data = array(
		// 		'title' => 'Dashboard',
		// 		'pages' => 'page/dashboard',
		// 		'pageTitle' => 'Dashboard'
		// 	);
	
		// 	$this->load->view('main', $data);
		// } else{
			
		// 	redirect('login','refresh');
			
		// }

		$data = array(
			'title' => 'Dashboard',
			'pages' => 'page/dashboard',
			'pageTitle' => 'Dashboard'
		);

		$this->load->view('main', $data);

		
	}



}

/* End of file DashboardController.php */
?>
