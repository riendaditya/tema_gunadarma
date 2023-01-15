<?php

defined('BASEPATH') or exit('No direct script access allowed');

class contact extends CI_Controller
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
		$data['contact'] = $this->M_tema->get_data('contact')->result();
		$data['subs'] = $this->M_tema->get_data('subs')->result();
		$this->load->view('t_admin/a_header');
		$this->load->view('t_admin/a_sidebar');
		$this->load->view('admin/contact', $data);
		$this->load->view('t_admin/a_footer');
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->M_tema->delete_data($where, 'contact');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data contact Berhasil di Hapus!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
		);
		redirect('admin/contact');
	}

	public function delete_subs($id)
	{
		$where = array('id' => $id);
		$this->M_tema->delete_data($where, 'subs');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Subscribe berhasil di Hapus!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
		);
		redirect('admin/contact');
	}
}

/* End of file contact.php */
