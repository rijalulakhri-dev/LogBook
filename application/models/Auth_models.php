<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_models extends CI_Model {


    function login($nomor_pengguna,$password)
    {
		$this->db->select('password');
        $this->db->where('nomor_pengguna', $nomor_pengguna);
        $data = $this->db->get('tb_auth')->row_array();
        if (password_verify($password, $data['password'])) {
            $this->db->where('nomor_pengguna', $nomor_pengguna);
            $this->db->limit(1);
            return $this->db->get('tb_auth');
        }
    }

    

}

/* End of file Auth_models.php */
?>
