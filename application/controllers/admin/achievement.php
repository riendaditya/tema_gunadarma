<?php

defined('BASEPATH') or exit('No direct script access allowed');

class achievement extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('upload');
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('pesan', "You need to be logged in to access the page.");
			redirect('auth/login');
		}
	}
	public function index()
	{
		$data['achievement'] = $this->M_tema->get_data('achievement')->result();
		$data['kat_ach'] = $this->M_tema->get_data('kat_ach')->result();
		$this->load->view('t_admin/a_header');
		$this->load->view('t_admin/a_sidebar');
		$this->load->view('admin/achievement', $data);
		$this->load->view('t_admin/a_footer');
	}
	// public function tambah()
	// {
	// 	$config['upload_path']          = './assets/upload/achiev/';
	// 	$config['allowed_types']        = 'gif|jpg|png|jpeg';
	// 	$config['max_size']             = 6144;
	// 	// $config['max_width']            = 1024;
	// 	// $config['max_height']           = 768;

	// 	$this->load->library('upload', $config);

	// 	if (!$this->upload->do_upload('file')) {
	// 		echo 'Gagal';
	// 	} else {
	// 		$file = $this->upload->data();
	// 		$file = $file['file_name'];
	// 		$judul = $this->input->post('judul', TRUE);
	// 		$keterangan = $this->input->post('keterangan', TRUE);
	// 		$kat_ach = $this->input->post('kat_ach', TRUE);

	// 		$data = array(
	// 			'judul' => $judul,
	// 			'keterangan' => $keterangan,
	// 			'kat_ach' => $kat_ach,
	// 			'file' => $file
	// 		);
	// 		$this->db->insert('achievement', $data);
	// 		$this->session->set_flashdata(
	// 			'pesan',
	// 			'<div class="alert alert-success alert-dismissible fade show" role="alert">
	// 				<strong>achievement berhasil di upload</strong>
	// 				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 				<span aria-hidden="true">&times;</span>
	// 				</button>
	// 				</div>'
	// 		);
	// 		redirect('admin/achievement');
	// 	}
	// }

	public function tambah()
	{
		$config['upload_path']		= './assets/upload/achiev/'; //path folder
		$config['allowed_types']	= 'gif|jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] 	= TRUE; //Enkripsi nama yang terupload
		$config['max_size']			= 6144;

		$this->upload->initialize($config);

		if ($this->upload->do_upload('file')) {
			$gbr = $this->upload->data();
			//Compress Image
			$config['image_library'] = 'gd2';
			$config['source_image'] = './assets/upload/achiev/' . $gbr['file_name'];
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['quality'] = '50%';
			$config['width'] = 600;
			$config['height'] = 400;
			$config['new_image'] = './assets/upload/achiev/' . $gbr['file_name'];
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();


			$judul = $this->input->post('judul', TRUE);
			$kat_ach = $this->input->post('kat_ach', TRUE);
			$keterangan = $this->input->post('keterangan', TRUE);
			$file = $gbr['file_name'];

			$data = array(
				'judul' => $judul,
				'kat_ach' => $kat_ach,
				'keterangan' => $keterangan,
				'file' => $file
			);
			$this->db->insert('achievement', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>achievement berhasil di update</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'
			);
			redirect('admin/achievement');
		}
	}

	// public function edit($id)
	// {
	// 	$id = $this->input->post('id');
	// 	$config['upload_path']          = './assets/upload/achiev/';
	// 	$config['allowed_types']        = 'gif|jpg|png|jpeg';
	// 	$config['max_size']             = 6144;
	// 	// $config['max_width']            = 1024;
	// 	// $config['max_height']           = 768;

	// 	$this->load->library('upload', $config);

	// 	if (!$this->upload->do_upload('file')) {
	// 		$judul = $this->input->post('judul', TRUE);
	// 		$kat_ach = $this->input->post('kat_ach', TRUE);
	// 		$keterangan = $this->input->post('keterangan', TRUE);

	// 		$data = array(
	// 			'judul' => $judul,
	// 			'kat_ach' => $kat_ach,
	// 			'keterangan' => $keterangan,
	// 		);

	// 		$this->db->where('id', $id);
	// 		$this->db->update('achievement', $data);
	// 		$this->session->set_flashdata(
	// 			'pesan',
	// 			'<div class="alert alert-success alert-dismissible fade show" role="alert">
	// 				<strong>achievement berhasil di update</strong>
	// 				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 				<span aria-hidden="true">&times;</span>
	// 				</button>
	// 				</div>'
	// 		);
	// 		redirect('admin/achievement');
	// 	} else {

	// 		$file = $this->upload->data();
	// 		$file = $file['file_name'];
	// 		$judul = $this->input->post('judul', TRUE);
	// 		$kat_ach = $this->input->post('kat_ach', TRUE);
	// 		$keterangan = $this->input->post('keterangan', TRUE);

	// 		$data = array(
	// 			'judul' => $judul,
	// 			'kat_ach' => $kat_ach,
	// 			'keterangan' => $keterangan,
	// 			'file' => $file
	// 		);

	// 		$this->db->where('id', $id);
	// 		$this->db->update('achievement', $data);
	// 		$this->session->set_flashdata(
	// 			'pesan',
	// 			'<div class="alert alert-success alert-dismissible fade show" role="alert">
	// 				<strong>achievement berhasil di update</strong>
	// 				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 				<span aria-hidden="true">&times;</span>
	// 				</button>
	// 				</div>'
	// 		);
	// 		redirect('admin/achievement');
	// 	}
	// }

	public function edit($id)
	{
		$id = $this->input->post('id');
		$config['upload_path']		= './assets/upload/achiev/'; //path folder
		$config['allowed_types']	= 'gif|jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] 	= TRUE; //Enkripsi nama yang terupload
		$config['max_size']			= 6144;

		$this->upload->initialize($config);

		if ($this->upload->do_upload('file')) {
			$gbr = $this->upload->data();
			//Compress Image
			$config['image_library'] = 'gd2';
			$config['source_image'] = './assets/upload/achiev/' . $gbr['file_name'];
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['quality'] = '50%';
			$config['width'] = 600;
			$config['height'] = 400;
			$config['new_image'] = './assets/upload/achiev/' . $gbr['file_name'];
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();


			$judul = $this->input->post('judul', TRUE);
			$kat_ach = $this->input->post('kat_ach', TRUE);
			$keterangan = $this->input->post('keterangan', TRUE);
			$file = $gbr['file_name'];

			$data = array(
				'judul' => $judul,
				'kat_ach' => $kat_ach,
				'keterangan' => $keterangan,
				'file' => $file
			);
			$this->db->where('id', $id);
			$this->db->update('achievement', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>achievement berhasil di update</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'
			);
			redirect('admin/achievement');
		} else {
			$judul = $this->input->post('judul', TRUE);
			$kat_ach = $this->input->post('kat_ach', TRUE);
			$keterangan = $this->input->post('keterangan', TRUE);

			$data = array(
				'judul' => $judul,
				'kat_ach' => $kat_ach,
				'keterangan' => $keterangan,
			);

			$this->db->where('id', $id);
			$this->db->update('achievement', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>achievement berhasil di update</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
			);
			redirect('admin/achievement');
		}
	}
	// public function delete($id)
	// {
	// 	$where = array('id' => $id);

	// 	if ($where) {
	// 		unlink('./assets/upload/achiev/' . $id->file);
	// 		$this->M_tema->delete_data($where, 'achievement');
	// 		$this->session->set_flashdata(
	// 			'pesan',
	// 			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
	// 			<strong>Data achievement berhasil di Hapus!!</strong>
	// 			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 			<span aria-hidden="true">&times;</span>
	// 			</button>
	// 			</div>'
	// 		);
	// 		redirect('admin/achievement');
	// 	}
	// 	$this->session->set_flashdata(
	// 		'pesan',
	// 		'<div class="alert alert-danger alert-dismissible fade show" role="alert">
	//         <strong>Data achievement berhasil di Hapus!!</strong>
	//         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	//         <span aria-hidden="true">&times;</span>
	//         </button>
	//         </div>'
	// 	);
	// 	redirect('admin/achievement');
	// }

	public function delete($id)
	{
		$_id = $this->db->get_where('achievement', ['id' => $id])->row();
		$query = $this->db->delete('achievement', ['id' => $id]);
		if ($query) {
			unlink("assets/upload/achiev/" . $_id->file);
		}
		redirect('admin/achievement');
	}
}

/* End of file achievement.php */
