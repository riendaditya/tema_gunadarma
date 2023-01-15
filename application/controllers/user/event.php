<?php

defined('BASEPATH') or exit('No direct script access allowed');

class event extends CI_Controller
{

	public function index()
	{
		$data['event'] = $this->M_tema->get_data('event')->result();
		$this->load->view('t_user/header');
		$this->load->view('user/event', $data);
		$this->load->view('t_user/footer');
	}

	public function detail($id)
	{
		$data['event'] = $this->M_tema->ambil_id_event($id);
		$this->load->view('t_user/header');
		$this->load->view('user/event_detail', $data);
		$this->load->view('t_user/footer');
	}
}

/* End of file event.php */
