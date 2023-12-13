<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Insert_models', 'ins');
		$this->load->model('View_models', 'view');
		$this->load->model('Logic', 'logic');
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
			'pages' => 'page/siswa/daftar_logbook',
			'pageTitle' => 'Daftar Log Book Harian',
			'data' => $groupedData
		);

		$this->load->view('main', $data);
		
	}

	public function sendLogBook($a, $b)
	{

		$data = array(
			'title' => 'Kirim Log Book',
			'pages' => 'page/siswa/kirim_logbook',
			'pageTitle' => 'Kirim Log Book Harian',
			'action' => 'siswa/logbook/kirim_logbook/process/' . $a . '/' . $b
		);

		$this->load->view('main', $data);
		
	}

	public function proLogBook($a ,$b)
	{
		$cek = $this->logic->cek_trx_by_noBadge($a)->row_array();

		// var_dump($cek);
		// die();
		if ($cek == NULL) {
			$genTrx = 'trx-' . time() . date('Y');
			$kondisi = 0;
		} else {
			$kondisi = 1;
			$genTrx = $cek['idTrx'];
		}

        $data = array(
            'idTrx' => $genTrx,
			'noBadgeT' => $this->session->userdata('nomor_pengguna'),
			'number_week' => $a,
            'resSiswa' => '1',
            'resPemMateri' => '0',
            'resPemRedaksi' => '0',
            'resOut' => '0'
        );

        $dataTwo = array(
            'trxId' => $genTrx,
            'kegiatan' => $this->input->post('kegiatan'),
            'pengalaman' => $this->input->post('pengalaman'),
        );
		
		$this->ins->saveLogBook($data,$dataTwo, $a, $b, $kondisi);
		redirect('siswa/logbook/waktu/minggu','refresh');
		
	}

	public function proRegisterProgram()
	{
		$data = array(
			'namaB' => $this->session->userdata('nama'),
			'noBadgeB' => $this->session->userdata('nomor_pengguna'),
			'nimB' => $this->input->post('nim'),
			'pendidikanB' => $this->input->post('lembaga_pendidikan'),
			'jurusanB' => $this->input->post('jurusan'),
			'departemenB' => $this->input->post('departemen'),
			'pemMateriB' => $this->input->post('pembimbing_materi'),
			'pemRedaksiB' => $this->input->post('pembimbing_redaksi')
		);

		if ($data['pemMateriB'] == $data['pemRedaksiB']) {
			$this->session->set_flashdata('danger', 'Nama pembimbing tidak boleh sama');
			$this->registerProgram();
			
		} else {
	
			$this->session->set_userdata('siswa', 1);
			
			$this->ins->saveRegister($data);
			redirect('siswa/profil','refresh');
		}
		

	}

	public function profilBiodata()
	{

		$load = $this->view->getProfil()->result();	
		$data = array(
			'title' => 'Profil',
			'pages' => 'page/siswa/profil',
			'pageTitle' => 'Profil',
			'data' => $load
		);
		$this->load->view('main', $data);


	}

	public function registerProgram()
	{
		$load = $this->view->check_pembimbing()->result();

		$data = array(
			'title' => 'Registrasi Program',
			'pages' => 'page/siswa/register_program',
			'pageTitle' => 'Registrasi Program',
			'action' => 'siswa/process/registrasi_program',
			'pembimbing' => $load
		);

		$this->load->view('main', $data);
	}

	public function waktuLog()
	{
		$data = array(
			'title' => 'Isi Waktu Kegiatan',
			'pages' => 'page/siswa/waktu_log',
			'pageTitle' => 'Isi Waktu Kegiatan',
			'action'	=> 'siswa/logbook/waktu/process'
		);

		$this->load->view('main', $data);
	}

	public function setTimeLog() {

		$project_number = $this->session->userdata('nomor_pengguna');
		
        // Ambil data waktu mulai dan waktu berakhir dari formulir POST
        $start = $this->input->post('waktu_mulai');
        $end = $this->input->post('waktu_berakhir');

        $currentDate = $start;
        $endDate = date('Y-m-d', strtotime($end . ' + 1 day'));

        $weekNumber = 1;

        while (strtotime($currentDate) < strtotime($endDate)) {
            $dayOfWeek = date('N', strtotime($currentDate));

            // Cek apakah hari tersebut Senin sampai Jumat (1-5)
            if ($dayOfWeek >= 1 && $dayOfWeek <= 5) {
                // Simpan data mingguan ke dalam database
                $this->view->save_weekly_data($currentDate, $weekNumber, $project_number);
            }

            if ($dayOfWeek == 5) {
                $weekNumber++;
            }

            $currentDate = date('Y-m-d', strtotime($currentDate . ' + 1 day'));
        }
		$this->session->set_userdata('time', 1);		
		redirect('siswa/logbook/waktu/minggu');


        
    }

	public function mingguLog()
	{
		$weeklyData = $this->view->getWeek();

        // Kelompokkan data mingguan berdasarkan weekNotice
        $groupedData = array();
        foreach ($weeklyData as $datas) {
            $weekNumber = $datas['week_number'];
			// $created_at = $datas['created_at'];
            $groupedData[$weekNumber][] = $datas;
            // $groupedData[$created_at][] = $datas;
        }

        // Kirim data ke view
        $datas['groupedData'] = $groupedData;
		
		// echo "<pre>";
		// var_dump($groupedData);
		// echo "</pre>";
		
		// die();
		$data = array(
			'title' => 'Isi Kegiatan',
			'pages' => 'page/siswa/minggu_logbook',
			'pageTitle' => 'Isi Kegiatan',
			'data' => $groupedData
		);

		$this->load->view('main', $data);
	}

	public function harianLog($a)
	{
		$load = $this->view->getWeek_specific($a)->result();
		$data = array(
			'title' => 'Isi Kegiatan',
			'pages' => 'page/siswa/harian_logbook',
			'pageTitle' => 'Isi Kegiatan Hari Ini',
			'data'	=> $load
		);

		$this->load->view('main', $data);
	}

	



}

/* End of file Main_controller.php */
?>
