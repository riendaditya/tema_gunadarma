<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_naskah extends CI_Controller
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
		$data['naskah'] = $this->M_tema->get_data('naskah')->result();
		$data['kategori'] = $this->M_tema->get_data('kategori')->result();
		$this->load->view('t_admin/a_header');
		$this->load->view('t_admin/a_sidebar');
		$this->load->view('admin/data_naskah', $data);
		$this->load->view('t_admin/a_footer');
	}

	public function tambah_naskah()
	{
		$config['upload_path']          = './assets/upload/naskah/';
		$config['allowed_types']        = 'pdf|docx|doc';
		$config['max_size']             = 10000;
		// $config['max_width']            = 10000;
		// $config['max_height']           = 10000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('content')) {
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Naskah Gagal Dibuat, periksa format dan ukuran file</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/data_naskah');
		} else {
			$content = $this->upload->data();
			$content = $content['file_name'];
			$judul = $this->input->post('judul', TRUE);
			$kategori = $this->input->post('kategori', TRUE);

			$data = array(
				'judul' => $judul,
				'kategori' => $kategori,
				'content' => $content
			);
			$this->db->set('tanggal', 'NOW()', FALSE);
			$this->db->insert('naskah', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Naskah berhasil di upload</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/data_naskah');
		}
	}

	public function edit_naskah($id)
	{
		$id = $this->input->post('id_naskah');
		$config['upload_path']          = './assets/upload/naskah/';
		$config['allowed_types']        = 'pdf|docx|doc';
		$config['max_size']             = 10000;
		// $config['max_width']            = 10000;
		// $config['max_height']           = 10000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('content')) {
			$judul = $this->input->post('judul', TRUE);
			$kategori = $this->input->post('kategori', TRUE);

			$data = array(
				'judul' => $judul,
				'kategori' => $kategori,
			);

			$this->db->where('id_naskah', $id);
			$this->db->set('tanggal', 'NOW()', FALSE);
			$this->db->update('naskah', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Naskah berhasil di update</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/data_naskah');
		} else {
			$content = $this->upload->data();
			$content = $content['file_name'];
			$judul = $this->input->post('judul', TRUE);
			$kategori = $this->input->post('kategori', TRUE);

			$data = array(
				'judul' => $judul,
				'kategori' => $kategori,
				'content' => $content
			);

			$this->db->where('id_naskah', $id);
			$this->db->set('tanggal', 'NOW()', FALSE);
			$this->db->update('naskah', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Naskah berhasil di upload</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/data_naskah');
		}
	}

	public function delete_naskah($id)
	{
		{
			$_id = $this->db->get_where('naskah', ['id_naskah' => $id])->row();
			$query = $this->db->delete('naskah', ['id_naskah' => $id]);
			if ($query) {
				unlink("assets/upload/naskah/" . $_id->content);
			}
			redirect('admin/naskah');
		}
	}

	public function download($id)
	{
		$this->load->helper('download');
		$filepem  = $this->M_tema->download($id);
		$file     = 'assets/upload/naskah/' . $filepem['content'];
		force_download($file, null);
	}

	function save()
	{
		$judul = $this->input->post('judul', TRUE);
		$kategori = $this->input->post('kategori', TRUE);
		$content = $this->input->post('content', TRUE);

		$data = array(
			'judul' => $judul,
			'kategori' => $kategori,
			'content' => $content
		);
		$this->db->set('tanggal', 'NOW()', FALSE);
		$this->M_tema->insert_data($data, 'naskah');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Naskah berhasil di upload</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
		);
		redirect('admin/data_naskah');
	}
}
