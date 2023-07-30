<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Wilayah_model', 'wilayah');
		$this->auth->cek();
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->wilayah->tabel()->result(),
			'content'		=> 'wilayah/v_content',
			'ajax'	 		=> 'wilayah/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'wilayah/v_add',
			'ajax'	 		=> 'wilayah/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_wilayah'			=> $this->input->post('nama_wilayah'),
		);

		$q = $this->wilayah->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');

		redirect(base_url('wilayah'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->wilayah->detail($id)->row_array(),
			'content'		=> 'wilayah/v_edit',
			'ajax'	 		=> 'wilayah/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_wilayah'			=> $this->input->post('id_wilayah'),
			'nama_wilayah'			=> $this->input->post('nama_wilayah')
		);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->wilayah->update($data);
		redirect(base_url('wilayah'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_wilayah'	=> $id
		);
		
		$this->wilayah->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('wilayah'),'refresh');

	}



}
