<?php

defined('BASEPATH') or exit('No direct script access allowed');

class contact extends CI_Controller
{

	public function index()
	{
		$data['contact'] = $this->M_tema->get_data('contact')->result();
		$this->load->view('t_user/header');
		$this->load->view('user/contact');
		$this->load->view('t_user/footer');
	}

	public function send()
	{
		$name = $this->input->post('name', TRUE);
		$email = $this->input->post('email', TRUE);
		$subject = $this->input->post('subject', TRUE);
		$message = $this->input->post('message', TRUE);

		$data = array(
			'name' => $name,
			'email' => $email,
			'subject' => $subject,
			'message' => $message
		);
		$this->db->set('tanggal', 'NOW()', FALSE);
		$this->M_tema->insert_data($data, 'contact');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>contact berhasil di upload</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>'
		);
		redirect('user/contact');
	}

	public function subs()
	{
		$email = $this->input->post('email', TRUE);
		$data = array('email' => $email);
		$this->M_tema->insert_data($data, 'subs');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>email berhasil di daftarkan!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>'
		);
		redirect('dashboard/#footer');
	}
}

/* End of file contact.php */
