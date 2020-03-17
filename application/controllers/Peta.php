<?php


class Peta extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PetaKabsModel');
	}

	public function index(){
		$data = $this->PetaKabsModel->gets();
		$this->layout->load('peta', ['title' =>  'Info Peta - SIMPATIKU', 'data' => $data]);
	}

	public function detail($id){
		$data = $this->PetaKabsModel->gets($id);
		$this->layout->load('peta_detail', ['title' => $data['title'] . ' - SIMPATIKU', 'data' => $data]);
	}

}
