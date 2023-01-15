<?php


defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

	public function index()
	{
		$data['admin'] = $this->M_tema->get_data('admin')->result();
		$this->load->view('t_admin/a_header');
		$this->load->view('t_admin/a_sidebar');
		$this->load->view('admin/user', $data);
		$this->load->view('t_admin/a_footer');
	}

	public function ch_pass($id)
	{
		$id         = $this->input->post('id_user');
		$password  	= $this->input->post('password');

		$data = array(
			'password' => md5($password)
		);

		$this->M_tema->update_password($id, $data, 'admin');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>admin Berhasil DiUpdate!!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
		);
		redirect('admin/user');
	}
}

/* End of file user.php */
