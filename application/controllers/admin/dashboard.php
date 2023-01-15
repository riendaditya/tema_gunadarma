<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
			$data['total_anggota'] = $this->M_tema->hitungJumlah('anggota');
			$data['total_naskah'] = $this->M_tema->hitungJumlah('naskah');
			$data['total_event'] = $this->M_tema->hitungJumlah('event');
			$data['total_achiev'] = $this->M_tema->hitungJumlah('achievement');
			$this->load->view('t_admin/a_header');
			$this->load->view('t_admin/a_sidebar');
			$this->load->view('admin/dashboard', $data);
			$this->load->view('t_admin/a_footer');

	}
}



/* End of file Dashboard.php */
