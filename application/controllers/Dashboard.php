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

	public function clear_db()
	{
		$tables = array('tb_biodata', 'tb_trx', 'weekly_data');

        foreach ($tables as $table) {
            $this->db->empty_table($table);
            echo "Table $table emptied.<br>";
        }

        // Delete users with level not equal to 1
        // $this->db->where('level !=', 1);
        // $this->db->delete('tb_user');

        redirect('Dashboard');
	}



}

/* End of file DashboardController.php */
?>
