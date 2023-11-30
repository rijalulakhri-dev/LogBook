<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Insert_models', 'ins');
		$this->load->model('View_models', 'view');
		$this->load->library('upload');
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


	public function sendLogBook()
	{
		$data = array(
			'title' => 'Kirim Log Book',
			'pages' => 'page/siswa/kirim_logbook',
			'pageTitle' => 'Kirim Log Book Harian',
			'action' => 'siswa/logbook/kirim_logbook/process'
		);

		$this->load->view('main', $data);
		
	}

	public function proLogBook()
	{
		$genTrx = 'trx-' . time() . date('Y');
        $gambar = $_FILES['lampiran']['name'];
        $sessions = $genTrx; // mengganti $sessions dengan $genTrx

        $path = './public/lampiran/' . $sessions . '/';

        $config = array(
            'allowed_types' => 'pdf|docx|doc|jpeg|jpg|png|odt',
            'max_size'      => 10000,
            'overwrite'     => TRUE,
            'upload_path'   => $path,
            'encrypt_name'  => FALSE,
        );

        $this->upload->initialize($config);

        $data = array(
            'idTrx' => $genTrx,
            // 'judulLogBook' => $this->input->post('judul_log_book'),
            'resSiswa' => '1',
            'resPemMateri' => '0',
            'resPemRedaksi' => '0',
            'resOut' => '0'
        );

        $dataTwo = array(
            'trxIdD' => $genTrx,
            'harianD' => $this->input->post('harian'),
            'keteranganD' => $this->input->post('keterangan'),
			'lampiranD'	=> $gambar = $_FILES['lampiran']['name']
        );

        if (!empty($gambar)) {
            if ($this->upload->do_upload('lampiran')) {
                $data_file = $this->upload->data();
                $getFileThree = pathinfo($data_file['file_name']);
                $path = 'FILE-' . time() . '.' . $getFileThree['extension'];
                $dataTwo['lampiran'] = $sessions . '/' . $path;
                rename($data_file['full_path'], $path . $path);
            }
        }
		
		// echo "<pre>";
		// var_dump($data,$dataTwo);
		// echo "</pre>";
		// die();
		$this->ins->saveLogBook($data,$dataTwo);
		redirect('siswa/logbook/daftar_logbook','refresh');
		
	}



	public function proRegisterProgram()
	{
		$data = array(
			'namaB' => $this->session->userdata('nama'),
			'noBadgeB' => $this->session->userdata('nomor_pengguna'),
			'nikB' => $this->input->post('nik'),
			'pendidikanB' => $this->input->post('lembaga_pendidikan'),
			'jurusanB' => $this->input->post('jurusan'),
			'departemenB' => $this->input->post('departemen'),
			'pemMateriB' => $this->input->post('pembimbing_materi'),
			'pemRedaksiB' => $this->input->post('pembimbing_redaksi')
		);

		$this->session->set_userdata('siswa', 1);

		$this->ins->saveRegister($data);
		redirect('siswa/profil','refresh');
		

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
		$data = array(
			'title' => 'Registrasi Program',
			'pages' => 'page/siswa/register_program',
			'pageTitle' => 'Registrasi Program',
			'action' => 'siswa/process/registrasi_program'
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

		
		redirect('siswa/logbook/waktu/minggu');
		
        // echo "Data mingguan telah disimpan ke dalam database.";
        // Panggil metode model untuk menyimpan data ke database
        // $this->view->save_weekly_data($start);

        
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
