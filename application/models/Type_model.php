<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_type');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_type');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_type)
	{
		$this->db->select('*');
		$this->db->from('tbl_type');
		$this->db->where('id_type', $id_type);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_type', $data);
	}

	public function update($data)
	{
		$this->db->where('id_type', $data['id_type']);
		$this->db->update('tbl_type', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_type', $data['id_type']);
		$this->db->delete('tbl_type');
	}



}
