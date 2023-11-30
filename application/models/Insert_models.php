<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_models extends CI_Model {

	public function saveRegister($data)
	{
		$this->db->insert('tb_biodata', $data);
		
	}

	public function save_user($data)
	{
		
		$this->db->insert('tb_auth', $data);
		
	}

	public function saveLogBook($data, $dataTwo)
	{
		$this->db->insert('tb_trx', $data);
		$this->db->insert('trx_detail', $dataTwo);
		
	}

	public function resPemMateri($data)
	{
		$this->db->update('tb_trx', $data);
			
	}
}

?>
