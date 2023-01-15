<?php

defined('BASEPATH') or exit('No direct script access allowed');

class about extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('pesan', "You need to be logged in to access the page.");
			redirect('auth/login');
		}
	}
	public function index()
	{
		$data['about'] = $this->M_tema->get_data('about')->result();
		$this->load->view('t_admin/a_header');
		$this->load->view('t_admin/a_sidebar');
		$this->load->view('admin/about', $data);
		$this->load->view('t_admin/a_footer');
	}

	public function tambah_about()
	{
		$config['upload_path']          = './assets/upload/about/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 6144;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file')) {
			echo 'gagal upload';
		} else {
			$file = $this->upload->data();
			$file = $file['file_name'];
			$title = $this->input->post('title', TRUE);
			$isi = $this->input->post('isi', TRUE);

			$data = array(
				'title' => $title,
				'isi' => $isi,
				'file' => $file
			);
			$this->db->insert('about', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>about berhasil di tambahkan</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/about');
		}
	}
	public function edit($id)
	{
		$id = $this->input->post('id');
		$config['upload_path']          = './assets/upload/about/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 6144;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file')) {
			$title = $this->input->post('title', TRUE);
			$isi = $this->input->post('isi', TRUE);

			$data = array(
				'title' => $title,
				'isi' => $isi,
			);

			$this->db->where('id', $id);
			$this->db->update('about', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>about berhasil di update</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/about');
		} else {

			$file = $this->upload->data();
			$file = $file['file_name'];
			$title = $this->input->post('title', TRUE);
			$isi = $this->input->post('isi', TRUE);


			$data = array(
				'title' => $title,
				'isi' => $isi,
				'file' => $file
			);

			$this->db->where('id', $id);
			$this->db->update('about', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>about berhasil di update</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/about');
		}
	}
}

/* End of file AboutUs.php */
