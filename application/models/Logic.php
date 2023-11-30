<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Logic extends CI_Model {

	public function cek_badge($nomor_pengguna)
	{
		$this->db->where('noBadgeB', $nomor_pengguna);
		return $this->db->get('tb_biodata', 1, 0);
	}

	public function cek_time($nomor_pengguna)
	{
		$this->db->where('noBadge', $nomor_pengguna);
		return $this->db->get('weekly_data', 1, 0);
		
	}
	

}

/* End of file Logic.php */
?>
