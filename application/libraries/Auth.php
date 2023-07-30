<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth {

	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();

		$this->CI->load->model('User_model','user');
		$this->CI->load->model('Pelanggan_model','pelanggan');
	}

	public function login_user($username,$password)
	{
		$check_user = $this->CI->user->login($username,$password);
		$check_pelanggan = $this->CI->pelanggan->login($username,$password);

		if ($check_user)
		{
			$data = [
				'id'				=> $check_user->id_user,
				'nama'				=> $check_user->nama_user,
				'email'				=> $check_user->email_user,
				'level'				=> 'Admin',
				'login'				=> true
			];
			
			$this->CI->session->set_userdata($data);
			redirect(base_url('dashboard'),'refresh');

		}elseif($check_pelanggan){

			$data = [
				'id'				=> $check_pelanggan->id_pelanggan,
				'nama'				=> $check_pelanggan->nama_pelanggan,
				'email'				=> $check_pelanggan->email_pelanggan,
				'level'				=> 'Pelanggan',
				'login'				=> true
			];
			
			$this->CI->session->set_userdata($data);
			redirect(base_url('dashboard'),'refresh');
		}
		else{
			return 0;
		}
	}


	public function cek()
	{
		if ($this->CI->session->userdata('login') == '') {
			redirect(base_url('login'),'refresh');
		}
	}

	public function logout()
	{
		$data = array(
			'id',
			'nama',
			'login'
		);
		$this->CI->session->unset_userdata($data);
		$this->CI->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Anda berhasil logout!');
		redirect(base_url('login'),'refresh');
	}

}