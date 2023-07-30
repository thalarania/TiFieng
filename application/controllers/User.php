<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
		$this->auth->cek();
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->user->tabel()->result(),
			'content'		=> 'user/v_content',
			'ajax'	 		=> 'user/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'user/v_add',
			'ajax'	 		=> 'user/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_user'			=> $this->input->post('nama_user'),
			'email_user'		=> $this->input->post('email_user'),
			'password_user'		=> $this->input->post('password_user')
		);

		$q = $this->user->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');

		redirect(base_url('user'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->user->detail($id)->row_array(),
			'content'		=> 'user/v_edit',
			'ajax'	 		=> 'user/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_user'			=> $this->input->post('id_user'),
			'nama_user'			=> $this->input->post('nama_user'),
			'email_user'		=> $this->input->post('email_user'),
			'password_user'		=> $this->input->post('password_user')
		);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->user->update($data);
		redirect(base_url('user'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_user'	=> $id
		);
		
		$this->user->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('user'),'refresh');

	}



}
