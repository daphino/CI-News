<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('NewsModel');
  }
  
  public function index() 
  {
    $data = $this->NewsModel->get();
    $this->layout->load('home', ['title'=>'HOME - SIMPATIKU', 'data' => $data]);
  }

  public function detail($id) 
  {
    $data = $this->NewsModel->get($id)[0];
    $this->layout->load('detail_page', ['title' => $data['title'] . ' - SIMPATIKU', 'data' => $data]);
  }

}