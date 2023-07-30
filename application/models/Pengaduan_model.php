<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_pengaduan');
			$this->db->join('tbl_pelanggan','tbl_pengaduan.id_pelanggan = tbl_pelanggan.id_pelanggan','inner');
			$this->db->join('tbl_kategori','tbl_pengaduan.id_kategori = tbl_kategori.id_kategori','inner');
			$this->db->join('tbl_type','tbl_kategori.id_type = tbl_type.id_type','inner');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_pengaduan');
			$this->db->join('tbl_pelanggan','tbl_pengaduan.id_pelanggan = tbl_pelanggan.id_pelanggan','inner');
			$this->db->join('tbl_kategori','tbl_pengaduan.id_kategori = tbl_kategori.id_kategori','inner');
			$this->db->join('tbl_type','tbl_kategori.id_type = tbl_type.id_type','inner');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}

	public function tabeldistinct($where = null)
	{

		$this->db->select('*');
		$this->db->from('tbl_pengaduan');
		$this->db->where($where);
		$query = $this->db->get();
		
		
		return $query;
	}


	public function detail($id_pengaduan)
	{
		$this->db->select('*');
		$this->db->from('tbl_pengaduan');
		$this->db->join('tbl_pelanggan','tbl_pengaduan.id_pelanggan = tbl_pelanggan.id_pelanggan','inner');
		$this->db->join('tbl_kategori','tbl_pengaduan.id_kategori = tbl_kategori.id_kategori','inner');
		$this->db->join('tbl_type','tbl_kategori.id_type = tbl_type.id_type','inner');
		$this->db->where('id_pengaduan', $id_pengaduan);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_pengaduan', $data);
	}

	public function update($data)
	{
		$this->db->where('id_pengaduan', $data['id_pengaduan']);
		$this->db->update('tbl_pengaduan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_pengaduan', $data['id_pengaduan']);
		$this->db->delete('tbl_pengaduan');
	}



}
