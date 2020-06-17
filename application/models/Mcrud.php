<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcrud extends CI_Model {

	public function retrieve()
	{
		// caraku dewe
		// $this->db->select('id, nama');
		// $this->db->from('tb_latihan');
		// return $this->db->get()->result();


		// carane pak harminto
		$this->db->select('id, nama');
		$this->db->from('tb_latihan');
		$q = $this->db->get();
		if ($q->num_rows() > 0) {
			$hasil = $q->result_array();
		}else{
			$hasil = array();
		}
		$q->free_result();

		return $hasil;

	}

	public function simpan_data($data)
	{
		$q = $this->db->insert('tb_latihan', $data);
		if ($q) {
			redirect('crud/tampil');
		}else{
			redirect('crud/tambah');
		}
	}

	public function getRow($id)
	{
		$q = $this->db->where('id', $id)->get('tb_latihan');
		return $q;
	}

	public function update_data()
	{
		$id = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('nama')
		);
		$q = $this->db->where('id', $id)->update('tb_latihan', $data);
		if ($q) {
			redirect('crud/tampil');
		}else{
			redirect('crud/ubah');
		}
	}

	public function hapus_data()
	{
		$id = $this->uri->segment(3);
		$q =  $this->db->where('id', $id)->delete('tb_latihan');
		if ($q) {
			redirect('crud/tampil');
		}
	}

}

/* End of file Mcrud.php */
/* Location: .//C/xampp/htdocs/wl/app/Models/Mcrud.php */