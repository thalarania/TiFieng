<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_wilayah');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_wilayah');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_wilayah)
	{
		$this->db->select('*');
		$this->db->from('tbl_wilayah');
		$this->db->where('id_wilayah', $id_wilayah);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_wilayah', $data);
	}

	public function update($data)
	{
		$this->db->where('id_wilayah', $data['id_wilayah']);
		$this->db->update('tbl_wilayah', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_wilayah', $data['id_wilayah']);
		$this->db->delete('tbl_wilayah');
	}



}
