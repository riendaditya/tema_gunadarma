<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function login()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/form_login');
		} else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$cek = $this->M_tema->cek_login($username, $password);

			if ($cek == false) {
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Username Atau Password Salah!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
				);
				redirect('auth/login');
			} else {
				$this->session->set_userdata('username', $cek->username);
				$this->session->set_userdata('level', $cek->level);
				$this->session->set_userdata('nama', $cek->nama);

				redirect('admin/dashboard');
			}
		}
	}


	public function _rules()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/dashboard');
	}

	public function ch_pass()
	{
		// $this->load->view('t_admin/header');
		$this->load->view('auth/ch_pass');
		// $this->load->view('t_admin/footer');
	}

	public function ch_pass_aksi()
	{
		$pass_baru = $this->input->post('pass_baru');
		$ulang_pass = $this->input->post('ulang_pass');

		$this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|matches[ulang_pass]');
		$this->form_validation->set_rules('ulang_pass', 'Ulangi Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/ch_pass');
		} else {
			$data = array('password' => md5($pass_baru));
			$id = array('id' => $this->session->userdata('id'));

			$this->M_tema->update_password($id, $data, 'admin');
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Password Berhasil di Update!!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
			);
			redirect('auth/login');
		}
	}
	public function delete_admin($id)
	{
		$where = array('id_user' => $id);
		$this->M_tema->delete_data($where, 'admin');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data user berhasil di Hapus!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
		);
		redirect('admin/user');
	}
}

/* End of file Auth.php */
