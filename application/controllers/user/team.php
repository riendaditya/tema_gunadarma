<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class team extends CI_Controller {

	public function index()
	{
		// $data['anggota'] = $this->db->query("SELECT * FROM anggota WHERE jabatan != 'Anggota'")->result();
		// $data['anggota'] = $this->db->query("SELECT * FROM anggota WHERE jabatan = 'Anggota'")->result();
		$data['anggota'] = $this->M_tema->get_data('anggota')->result();
		$this->load->view('t_user/header');
		$this->load->view('user/team', $data);
		$this->load->view('t_user/footer');
	}

}

/* End of file team.php */
