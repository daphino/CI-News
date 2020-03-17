<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Flyer extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('FlyerModel');
	}

	public function index()
	{
		$data = $this->FlyerModel->getFlyers();
		$this->layout->load('flyer', ['title' =>  'Info Flyer - SIMPATIKU', 'data' => $data]);
	}

	public function detail($id)
	{
		$data = $this->FlyerModel->getFlyers($id);
		$this->layout->load('flyer_detail', ['title' => $data['title'] . ' - SIMPATIKU', 'data' => $data]);
	}



}
