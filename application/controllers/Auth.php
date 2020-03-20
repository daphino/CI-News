<?php


class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index(){
		$this->load->view('admin/auth/login');
	}

	public function login()
	{
		if ($this->UserModel->is_LoggedIn()) {
			redirect('admin');
		}
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'email' => $username,
			'password' => $password
		);

		$cek = $this->UserModel->checkLog("users",$where);




		if($cek){
			$this->db->where('email', $where['email']);
			$data = $this->db->get('users')->row_array();
			$_SESSION['user_id'] = $data['id'];
			$_SESSION['name'] = $data['name'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['logged_in'] = true;


			redirect(base_url("admin"));


		}else{
			redirect('login');
		}

	}

	public function logout(){
		unset($_SESSION['user_id']);
		unset($_SESSION['logged_in']);
		redirect('admin');
	}

}
