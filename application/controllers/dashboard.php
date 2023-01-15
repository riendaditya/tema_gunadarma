<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

    public function index()
    {
		$data['about'] = $this->M_tema->get_data('about')->result();
		$data['anggota'] = $this->M_tema->get_data('anggota')->result();
        $this->load->view('t_user/header');
        $this->load->view('dashboard', $data);
        $this->load->view('t_user/footer');
    }
}

/* End of file dashboard1.php */
