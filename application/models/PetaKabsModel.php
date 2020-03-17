<?php


class PetaKabsModel extends CI_Model
{
	public function __construct(){
		$this->load->database();
	}
	public function get($id = false){
		if ($id == FALSE){
			$q = $this->db->get('peta_kabs');
			return $q->result_array();
		}

		$query = $this->db->get_where('peta_kabs', array('id' => $id));
		return $query->row_array();
	}

	public function gets($id = false){
		if ($id == FALSE){
			$this->db->select('*, p.id as fid');
			$this->db->from('peta_kabs as p');
			$this->db->join('users as u','p.created_by = u.id');
			$this->db->order_by('updated_at','desc');
			$q = $this->db->get();
			return $q->result_array();
		}
		$this->db->select('*, p.id as fid');
		$this->db->from('peta_kabs as p');
		$this->db->join('users as u','p.created_by = u.id');
		$this->db->where('p.id', $id);
		$q = $this->db->get();
		return $q->row_array();
	}


	public function store($data){
		if (!$data)
		{
			return false;
		}

		return $this->db->insert('peta_kabs', $data);
	}

	public function update($data, $id){

		$this->db->where('id', $id);
		return $this->db->update('peta_kabs', $data);
	}
}
