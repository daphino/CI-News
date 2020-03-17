<?php


class AdminCategory extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('CategoryModel');
		$this->load->model('UserModel');

		if(!$this->UserModel->is_LoggedIn()) {
			redirect('login');
		}
	}

	public function index()
	{
		$data = $this->db->get('categories')->result();
		$datas = array();
		foreach ($data as $d) {
			$datas[] = [
				'id' => $d->id,
				'name' => $d->name,
				'image_url' => $d->image_url,
				'child' => $this->countChild($d->id)
			];
		}
		$this->layout->load('category', ['title' => 'HOME - SIMPATIKU', 'data' => $datas], true);
	}

	private function countChild($id)
	{
		$q = array();
		$this->db->where('parent_id', $id);
		$q = $this->db->get('sub_categories')->result();
		return count($q);

	}

	public function store()
	{

		if ($this->input->post('parent') == 'none') {
			$file = $_FILES['file'];
			$data = array(
				'name' => $this->input->post('name'),
				'image_url' => $this->uploadImages($file)
			);
			$this->db->insert('categories', $data);
			redirect('admin/category');
		} else {
			$data = array(
				'parent_id' => $this->input->post('parent'),
				'name' => $this->input->post('name')
			);
			$this->db->insert('sub_categories', $data);
			redirect("admin/category/" . $this->input->post('parent') . "/sub");
		}
	}

	private function uploadImages($images = false)
	{
		if (!$images) {
			return false;
		}

		if (!empty($images['name'])) {
			$_FILES['file']['name'] = $images['name'];
			$_FILES['file']['type'] = $images['type'];
			$_FILES['file']['tmp_name'] = $images['tmp_name'];
			$_FILES['file']['error'] = $images['error'];
			$_FILES['file']['size'] = $images['size'];

			$name = time();
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size'] = '1024'; // max_size in kb
			$config['file_name'] = $name;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file')) {
				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];

				return $filename;
			}
		}

		return false;
	}

	public function destroy($id)
	{

		$this->db->delete('categories', array('id' => $id));
		redirect('admin/category');
	}

	public function viewSub($id)
	{
		$this->db->where('parent_id', $id);
		$data = $this->db->get('sub_categories')->result();
		$this->layout->load('sub_category', ['title' => 'HOME - SIMPATIKU', 'data' => $data], true);
	}

	public function edit($id)
	{
		$data = $this->db->get('categories')->result();

		 $this->db->where('id', $id);
		$category_item = $this->db->get('categories')->row_array();
		$data['category_item'] = $category_item;
		$this->layout->load('category_update', ['title' => 'HOME - SIMPATIKU | Edit Parent Category', 'data' => $data ], true);
	}

	public function update($id){
		$file = $_FILES['file'];
		if ($file['name'] != ""){
			$fname = $this->uploadImages($file);
			$data = array(
				'name' => $this->input->post('name'),
				'image_url' => $fname
			);
		} else {
			$data = array(
				'name' => $this->input->post('name'),
			);
		}

		$this->db->where('id', $id);
		$this->db->update('categories', $data);
		redirect('admin/category');
	}

	public function editSub($id){
		$data['categories'] = $this->db->get('categories')->result();

		$this->db->where('id', $id);
		$category_item = $this->db->get('sub_categories')->row_array();
		$data['category_item'] = $category_item;
		$this->layout->load('category_sub_update', ['title' => 'HOME - SIMPATIKU | Edit Parent Category Sub', 'data' => $data ], true);
	}

	public function updateSub($id){
		$data = array(
			'parent_id' => $this->input->post('parent'),
			'name' => $this->input->post('name')
		);
		$this->db->where('id', $id);
		$this->db->update('sub_categories', $data);
		redirect("admin/category/" . $this->input->post('parent') . "/sub");
	}
	public function destroySub($id){
		$this->db->delete('sub_categories', array('id' => $id));
		redirect('admin/category');
	}


}
