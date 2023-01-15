<?php

defined('BASEPATH') or exit('No direct script access allowed');

class achievement extends CI_Controller
{

	public function index()
	{
		$data['achievement'] = $this->M_tema->get_data('achievement')->result();
		$this->load->view('t_user/header');
		$this->load->view('user/achievement', $data);
		$this->load->view('t_user/footer');
	}

	public function detail()
	{
		$data['achievement'] = $this->M_tema->get_data('achievement')->result();

		$this->load->view('t_user/header');
		$this->load->view('user/achievement_detail', $data);
		$this->load->view('t_user/footer');
	}
}

/* End of file achievement.php */
