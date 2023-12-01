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

	public function saveLogBook($data, $dataTwo, $a, $b, $kondisi)
	{
		$b = date("Y-m-d", $b);
		if ($kondisi == 0) {
			$this->db->insert('tb_trx', $data);
			
		} else{
			$this->db->where('idTrx', $data['idTrx']);
			$this->db->update('tb_trx', $data);
			
		}
		$this->db->where('week_number', $a);
		$this->db->where('set_date', $b);
		$this->db->where('noBadge', $this->session->userdata('nomor_pengguna'));
		$this->db->update('weekly_data', $dataTwo);
		return;
	}

	public function resPemMateri($data)
	{
		$this->db->update('tb_trx', $data);
			
	}
}

?>
