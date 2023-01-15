<?php

defined('BASEPATH') or exit('No direct script access allowed');

class jenis extends CI_Controller
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
		$data['kat_ach'] = $this->M_tema->get_data('kat_ach')->result();
		$data['kategori'] = $this->M_tema->get_data('kategori')->result();
		$data['jabatan'] = $this->M_tema->get_data('jabatan')->result();
		$this->load->view('t_admin/a_header');
		$this->load->view('t_admin/a_sidebar');
		$this->load->view('admin/jenis', $data,);
		$this->load->view('t_admin/a_footer');
	}

	public function	tbh_kateg()
	{
		$jenis_ktg = $this->input->post('jenis_ktg');

		$data = array(
			'jenis_ktg' => $jenis_ktg,
		);
		$this->M_tema->insert_data($data, 'kategori');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Kategori berhasil di update</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
		);
		redirect('admin/jenis');
	}

	public function tbh_jabat()
	{
		$jenis_jbt = $this->input->post('jenis_jbt');

		$data = array(
			'jenis_jbt' => $jenis_jbt,
		);
		$this->M_tema->insert_data($data, 'jabatan');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Jabatan berhasil di update</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
		);
		redirect('admin/jenis');
	}

	public function	tbh_achiev()
	{
		$jenis = $this->input->post('jenis');

		$data = array(
			'jenis' => $jenis,
		);
		$this->M_tema->insert_data($data, 'kat_ach');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Achievment berhasil di update</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
		);
		redirect('admin/jenis/#achiev');
	}

	public function upd_kateg($id)
	{
		$id          = $this->input->post('id_kategori');
		$jenis_ktg   = $this->input->post('jenis_ktg');


		$data = array(
			'jenis_ktg' => $jenis_ktg,

		);
		$where = array(
			'id_kategori' => $id
		);

		$this->M_tema->update_data('kategori', $data, $where);
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Kategori Berhasil DiUpdate!!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
		);
		redirect('admin/jenis');
	}

	public function upd_jabat($id)
	{
		$id = $this->input->post('id_jabatan');
		$jenis_jbt = $this->input->post('jenis_jbt', TRUE);

		$data = array(
			'jenis_jbt' => $jenis_jbt,
		);

		$this->db->where('id_jabatan', $id);
		$this->db->update('jabatan', $data);
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>jabatan berhasil di update</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
		);
		redirect('admin/jenis');
	}

	public function upd_achiev($id)
	{
		$id          = $this->input->post('id');
		$jenis		 = $this->input->post('jenis');


		$data = array(
			'jenis' => $jenis,

		);
		$where = array(
			'id' => $id
		);

		$this->M_tema->update_data('kat_ach', $data, $where);
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Jenis Achievment Berhasil DiUpdate!!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
		);
		redirect('admin/jenis/#achiev');
	}

	public function del_kateg($id)
	{
		$where = array('id_kategori' => $id);
		$this->M_tema->delete_data($where, 'kategori');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data kategori Berhasil di Hapus!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
		);
		redirect('admin/jenis');
	}

	public function del_jabat($id)
	{
		$where = array('id_jabatan' => $id);
		$this->M_tema->delete_data($where, 'jabatan');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data jabatan Berhasil di Hapus!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
		);
		redirect('admin/jenis');
	}

	public function del_ach($id)
	{
		$where = array('id' => $id);
		$this->M_tema->delete_data($where, 'kat_ach');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Achievment Berhasil di Hapus!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
		);
		redirect('admin/jenis');
	}
}

/* End of file jenis.php */
