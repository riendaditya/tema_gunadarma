<?php

defined('BASEPATH') or exit('No direct script access allowed');

class event extends CI_Controller
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
		$data['event'] = $this->M_tema->get_data('event')->result();
		$this->load->view('t_admin/a_header');
		$this->load->view('t_admin/a_sidebar');
		$this->load->view('admin/event', $data);
		$this->load->view('t_admin/a_footer');
	}

	public function tambah()
	{
		$config['upload_path']          = './assets/upload/event/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 6144;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('poster')) {
			$data['error'] = $this->upload->display_errors();
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>$error</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/event');
		} else {
			$poster = $this->upload->data();
			$poster = $poster['file_name'];
			$judul = $this->input->post('judul', TRUE);
			$tanggal = $this->input->post('tanggal', TRUE);
			$deskripsi = $this->input->post('deskripsi', TRUE);
			$link = $this->input->post('link', TRUE);
			$status = $this->input->post('status', TRUE);

			$data = array(
				'judul' => $judul,
				'tanggal' => $tanggal,
				'deskripsi' => $deskripsi,
				'link' => $link,
				'poster' => $poster,
				'status' => $status
			);

			$this->db->insert('event', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>event berhasil di upload</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/event');
		}
	}

	public function edit_event($id)
	{
		$id = $this->input->post('id');
		$config['upload_path']          = './assets/upload/event/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 6144;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('poster')) {
			$judul = $this->input->post('judul', TRUE);
			$tanggal = $this->input->post('tanggal', TRUE);
			$deskripsi = $this->input->post('deskripsi', TRUE);
			$link = $this->input->post('link', TRUE);
			$status = $this->input->post('status', TRUE);

			$data = array(
				'judul' => $judul,
				'tanggal' => $tanggal,
				'deskripsi' => $deskripsi,
				'link' => $link,
				'status' => $status
			);
			$this->db->where('id', $id);
			$this->db->update('event', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>event berhasil di upload</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/event');
		} else {
			$poster = $this->upload->data();
			$poster = $poster['file_name'];
			$judul = $this->input->post('judul', TRUE);
			$tanggal = $this->input->post('tanggal', TRUE);
			$deskripsi = $this->input->post('deskripsi', TRUE);
			$link = $this->input->post('link', TRUE);
			$status = $this->input->post('status', TRUE);

			$data = array(
				'judul' => $judul,
				'tanggal' => $tanggal,
				'deskripsi' => $deskripsi,
				'link' => $link,
				'poster' => $poster,
				'status' => $status
			);
			$this->db->where('id', $id);
			$this->db->update('event', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>event berhasil di upload</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/event');
		}
	}

	public function delete($id)
	{
		$_id = $this->db->get_where('event', ['id_event' => $id])->row();
		$query = $this->db->delete('event', ['id_event' => $id]);
		if ($query) {
			unlink("assets/upload/event/" . $_id->profile);
		}
		redirect('admin/event');
	}
}

/* End of file event.php */
