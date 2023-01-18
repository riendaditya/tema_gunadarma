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
	public function download($id)
	{
		$this->load->helper('download');
		$filepem  = $this->M_tema->download($id);
		$file     = 'assets/upload/naskah/' . $filepem['content'];
		force_download($file, null);
	}

}

/* End of file naskah.php */
