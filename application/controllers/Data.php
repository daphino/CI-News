<?php

class Data extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->modal('DataModel');
    }

    public function index()
    {
        $data['title'] = 'Data Dasar';
        $data['data'] = $this->DataModel->get();
        $this->layout->load('data', [$data], true);
    }
}