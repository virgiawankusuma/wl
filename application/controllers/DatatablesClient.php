<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatatablesClient extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index()
	{	
		$data = array(
			'judul' => 'Datatables Client Side' ,
			'isi' => $this->Mcrud->retrieve()
		);

		$this->load->view('template/header', $data);
		$this->load->view('dtclient', $data);
		$this->load->view('template/footer');
	}

}

/* End of file DatatablesClient.php */
/* Location: ./application/controllers/DatatablesClient.php */