<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_kategori');
			$this->db->join('tbl_type','tbl_kategori.id_type = tbl_type.id_type','inner');
			$this->db->join('tbl_wilayah','tbl_kategori.id_wilayah = tbl_wilayah.id_wilayah','inner');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_kategori');
			$this->db->join('tbl_type','tbl_kategori.id_type = tbl_type.id_type','inner');
			$this->db->join('tbl_wilayah','tbl_kategori.id_wilayah = tbl_wilayah.id_wilayah','inner');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('tbl_kategori');
		$this->db->join('tbl_type','tbl_kategori.id_type = tbl_type.id_type','inner');
		$this->db->join('tbl_wilayah','tbl_kategori.id_wilayah = tbl_wilayah.id_wilayah','inner');
		$this->db->where('id_kategori', $id_kategori);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_kategori', $data);
	}

	public function update($data)
	{
		$this->db->where('id_kategori', $data['id_kategori']);
		$this->db->update('tbl_kategori', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kategori', $data['id_kategori']);
		$this->db->delete('tbl_kategori');
	}



}
