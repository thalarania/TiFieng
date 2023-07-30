<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pelanggan_model', 'pelanggan');
		$this->load->model('Pengaduan_model', 'pengaduan');
		$this->load->model('Kategori_model', 'kategori');
		$this->load->model('Type_model', 'type');
		$this->load->model('wilayah_model', 'wilayah');
		
	}

	public function index()
	{
		if($this->session->userdata('level') == 'Admin'){
			$data = array(
				'jumlah_pelanggan' 		=> $this->pelanggan->tabel()->num_rows(),
				'jumlah_type' 			=> $this->type->tabel()->num_rows(),
				'jumlah_kategori' 		=> $this->kategori->tabel()->num_rows(),
				'jumlah_wilayah' 		=> $this->wilayah->tabel()->num_rows(),

				'jumlah_pengaduan' 		=> $this->pengaduan->tabel()->num_rows(),
				'jumlah_waiting' 		=> $this->pengaduan->tabel('tbl_pengaduan.status_pengaduan = "Menunggu Konfirmasi"')->num_rows(),
				'jumlah_progress' 		=> $this->pengaduan->tabel('tbl_pengaduan.status_pengaduan = "Dikonfirmasi"')->num_rows(),
				'jumlah_solved' 		=> $this->pengaduan->tabel('tbl_pengaduan.status_pengaduan = "Selesai"')->num_rows(),

				'content'				=> 'dashboard/v_content',
				'ajax'	 				=> 'dashboard/v_ajax'
			);
		}else{
			$data = array(
				'jumlah_pelanggan' 		=> $this->pelanggan->tabel()->num_rows(),
				'jumlah_type' 			=> $this->type->tabel()->num_rows(),
				'jumlah_kategori' 		=> $this->kategori->tabel()->num_rows(),
				'jumlah_wilayah' 		=> $this->wilayah->tabel()->num_rows(),

				'jumlah_pengaduan' 		=> $this->pengaduan->tabel('tbl_pengaduan.id_pelanggan = '.$this->session->userdata('id').'')->num_rows(),
				'jumlah_waiting' 		=> $this->pengaduan->tabel('tbl_pengaduan.id_pelanggan = '.$this->session->userdata('id').' and tbl_pengaduan.status_pengaduan = "Menunggu Konfirmasi"')->num_rows(),
				'jumlah_progress' 		=> $this->pengaduan->tabel('tbl_pengaduan.id_pelanggan = '.$this->session->userdata('id').' and tbl_pengaduan.status_pengaduan = "Dikonfirmasi"')->num_rows(),
				'jumlah_solved' 		=> $this->pengaduan->tabel('tbl_pengaduan.id_pelanggan = '.$this->session->userdata('id').' and tbl_pengaduan.status_pengaduan = "Selesai"')->num_rows(),

				'content'				=> 'dashboard/v_content',
				'ajax'	 				=> 'dashboard/v_ajax'
			);
		}
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}





}
