<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('NewsModel');
		$this->load->model('UserModel');

		if(!$this->UserModel->is_LoggedIn()) {
			redirect('login');
		}
	}

	public function index()
	{
		$this->layout->load('dashboard', ['title' => 'HOME - SIMPATIKU'], true);
	}

	public function newsdelete($id)
	{
		if (!$id) {
			return false;
		}
		$this->NewsModel->destroy($id);
		$this->news();
	}

	public function news()
	{
		if ($this->input->post()) {
			$files = $_FILES['files'];

			$date = date("Y-m-d H:i:s");
			$data = $this->input->post();
			$data['created_at'] = $date;
			$data['updated_at'] = $date;
			$this->db->insert('news', $data);
			$id = $this->db->insert_id();

			$this->uploadImages($files, $id);
		}
		$this->db->order_by('updated_at', 'desc');
		$data = $this->NewsModel->get();
		$this->layout->load('news', ['title' => 'Master News', 'data' => $data], true);
	}

	private function uploadImages($images = false, $id = false)
	{
		if (!$images) {
			return false;
		}

		for ($i = 0; $i < count($images); $i++) {
			if (!empty($images['name'][$i])) {
				$_FILES['file']['name'] = $images['name'][$i];
				$_FILES['file']['type'] = $images['type'][$i];
				$_FILES['file']['tmp_name'] = $images['tmp_name'][$i];
				$_FILES['file']['error'] = $images['error'][$i];
				$_FILES['file']['size'] = $images['size'][$i];

				$name = time();
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = '1024'; // max_size in kb
				$config['file_name'] = $name;

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('file')) {
					$uploadData = $this->upload->data();
					$filename = $uploadData['file_name'];

					$data['image_url'] = base_url('uploads/'.$filename);
					$data['news_id'] = $id;
					$this->db->insert('new_images', $data);
				}
			}
		}

		return false;
	}

	public function edit($id)
	{
		$data = $this->NewsModel->get($id)[0];
		$this->layout->load('news_update', ['title' => 'Update news', 'data' => $data], true);
	}

	public function update($id){
		if ($this->input->post()) {
			$files = $_FILES['files'];

			$date = date("Y-m-d H:i:s");
			$data = $this->input->post();
			//$data['created_at'] = $date;
			$data['updated_at'] = $date;
			$this->db->update('news', $data);

			// if not empty files
			if ($files['name'][0] != ""){

				$this->db->where('news_id',$id);
				$this->db->delete('new_images');
			}
			$this->uploadImages($files, $id);
		}
		$this->db->order_by('updated_at', 'desc');
		$data = $this->NewsModel->get();
		$this->layout->load('news', ['title' => 'Master News - Admin Panel', 'data' => $data], true);
	}

	public function setting(){
		$data = $this->db->get('settings')->row_array();
		$this->layout->load('setting', ['title' => 'Master Setting - Admin Panel', 'data' => $data], true);
	}

	public function settingUpdate(){
		$images = $_FILES['banner'];
		$exists = $this->db->get('settings')->result();

		$data = $this->input->post();

		if ($images['name'] != "")
		{
			$_FILES['file']['name'] = $images['name'];
			$_FILES['file']['type'] = $images['type'];
			$_FILES['file']['tmp_name'] = $images['tmp_name'];
			$_FILES['file']['error'] = $images['error'];
			$_FILES['file']['size'] = $images['size'];


			$name = time();
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = '*';
			$config['max_size'] = '1024'; // max_size in kb
			$config['file_name'] = $name;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file')) {
				$uploadData = $this->upload->data();
				$filename = base_url('uploads/') . $uploadData['file_name'];

			}
			$data['banner_url'] = $filename;
		}

		if (count($exists) > 0)
		{
			$set = $exists[0];
			$id = $set->id;

			$this->db->where('id', $id);
			$this->db->update('settings', $data);
		}
		else
		{
			$this->db->insert('settings', $data);
		}
		redirect('admin/setting');
	}

}
