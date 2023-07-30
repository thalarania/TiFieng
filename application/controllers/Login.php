<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
		ob_start();
	}

	public function index()
	{

		$data = array(
			'title'	=> 'Login | SILAGAK'
		);
		$this->load->view('login', $data, FALSE);
	}

	public function login()
	{

			// $cekdata = 0;
			// if($cekdata == '1'){
			// 	echo 'Ada';
			// }else{
			// 	echo 'Tidak ada';
			// }

			$username    = $this->input->post('username');
			$password    = $this->input->post('password');

			$cekk = $this->auth->login_user($username,$password);
			
			if($cekk == 0){
				$this->session->set_flashdata('danger', '<i class="fa fa-warning"></i>
				Maaf, Username dan password tidak sesuai.');
				redirect(base_url('login'),'refresh');
			}else{
				redirect(base_url('user'),'refresh');
			}
			
	
	}
	

	public function logout()
	{
		$this->auth->logout();
	}
	

}

/* End of file Login.php */
/* Location: ./application/controllers/user/Login.php */