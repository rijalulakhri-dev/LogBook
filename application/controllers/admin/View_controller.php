<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class View_controller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Insert_models', 'ins');
		$this->load->model('View_models', 'view');
		
	}
	

	public function index()
	{
		$load = $this->view->get_user()->result();
		$data = array(
			'title' => 'Data User',
			'pageTitle' => 'Data User',
			'dataTables' => TRUE,
			'pages' => 'page/admin/Data_user',
			'data' => $load
		);
		$this->load->view('main', $data);
		
	}

	public function addUser()
	{
		$data = array(
			'title' => 'Tambah User',
			'pageTitle' => 'Tambah User',
			'pages' => 'page/admin/tambah_user',
			'action' => 'admin/tambah_user/process'
		);

		$this->load->view('main', $data);
		
	}

	public function pro_add_user()
	{
		$this->rules();
		

		if ($this->form_validation->run() == FALSE) {
			$this->addUser();
		} elseif($this->input->post('level') == 0) {
			$this->addUser();
		} else {



			$password = $this->input->post('password', TRUE);
			$data = array(
				'nomor_pengguna'   => $this->input->post('nomor_pengguna',TRUE),	
                'nama'       	   => strtolower($this->input->post('nama', TRUE)),	
                'password'         => password_hash($this->input->post('password',TRUE),PASSWORD_DEFAULT),	
                'level'            => $this->input->post('level'),	
				'jenisKelamin'     => $this->input->post('jenis_kelamin'),	
				'is_activate'      => 1,
				'terdaftar'        => date('Y-m-d H:i:s'),	
			);
			
			if ($data['level'] != '3') {
				if (strlen($data['nomor_pengguna']) < 7) {
					$this->addUser();
					redirect('admin/tambah_user','refresh');
					$this->session->set_flashdata('danger', 'nip terlalu pendek');
				
				}
				else {
					if ($this->input->post('level') == 2 && $this->input->post('subLevel') == 'pembimbing redaksi') {
						$data['isPembimbing'] = $this->input->post('subLevel');
						$data['level'] = 2;
					}elseif ($this->input->post('level') == 2 && $this->input->post('subLevel') == 'pembimbing materi') {
						$data['isPembimbing'] = $this->input->post('subLevel');
						$data['level'] = 2;
					}
					else {
						$data['level'] = $this->input->post('level');
					}
					

					
					$this->ins->save_user($data);
					$this->session->set_flashdata('success', 'Data pengguna berhasil ditambahkan!');
					redirect('admin/daftar_user','refresh');
					
				}

			} else {
				if (strlen($data['nomor_pengguna']) >= 3 && strlen($data['nomor_pengguna']) <= 7) {
					$this->ins->save_user($data);
					$this->session->set_flashdata('success', 'Data pengguna berhasil ditambahkan!');
					redirect('admin/daftar_user','refresh');

				} else{
					$this->addUser();
					$this->session->set_flashdata('danger', 'no badge terlalu panjang');

				}
			}
			
	
		}
	}

	function rules() 
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[5]|max_length[12]',array('required' => '%s wajib di isi !','min_length' => '%s terlalu pendek !','max_length' => '%s terlalu panjang !',));
        $this->form_validation->set_rules('nomor_pengguna', 'Nomor Pengguna', 'trim|required',array('required' => '%s wajib di isi !','min_length' => '%s terlalu pendek !','max_length' => '%s terlalu panjang !',));
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]',array('required' => '%s wajib di isi !','min_length' => '%s terlalu pendek !','max_length' => '%s terlalu panjang !',));

    }

}

?>
