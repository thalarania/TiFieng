<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_pelanggan');
			$this->db->join('tbl_wilayah','tbl_pelanggan.id_wilayah = tbl_wilayah.id_wilayah','inner');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_pelanggan');
			$this->db->join('tbl_wilayah','tbl_pelanggan.id_wilayah = tbl_wilayah.id_wilayah','inner');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_pelanggan)
	{
		$this->db->select('*');
		$this->db->from('tbl_pelanggan');
		$this->db->join('tbl_wilayah','tbl_pelanggan.id_wilayah = tbl_wilayah.id_wilayah','inner');
		$this->db->where('id_pelanggan', $id_pelanggan);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_pelanggan', $data);
	}

	public function update($data)
	{
		$this->db->where('id_pelanggan', $data['id_pelanggan']);
		$this->db->update('tbl_pelanggan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_pelanggan', $data['id_pelanggan']);
		$this->db->delete('tbl_pelanggan');
	}

	public function login($username,$enpass)
	{
		$username = $this->db->escape_str($username);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('tbl_pelanggan');
		$this->db->where(array(
			'email_pelanggan' => $username,
			'password_pelanggan' => sha1($password)
		));
		$query = $this->db->get();
		return $query->row();
	}



}
