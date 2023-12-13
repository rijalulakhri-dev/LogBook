<?php 

require_once FCPATH . 'vendor/autoload.php';

class Cetak extends CI_Controller {

	public function index($a)
	{
		$this->load->model('View_models', 'view');
				
		$data['data'] = $this->view->getWeek_specific($a)->result();
		
		$mpdf = new \Mpdf\Mpdf();

		$html = '<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Document</title>
		</head>
		<style>
			table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			}

			h3 {
				text-align: center;
			}
		</style>
		<body>
		<h3>LAPORAN AKTIVITAS MINGGUAN SISWA/MAHASISWA
		PROGRAM MBKM DI PT.PUPUK ISKANDAR MUDA</h3>
		<ul>
			<li><strong>Nama:</strong> Dina Nurizka</li>
			<li><strong>NPM:</strong> 2108001010020</li>
			<li><strong>Program Studi:</strong> Manajemen Informatika</li>
			<li><strong>Fakultas:</strong> MIPA</li>
			<li><strong>Nama Program:</strong> Magang Bersertifikat</li>
			<li><strong>Lokasi Kegiatan:</strong> Keude Krueng Geukuh</li>
			<li><strong>Nama Pembimbing:</strong> Mahyus Ihsan S.Si, M.Si</li>
		</ul>
		<table style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Kegiatan</th>
				<th>Pengalaman Hari Ini</th>
			</tr>
		</thead>
		<tbody>';

		$no = 1;
		foreach ($data['data'] as $d) {
			$html .= '<tr>
				<td>' . $no++ . '</td>
				<td>' . $d->set_date . '</td>
				<td>' . $d->kegiatan . '</td>
				<td>' . $d->pengalaman . '</td>
			</tr>';
		}

		$html .= '</tbody>
		</table>
		</body>
		</html>';

		 // Tulis konten HTML ke PDF
		 $mpdf->WriteHTML($html);
		 // Output PDF ke browser atau simpan ke file
		 $mpdf->Output('hello_world.pdf', 'I'); // 'I' untuk menampilkan PDF di browser
		 
	}
	public function index2($a, $b)
	{
		$this->load->model('View_models', 'view');
				
		$data['data'] = $this->view->getWeek_specific_p($a, $b)->result();
		
		$mpdf = new \Mpdf\Mpdf();

		$html = '<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Document</title>
		</head>
		<style>
			table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			}

			h3 {
				text-align: center;
			}
		</style>
		<body>
		<h3>LAPORAN AKTIVITAS MINGGUAN SISWA/MAHASISWA
		PROGRAM MBKM DI PT.PUPUK ISKANDAR MUDA</h3>
		<ul>
			<li><strong>Nama:</strong> Dina Nurizka</li>
			<li><strong>NPM:</strong> 2108001010020</li>
			<li><strong>Program Studi:</strong> Manajemen Informatika</li>
			<li><strong>Fakultas:</strong> MIPA</li>
			<li><strong>Nama Program:</strong> Magang Bersertifikat</li>
			<li><strong>Lokasi Kegiatan:</strong> Keude Krueng Geukuh</li>
			<li><strong>Nama Pembimbing:</strong> Mahyus Ihsan S.Si, M.Si</li>
		</ul>
		<table style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Kegiatan</th>
				<th>Pengalaman Hari Ini</th>
			</tr>
		</thead>
		<tbody>';

		$no = 1;
		foreach ($data['data'] as $d) {
			$html .= '<tr>
				<td>' . $no++ . '</td>
				<td>' . $d->set_date . '</td>
				<td>' . $d->kegiatan . '</td>
				<td>' . $d->pengalaman . '</td>
			</tr>';
		}

		$html .= '</tbody>
		</table>
		</body>
		</html>';

		 // Tulis konten HTML ke PDF
		 $mpdf->WriteHTML($html);
		 // Output PDF ke browser atau simpan ke file
		 $mpdf->Output('hello_world.pdf', 'I'); // 'I' untuk menampilkan PDF di browser
		 
	}

}

/* End of file Cetak.php */
?>
