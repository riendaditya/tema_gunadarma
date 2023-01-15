<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_anggota extends CI_Controller
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
		$data['anggota'] = $this->M_tema->get_data('anggota')->result();
		$data['jabatan'] = $this->M_tema->get_data('jabatan')->result();
		$this->load->view('t_admin/a_header');
		$this->load->view('t_admin/a_sidebar');
		$this->load->view('admin/data_anggota', $data);
		$this->load->view('t_admin/a_footer');
	}

	public function tambah_anggota()
	{
		$config['upload_path']          = './assets/upload/anggota/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 6144;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('profile')) {
			echo 'gagal upload';
		} else {
			$profile = $this->upload->data();
			$profile = $profile['file_name'];
			$nama = $this->input->post('nama', TRUE);
			$no_anggota = $this->input->post('no_anggota', TRUE);
			$angkatan = $this->input->post('angkatan', TRUE);
			$jabatan = $this->input->post('jabatan', TRUE);

			$data = array(
				'nama' => $nama,
				'no_anggota' => $no_anggota,
				'angkatan' => $angkatan,
				'jabatan' => $jabatan,
				'profile' => $profile
			);
			$this->db->insert('anggota', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>anggota berhasil di upload</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/data_anggota');
		}
	}

	public function edit_anggota($id)
	{
		$id = $this->input->post('id_anggota');
		$config['upload_path']          = './assets/upload/anggota/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 6144;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('profile')) {
			$nama = $this->input->post('nama', TRUE);
			$no_anggota = $this->input->post('no_anggota', TRUE);
			$angkatan = $this->input->post('angkatan', TRUE);
			$jabatan = $this->input->post('jabatan', TRUE);

			$data = array(
				'nama' => $nama,
				'no_anggota' => $no_anggota,
				'angkatan' => $angkatan,
				'jabatan' => $jabatan,
			);
			$this->db->where('id_anggota', $id);
			$this->db->update('anggota', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>anggota berhasil di update</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/data_anggota');
		} else {
			$profile = $this->upload->data();
			$profile = $profile['file_name'];
			$nama = $this->input->post('nama', TRUE);
			$no_anggota = $this->input->post('no_anggota', TRUE);
			$angkatan = $this->input->post('angkatan', TRUE);
			$jabatan = $this->input->post('jabatan', TRUE);

			$data = array(
				'nama' => $nama,
				'no_anggota' => $no_anggota,
				'angkatan' => $angkatan,
				'jabatan' => $jabatan,
				'profile' => $profile
			);
			$this->db->where('id_anggota', $id);
			$this->db->update('anggota', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>anggota berhasil di update</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/data_anggota');
		}
	}



	public function delete_anggota($id)
	{
		$_id = $this->db->get_where('anggota', ['id_anggota' => $id])->row();
		$query = $this->db->delete('anggota', ['id_anggota' => $id]);
		if ($query) {
			unlink("assets/upload/anggota/" . $_id->profile);
		}
		redirect('admin/anggota');
	}
}


/* End of file Data_anggota.php */
