<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {


	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('View_models', 'view');
	}
	
	public function index()
	{

		$weeklyData = $this->view->getWeek();

        // Kelompokkan data mingguan berdasarkan weekNotice
        $groupedData = array();
        foreach ($weeklyData as $datas) {
            $weekNumber = $datas['week_number'];
            $groupedData[$weekNumber][] = $datas;
        }

        // Kirim data ke view
        $datas['groupedData'] = $groupedData;

		$data = array(
			'title' => 'Daftar Log Book',
			'pages' => 'page/pembimbing/daftar_logbook',
			'pageTitle' => 'Daftar Log Book Harian',
			'data' => $groupedData
		);

		$this->load->view('main', $data);
		

		
	}

	public function updateResPemMateri($weekNumber)
	{
		// Ambil data mingguan berdasarkan nomor pengguna dan nomor minggu
		$weekData = $this->view->getWeeklyData($weekNumber);
	
 
		// Proses pembaruan nilai resPemMateri di tb_trx
		if ($weekData) {
			$noBadge = $this->session->userdata('nomor_pengguna');
	
			$trxData = array(
				'resPemMateri' => '1' // Ubah sesuai kebutuhan
			);
	
			$this->view->updateResPemMateri($noBadge, $weekNumber);
		}

		

	
		// Redirect atau tampilkan pesan sesuai kebutuhan
		redirect('pembimbing/daftar_logbook');
	}
	

}

/* End of file Main_controller.php */
?>
