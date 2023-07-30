<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model', 'kategori');
		$this->load->model('Type_model', 'type');
		$this->load->model('Wilayah_model', 'wilayah');
		$this->auth->cek();
		
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->kategori->tabel()->result(),
			'content'		=> 'kategori/v_content',
			'ajax'	 		=> 'kategori/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'kategori/v_add',
			'type' 			=> $this->type->tabel()->result(),
			'wilayah' 		=> $this->wilayah->tabel()->result(),
			'ajax'	 		=> 'kategori/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'id_type'	    		=> $this->input->post('id_type'),
			'id_wilayah'			=> $this->input->post('id_wilayah'),
			'nama_kategori'		  	=> $this->input->post('nama_kategori'),
			'nama_teknisi'		  	=> $this->input->post('nama_teknisi')
			
		
		);

		$q = $this->kategori->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
		redirect(base_url('kategori'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->kategori->detail($id)->row_array(),
			'type' 			=> $this->type->tabel()->result(),
			'wilayah' 		=> $this->wilayah->tabel()->result(),
			'content'		=> 'kategori/v_edit',
			'ajax'	 		=> 'kategori/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_kategori'			=> $this->input->post('id_kategori'),
			'id_type'	    		=> $this->input->post('id_type'),
			'id_wilayah'			=> $this->input->post('id_wilayah'),
			'nama_kategori'		  	=> $this->input->post('nama_kategori'),
			'nama_teknisi'		  	=> $this->input->post('nama_teknisi')
			
			
			
		);

		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');	
		$this->kategori->update($data);
		redirect(base_url('kategori'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_kategori'	=> $id
		);
		
		$this->kategori->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('kategori'),'refresh');

	}

	public function getkategori()
	{
		$id_type = $this->input->post('id');
		$data = $this->kategori->tabel('tbl_kategori.id_type = '.$id_type.'')->result();
		echo "
				<option value=''>Pilih</option>
			";
		foreach($data as $row){
			echo "
				<option value='".$row->id_kategori."'>$row->nama_kategori</option>
			";
		}
		
	}



}
