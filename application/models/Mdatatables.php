<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdatatables extends CI_Model {

	var $table = "tb_latihan";
	var $column = array('nama');
	var $order = array('nama' => 'asc');
	var $primary = 'id';

	private function _get_datatables_query()
	{
		$this->db->from($this->table);
		if (isset($_POST['search'])) {
			$i = 0;
			foreach ($this->column as $item) {
				if ($_POST['search']['value']) {
					if ($i===0) {
						$this->db->group_start();
						$this->db->like($item, $_POST['search'['value']]);
					}else{
						$this->db->or_like($item, $_POST['search']['value']);
					}
					if (count($this->column) - 1 == $i) {
						$this->db->group_end();
					}
					$column[$i] = $item;
					$i++;
				}
			}
			if (isset($_POST['order'])) {
				$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			}else if (isset($this->order)) {
				$order = $this->order;
				$this->db->order_by(key($order), $order[key($order)]);
			}
		}
	}

	public function get_datatables()
	{
		$this->_get_datatables_query();
		if ($_POST['length'] != -1) {
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			if ($query->num_rows()>0) {
				$hasil = $query->result_array();
			}else{
				$hasil = array();
			}
			$query->free_result();
			return $hasil;
		}
	}

	public function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		$hasil = $query->num_rows();
		$query->free_result();
		return $hasil;
	}

	public function count_all()
	{
		$this->db->from($this->table);
		$query = $this->db->count_all_result();
		return $query;
	}

	public function load()
	{
		$list = $this->get_datatables();
		$no = $this->input->post('start');
		$data = array();
		foreach ($list as $k0 => $v0) {
			$row = array();
			$no++;
			$row[] = $no;
			foreach ($this->column as $k1 => $v1) {
				$row[] = $v0[$v1];
			}
			$data[] = $row;
		}
		$output = array(
			'draw' => $this->input->post('draw'),
			'recordTotal' => $this->count_all(),
			'recordsFiltered' => $this->count_filtered(),
			'data' => $data,
		);
		die(json_encode($output));
	}

}

/* End of file Mdatatables.php */
/* Location: ./application/models/Mdatatables.php */