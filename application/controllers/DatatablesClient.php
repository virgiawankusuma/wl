<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatatablesClient extends CI_Controller {

	public function index()
	{	
		$data = array(
			'judul' => 'Datatables Client' , 
		);

		// $this->load->view('template/header', $data);
		$this->load->view('dtclient');
		// $this->load->view('template/footer');
	}

}

/* End of file DatatablesClient.php */
/* Location: ./application/controllers/DatatablesClient.php */