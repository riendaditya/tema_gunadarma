<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	

    public function index()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('t_admin/a_header');
			$this->load->view('t_admin/sidebar');
            $this->load->view('admin/user');
            $this->load->view('t_admin/a_footer');
        } else {
            $nama       = $this->input->post('nama');
            $username   = $this->input->post('username');
            $password   = md5($this->input->post('password'));


            $data = array(
                'nama'          => $nama,
                'username'      => $username,
                'password'      => $password,
                'level'       	=> 2
            );

            $this->M_tema->insert_data($data, 'admin');
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Akun berhasil Registrasi !!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('admin/user');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }
}



/* End of file Register.php */
