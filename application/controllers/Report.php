<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();

class Report extends CI_Controller {

    function __construct(){
		parent:: __construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
		// unset($_SESSION['msg']);
		$this->load->model('m_transaksi');
		$this->load->model('m_login');
	}	
    
	 function index()
	{
        $data['status'] = 'report';
		$id = $this->session->userdata("id_user");
		$this->load->view('panel/header',$data);
		if($this->session->userdata("role") == 'admin') {
			$data['data_transaksi'] = $this->m_transaksi->show_data_all();
		}else if($this->session->userdata("role") == 'customer'){
			$data['data_transaksi'] = $this->m_transaksi->show_data_all_by_id($id);
		}else{
			$ref = $this->m_login->cek_sesi($id);
			$kode_ref = $ref['kode_ref'];
			$data['data_transaksi'] = $this->m_transaksi->show_data_all_by_ref($kode_ref);
		}
        $this->load->view('v_report',$data);
        $this->load->view('panel/footer');
	}

	 function report_representatif()
	{
        $data['status'] = 'report_representatif';
		$id = $this->session->userdata("id_user");
		$this->load->view('panel/header',$data);
		if($this->session->userdata("role") == 'admin') {
			$data['data_transaksi'] = $this->m_transaksi->show_data_all();
			$data['data_ref'] = $this->m_transaksi->show_data_ref();
		}else if($this->session->userdata("role") == 'customer'){
			$data['data_transaksi'] = $this->m_transaksi->show_data_all_by_id($id);
		}else{
			$ref = $this->m_login->cek_sesi($id);
			$kode_ref = $ref['kode_ref'];
			$data['data_transaksi'] = $this->m_transaksi->show_data_all_by_ref($kode_ref);
		}
        $this->load->view('v_report',$data);
        $this->load->view('panel/footer');
	}


}
?>