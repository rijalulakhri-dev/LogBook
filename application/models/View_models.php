<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class View_models extends CI_Model {

	public function getProfil()
	{

		// $this->db->select('*');
        // $this->db->from('tb_biodata');
        // $this->db->join('tb_auth', 'tb_biodata.noBadgeB = tb_auth.nomor_pengguna OR tb_biodata.nikB = tb_auth.nomor_pengguna', 'left');
        // return $this->db->get();
		return $this->db->get('tb_biodata');
		
	}

	public function getWeek()
	{
		$this->db->where('noBadge', $this->session->userdata('nomor_pengguna'));
		$this->db->order_by('set_date', 'asc');
        $query = $this->db->get('weekly_data');
        return $query->result_array();
		
	}

	public function save_weekly_data($setDay, $weekNotice, $project_number) {
        $data = array(
            'set_date' => $setDay,
            'week_number' => $weekNotice,
			'noBadge' => $project_number
        );

        return $this->db->insert('weekly_data', $data);

    }

	public function getWeek_specific($a)
	{
		$this->db->where('week_number', $a);
		$this->db->where('noBadge', $this->session->userdata('nomor_pengguna'));
		$this->db->order_by('created_at', 'asc');
		return $this->db->get('weekly_data');
		
	}

	public function last_number_project()
	{
		$this->db->select('noBadge');
		$this->db->order_by('id', 'desc');
		$this->db->limit(1);
		return $this->db->get('weekly_data')->row();		
		
	}

	public function get_user()
	{
		return $this->db->get('tb_auth');
	}

	public function get_logBook()
	{
		return $this->db->get('trx_detail');
		
	}

}

?>