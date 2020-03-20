<?php


class AdminPeta extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PetaKabsModel');
		$this->load->model('UserModel');

		if (!$this->UserModel->is_LoggedIn()) {
			redirect('login');
		}
	}

	public function index()
	{
		$this->db->order_by('updated_at', 'desc');
		$data['peta'] = $this->PetaKabsModel->get();
		$this->layout->load('peta', ['title' => 'Peta-Kabs_Master - SIMPATIKU', 'data' => $data], true);
	}

	public function store()
	{
		$banner = $_FILES['banner_url'];
		$file = $_FILES['file_url'];
		$bannerName = base_url('uploads/') . $this->uploadFile($banner);
		$fileurl = base_url('uploads/') . $this->uploadFile($file);
		$date = $date = date("Y-m-d H:i:s");
		$data = [
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'banner_url' => $fileurl,
			'file_url' => $bannerName,
			'created_by' => $this->input->post('created_by'),
			'created_at' => $date,
			'updated_at' => $date
		];

		$this->PetaKabsModel->store($data);
		redirect('admin/peta');
	}

	private function uploadFile($images)
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
			$config['allowed_types'] = '*';
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

	public function edit($id)
	{
		$data['peta_item'] = $this->PetaKabsModel->get($id);
		$this->layout->load('peta_edit', ['title' => 'Peta-kabs - SIMPATIKU | Edit', 'data' => $data], true);
	}

	public function update($id)
	{
		$banner = $_FILES['banner_url'];
		$peta = $_FILES['file_url'];
		$date = $date = date("Y-m-d H:i:s");

		if ($banner['name'] != "" and $peta['name'] != "") {
			$petaName = $this->uploadFile($peta);
			$bannerName = $this->uploadFile($banner);
			$data = [
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'created_by' => $this->input->post('created_by'),
				'banner_url' => $bannerName,
				'file_url' => $petaName,
				'updated_at' => $date
			];
		} elseif ($banner['name'] != "") {
			$bannerName = $this->uploadFile($banner);
			$data = [
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'created_by' => $this->input->post('created_by'),
				'banner_url' => $bannerName,
				'updated_at' => $date
			];
		} elseif ($peta['name'] != "") {
			$petaName = $this->uploadFile($peta);
			$data = [
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'created_by' => $this->input->post('created_by'),
				'file_url' => $petaName,
				'updated_at' => $date
			];
		} else {
			$data = [
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'created_by' => $this->input->post('created_by'),
				'updated_at' => $date
			];
		}


		$this->db->where('id', $id);
		$this->db->update('peta_kabs', $data);
		redirect('admin/peta');
	}

	public function destroy($id)
	{
		if (!$id) {
			return false;
		}

		if ($this->delImages($id))
		{
			$this->db->where('id', $id);
			$this->db->delete('peta_kabs');
		}
		redirect('admin/peta');
	}

	private function delImages($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('peta_kabs')->row();
		if ($data)
		{
			$filename = str_replace(base_url(), '', $data->banner_url);
			$filename2 = str_replace(base_url(), '', $data->file_url);
			if (file_exists($filename) && file_exists($filename2))
			{
				unlink($filename);
				unlink($filename2);
			}
			else{
				return false;
			}
		}
		return true;
	}
}
