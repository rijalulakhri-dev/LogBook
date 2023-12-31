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

	public function cek_trx_by_noBadge($week)
	{
		$this->db->where('noBadgeT', $this->session->userdata('nomor_pengguna'));
		$this->db->where('number_week', $week);
		return $this->db->get('tb_trx', 1, 0);
		
		
	}
	
	function daftarByPembimbing($nomor_pengguna)
	{
		$this->db->where('pemMateriB' , $nomor_pengguna);
		$this->db->or_where('pemRedaksiB' , $nomor_pengguna);
		
		return $this->db->get('tb_biodata')->result();
	}

	function getDurasiMagang($noBadge) {
		$this->db->order_by('week_number', 'desc');
		$this->db->limit(1);
		$this->db->where('noBadge',$noBadge);
		return $this->db->get('weekly_data')->row();
	}
}

/* End of file Logic.php */
?>
