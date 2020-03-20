<?php

class DataModel extends CI_Model
{
    public function get($id = false)
    {
        if ($id)
        {
            $this->db->where('id', $id);
        }

        $result = [];
        $data = $this->db->get('data_dasar')->result();

        foreach($data as $key => $value)
        {
            $result[$key]['data'] = $value;
            if (isset($value['category_id']))
            {
                $this->db->where('id', $value['category_id']);
                $result[$key]['category'] = $this->db->get('categories')->result();
            }else{
                $result[$key]['category'] = [];
            }
            
        }

        return $result;
        
    }
}