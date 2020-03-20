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
		if ($id){
			$this->db->where('id', $id);
			return $this->db->get('peta_kabs')->row_array();
		}
		return $this->db->get('peta_kabs')->result_array();
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
