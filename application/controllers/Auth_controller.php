<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_controller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_models', 'auth');
		$this->load->model('Logic', 'logic');
		
	}
	
	public function login()
	{
		$data = array(
			'title' => 'Login',
			'action' => 'auth/login'
		);

		$this->load->view('page/auth/login', $data);
		
	}

	public function process_login()
	{

        $nomor_pengguna = $this->input->post('nomor_pengguna', TRUE);
        $password = $this->input->post('password', TRUE);
        
        $validasi = $this->auth->login($nomor_pengguna, $password);
        if ($validasi != NULL) {
            $data = $validasi->row_array();
            switch ($data['level']) {
                case '1':
                    $this->session->set_userdata(array(
                        'masuk' => TRUE,
                        'nama' => $data['nama'],
                        'nomor_pengguna' => $data['nomor_pengguna'],
                        'password' => $data['password'],
                        'level' => '1',
                        'isPembimbing' => $data['isPembimbing'],
                    ));
                    redirect('Dashboard');
                    break;

                case '2':
                    $this->session->set_userdata(array(
                        'masuk' => TRUE,
                        'nama' => $data['nama'],
                        'nomor_pengguna' => $data['nomor_pengguna'],
                        'password' => $data['password'],
                        'level' => '2',
                        'isPembimbing' => $data['isPembimbing'],
                    ));
                    redirect('Dashboard');
                    break;

                case '3':
				$profil = $this->logic->cek_badge($data['nomor_pengguna'])->row() == NULL ? 0 : 1;
				$time = $this->logic->cek_time($data['nomor_pengguna'])->row() == NULL ? 0 : 1;
                    $this->session->set_userdata(array(
						'siswa' => $profil,
						'masuk' => TRUE,
                        'nama' => $data['nama'],
                        'nomor_pengguna' => $data['nomor_pengguna'],
                        'password' => $data['password'],
                        'level' => '3',
						'time' => $time
                    ));
                    redirect('Dashboard');
                    break;

                default:                

               
                    break;
            }

        }else {
            redirect('login');
        }
        
    }

	function logout() 
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}

/* End of file Auth_controller.php */
?>
