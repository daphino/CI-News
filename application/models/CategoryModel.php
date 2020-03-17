<?php


class CategoryModel extends CI_Model
{
	public function __construct(){
		$this->load->database();
	}

	public function setCategory($data = false)
	{
		if (!$data)
		{
			return false;
		}

		return $this->db->insert('categories', $data);
	}


}
