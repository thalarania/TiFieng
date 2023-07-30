<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Type_model', 'type');
		$this->auth->cek();
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->type->tabel()->result(),
			'content'		=> 'type/v_content',
			'ajax'	 		=> 'type/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'type/v_add',
			'ajax'	 		=> 'type/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_type'		=> $this->input->post('nama_type')
			
			
		);

		$q = $this->type->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');

		redirect(base_url('type'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->type->detail($id)->row_array(),
			'content'		=> 'type/v_edit',
			'ajax'	 		=> 'type/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_type'			=> $this->input->post('id_type'),
			'nama_type'		    => $this->input->post('nama_type')
			
		);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->type->update($data);
		redirect(base_url('type'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_type'	=> $id
		);
		
		$this->type->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('type'),'refresh');

	}



}
