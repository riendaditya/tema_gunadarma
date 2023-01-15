<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class naskah extends CI_Controller {

	public function index()
	{
		$data['naskah'] = $this->M_tema->get_data('naskah')->result();
		$this->load->view('t_user/header');
		$this->load->view('user/naskah', $data);
		$this->load->view('t_user/footer');

	}

}

/* End of file naskah.php */
