<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {


	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('View_models', 'view');
		$this->load->model('Logic', 'logic');
	}
	
	public function index($noBadge)
	{

		$weeklyData = $this->view->getWeekPembimbing($noBadge);

        // Kelompokkan data mingguan berdasarkan weekNotice
        $groupedData = array();
        foreach ($weeklyData as $datas) {
            $weekNumber = $datas['week_number'];
            $groupedData[$weekNumber][] = $datas;
        }

        // Kirim data ke view
        $datas['groupedData'] = $groupedData;

		// echo "<pre>";
		// var_dump($groupedData);
		// echo "</pre>";
		// die();
		$data = array(
			'title' => 'Daftar Log Book',
			'pages' => 'page/pembimbing/daftar_logbook',
			'pageTitle' => 'Daftar Log Book Harian',
			'data' => $groupedData,
			'badge' => $noBadge
		);

		$this->load->view('main', $data);
		

		
	}
	
	public function detail_data()
	{
		
		$load = $this->logic->daftarByPembimbing($this->session->userdata('nomor_pengguna'));

		$data = array(
			'title' => 'Daftar Log Book',
			'pages' => 'page/pembimbing/daftar_siswa',
			'pageTitle' => 'Daftar Siswa',
			'load'		=> $load
		
		);

		$this->load->view('main', $data);
		

		
	}


	

}

/* End of file Main_controller.php */
?>
