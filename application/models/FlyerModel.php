<?php


class FlyerModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function getFlyer($id = false)
	{
		if ($id == FALSE) {
			$q = $this->db->get('flyers');
			return $q->result_array();
		}

		$query = $this->db->get_where('flyers', array('id' => $id));
		return $query->row_array();
	}

	public function getFlyers($id = false)
	{
		if ($id == FALSE) {
			$this->db->select('*, f.id as fid');
			$this->db->from('flyers as f');
			$this->db->join('users as u', 'f.created_by = u.id');
			$this->db->order_by('updated_at', 'desc');
			$q = $this->db->get();
			return $q->result_array();
		}
		$this->db->select('*, f.id as fid');
		$this->db->from('flyers as f');
		$this->db->join('users as u', 'f.created_by = u.id');
		$this->db->where('f.id', $id);
		$q = $this->db->get();
		return $q->row_array();
	}


	public function storeFlyer($data)
	{
		if (!$data) {
			return false;
		}

		return $this->db->insert('flyers', $data);
	}

	public function update($data, $id)
	{

		$this->db->where('id', $id);
		return $this->db->update('flyers', $data);
	}


}
