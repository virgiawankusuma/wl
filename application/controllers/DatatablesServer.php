<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatatablesServer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdatatables');
	}

	public function index()
	{
		$data = array(
			'judul' => 'Datatables Server' , 
		);
		$this->load->view('template/header', $data);
		$this->load->view('dtserver', $data);
		$this->load->view('template/footer');
	}

	public function showTable()
	{
		if ($this->input->is_ajax_request()) {
			$this->Mdatatables->load();
		}
	}

}

/* End of file DatatablesServer.php */
/* Location: ./application/controllers/DatatablesServer.php */