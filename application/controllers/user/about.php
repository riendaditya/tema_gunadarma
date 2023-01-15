<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

	public function index()
	{
		$data['about'] = $this->M_tema->get_data('about')->result();
		$this->load->view('t_user/header');
        $this->load->view('user/about', $data);
        $this->load->view('t_user/footer');
	
	}

}

/* End of file about.php */
