<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pelanggan_model', 'pelanggan');
		$this->load->model('Wilayah_model', 'wilayah');
		$this->auth->cek();
		
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->pelanggan->tabel()->result(),
			'content'		=> 'pelanggan/v_content',
			'ajax'	 		=> 'pelanggan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'pelanggan/v_add',
			'wilayah' 			=> $this->wilayah->tabel()->result(),
			'ajax'	 		=> 'pelanggan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{

		//cek email pelanggan
		$cek = $this->pelanggan->tabel('tbl_pelanggan.email_pelanggan = "'.$this->input->post('email_pelanggan').'"')->row_array();
		if($cek !== null){
			$this->session->set_flashdata('error', '<i class="fa fa-check"></i> Tidak dapat diproses, email sudah terdaftar');
			redirect(base_url('pelanggan/add'),'refresh');
		}

		$data = array(
			'nama_pelanggan'		    => $this->input->post('nama_pelanggan'),
			'alamat_pelanggan'		    => $this->input->post('alamat_pelanggan'),
			'id_wilayah'	     		=> $this->input->post('id_wilayah'),
			'notlp_pelanggan'		    => $this->input->post('notlp_pelanggan'),
			'notlp_pelanggan'		    => $this->input->post('notlp_pelanggan'),
			'email_pelanggan'		    => $this->input->post('email_pelanggan'),
			'password_pelanggan'		=> sha1($this->input->post('password_pelanggan'))
			
		);

		$q = $this->pelanggan->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
		redirect(base_url('pelanggan'),'refresh');
	}

	public function edit($id)
	{
		
		$data = array(
			'detail' 		=> 	$this->pelanggan->detail($id)->row_array(),
			'wilayah' 		=> $this->wilayah->tabel()->result(),
			'content'		=> 'pelanggan/v_edit',
			'ajax'	 		=> 'pelanggan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{
		
		$data = array(
			'id_pelanggan'			=> $this->input->post('id_pelanggan'),
			'nama_pelanggan'		    => $this->input->post('nama_pelanggan'),
			'alamat_pelanggan'		    => $this->input->post('alamat_pelanggan'),
			'id_wilayah'	     		=> $this->input->post('id_wilayah'),
			'notlp_pelanggan'		    => $this->input->post('notlp_pelanggan'),
			'notlp_pelanggan'		    => $this->input->post('notlp_pelanggan'),
			'email_pelanggan'		    => $this->input->post('email_pelanggan')
		);
		$this->pelanggan->update($data);

		if($this->input->post('password_pelanggan') !== ''){
			$data = array(
				'id_pelanggan'			=> $this->input->post('id_pelanggan'),
				'password_pelanggan'	=> sha1($this->input->post('password_pelanggan'))
			);
			$this->pelanggan->update($data);
		}

		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');	
		redirect(base_url('pelanggan'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_pelanggan'	=> $id
		);
		
		$this->pelanggan->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('pelanggan'),'refresh');

	}



}


