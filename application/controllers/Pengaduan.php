<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengaduan_model', 'pengaduan');
		$this->load->model('Pelanggan_model', 'pelanggan');
		$this->load->model('Type_model', 'type');
		$this->load->model('Kategori_model', 'kategori');
		$this->load->helper('tgl_indo');
		
		
	}

	public function index()
	{
		if($this->session->userdata('level') == 'Admin'){
			$data = array(
				'tabel' 		=> $this->pengaduan->tabel()->result(),
				'content'		=> 'pengaduan/v_content',
				'ajax'	 		=> 'pengaduan/v_ajax'
			);
		}else{
			$data = array(
				'tabel' 		=> $this->pengaduan->tabel('tbl_pengaduan.id_pelanggan = '.$this->session->userdata('id').'')->result(),
				'content'		=> 'pengaduan/v_content',
				'ajax'	 		=> 'pengaduan/v_ajax'
			);
		}
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'pelanggan' 	=> $this->pelanggan->tabel()->result(),
			'type' 			=> $this->type->tabel()->result(),
			'idpelanggan'		=> $this->session->userdata('id'),
			'content'		=> 'pengaduan/v_add',
			'ajax'	 		=> 'pengaduan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(	
			'tgl_pengaduan'				=> $this->input->post('tgl_pengaduan'),
			'id_pelanggan'		  		=> $this->input->post('id_pelanggan'),
			'notiket_pengaduan'			=> random_string('alnum',10),
			'id_kategori'				=> $this->input->post('id_kategori'),
			'judul_pengaduan'		  	=> $this->input->post('judul_pengaduan'),
			'deskripsi_pengaduan'		=> $this->input->post('deskripsi_pengaduan'),
			'status_pengaduan'			=> 'Menunggu Konfirmasi'
		
		);

		$q = $this->pengaduan->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
		redirect(base_url('pengaduan'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> $this->pengaduan->detail($id)->row_array(),
			'pelanggan' 	=> $this->pelanggan->tabel()->result(),
			'type' 			=> $this->type->tabel()->result(),
			'kategori' 		=> $this->kategori->tabel()->result(),
			'content'		=> 'pengaduan/v_edit',
			'ajax'	 		=> 'pengaduan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_pengaduan'			=> $this->input->post('id_pengaduan'),
			'tgl_pengaduan'			=> $this->input->post('tgl_pengaduan'),
			'id_pelanggan'		  	=> $this->input->post('id_pelanggan'),
			'notiket_pengaduan'		=> $this->input->post('notiket_pengaduan'),
			'id_kategori'			=> $this->input->post('id_kategori'),
			'judul_pengaduan'		=> $this->input->post('judul_pengaduan'),
			'deskripsi_pengaduan'	=> $this->input->post('deskripsi_pengaduan'),
			'perbaikan_pengaduan'	=> $this->input->post('perbaikan_pengaduan')
			
			
		);

		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');	
		$this->pengaduan->update($data);
		redirect(base_url('pengaduan'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_pengaduan'	=> $id
		);
		
		$this->pengaduan->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('pengaduan'),'refresh');

	}

	public function konfirmasi($id)
	{

		$data = array(
			'id_pengaduan'			=> $id,
			'status_pengaduan'		=> 'Dikonfirmasi'
			
		);
		$this->pengaduan->update($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Data berhasil dikonfirmasi');	
		redirect(base_url('pengaduan'),'refresh');
	
	}

	public function selesai($id)
	{

		$data = array(
			'id_pengaduan'			=> $id,
			'status_pengaduan'		=> 'Selesai'
		);
		$this->pengaduan->update($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Terimakasih, Data pengaduan telah selesai');	
		redirect(base_url('pengaduan'),'refresh');
	
	}

	public function show($id)
	{
		$data = $this->pengaduan->detail($id)->row_array();

		echo '
			<div class="form-group">
				<table>
					<tbody>
						<tr>
							<td>No Tiket</td>
							<td>: '.$data['notiket_pengaduan'].'</td>
						</tr>
						<tr>
							<td>Date</td>
							<td>: '.$data['tgl_pengaduan'].'</td>
						</tr>
						<tr>
							<td>Name</td>
							<td>: '.$data['nama_pelanggan'].'</td>
						</tr>

						<tr>
							<td><hr></td>
							<td><hr></td>
						</tr>

						<tr>
							<td>Judul</td>
							<td>: '.$data['judul_pengaduan'].'</td>
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td>: '.$data['deskripsi_pengaduan'].'</td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td>: '.$data['nama_kategori'].'</td>
						</tr>
						<tr>
							<td>Type</td>
							<td>: '.$data['nama_type'].'</td>
						</tr>
						<tr>
							<td>Status</td>
							<td>: '.$data['status_pengaduan'].'</td>
						</tr>
						
						<tr>
							<td>Deskripsi</td>
							<td>: '.$data['perbaikan_pengaduan'].'</td>
						</tr>
						
					</tbody>
				</table>
			</div>
		';

	}



}
