<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();

class Login extends CI_Controller {

    function __construct(){
		parent:: __construct();
		$this->load->model('m_login');
		$this->load->library('session');
	}	

	function index()
	{
		$this->load->view('login/header');
		$this->load->view('v_login');
		$this->load->view('login/footer');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$where = array(
			'username' => $username,
			'password' => base64_encode(md5($password))
		);

		$cek = $this->m_login->cek_login('user',$where)->row_array();
		if($username == $cek['username'] && base64_encode(md5($password)) == $cek['password']){
			$data_session = array(
				'id_user' => $cek['id_user'],
				'nama' => $cek['nama'],
				'email' => $cek['email'],
				'role' => $cek['role'],
				'status' => "login"
				);
			$this->session->set_flashdata('success_login','Action Completed');
			$this->session->set_userdata($data_session);
			redirect(base_url("home"));
		}else{
			$this->session->set_flashdata('error','Action Not Completed');
			redirect(base_url('login'));
		}
	}

	function aksi_daftar(){
		$a	= $this->input->post('nama');
		$b	= $this->input->post('email');
		$c	= $this->input->post('wa');
		$d	= $this->input->post('username');
		$e	= $this->input->post('pass');
		$f	= $this->input->post('pilihan');

		if($this->m_login->is_email_available($b))  
		{  
			$this->session->set_flashdata('msg','<script language="javascript">
					swal("Informasi","Email Sudah terdaftar. Silahkan menggunakan email yang lain", "warning");
					  </script>');
			redirect(base_url('login'));
		}else if($this->m_login->is_username_available($d))  
		{  
			$this->session->set_flashdata('msg','<script language="javascript">
					swal("Informasi","Username Sudah terdaftar. Silahkan menggunakan username yang lain", "warning");
					  </script>');
			redirect(base_url('login'));
		}  
		else  
		{  
			$data = array(
				'nama' => $a,
				'email' => $b,
				'username' => $d,
				'password' => base64_encode(md5($e)),
				'tos' => 1,
				'role' => $f
			);
			$this->m_login->add_data($data,'user');

			$data_session = array(
				'id_user' => $this->db->insert_id(),
				'nama' => $a,
				'email' => $b,
				'role' => $f,
				'status' => "login"
			);
		
			// Kondisi
			if($f == "representatif"){
				$data2 = array(
					'id_user' => $this->db->insert_id(),
					'email' => $b,
					'nama' => $a,
					'nm_wa' => $c,
				);
				$this->m_login->add_data($data2,'representatif');
			}else if($f == "customer"){
				$data2 = array(
					'id_user' => $this->db->insert_id(),
					'email' => $b,
					'nama' => $a,
					'nm_wa' => $c,
				);
				$this->m_login->add_data($data2,'customer');
			}
		
			$this->session->set_flashdata('success_daftar','Action Completed');
			$this->session->set_userdata($data_session);
			redirect(base_url("home"));
		}  
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}
}

?>