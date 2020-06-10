<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
	}

	// caraku dewe
	// public function index()
	// {	
	// 	$data['isi'] = $this->Mcrud->retrive();
	// 	$this->load->view('tampil_data', $data);
	// }

	// carane pak harminto
	// Menampilkan data
	public function index()
	{	
		redirect('crud/tampil');
	}

	public function tampil()
	{
		$data = array(
			'judul' => 'Tampil Data',
			'isi' => $this->Mcrud->retrive()
		);
		$this->load->view('template/header', $data);
		$this->load->view('tampil_data', $data);
		$this->load->view('template/footer');
	}

	// Insert Data
	public function tambah()
	{	
		$data = array(
			'judul' => 'Tambah Data' , 
		);
		$this->load->view('template/header', $data);
		$this->load->view('tambah_data', $data);
		$this->load->view('template/footer');
	}

	public function simpan()
	{
		$data = array(
			'id' => '', 
			'nama' => $this->input->post('nama')
		);
		$this->Mcrud->simpan_data($data);
	}

	// Update Data
	public function ubah()
	{
		$id = $this->uri->segment(3);
		$q = $this->Mcrud->getRow($id);
		$data = array(
			'judul' => 'Ubah Data',
			'id' => $q->row('id'),
			'nama' => $q->row('nama')
		);

		$this->load->view('template/header', $data);
		$this->load->view('ubah_data', $data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$this->Mcrud->update_data();
	}

	// Hapus Data
	public function hapus()
	{
		$this->Mcrud->hapus_data();
	}

}

/* End of file Crud.php */
/* Location: .//C/xampp/htdocs/wl/app/Controllers/Crud.php */