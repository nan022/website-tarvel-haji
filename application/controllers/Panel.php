<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();

class Panel extends CI_Controller {

    function __construct(){
		parent:: __construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
		// unset($_SESSION['msg']);
		$this->load->model('m_login');
		$this->load->model('m_transaksi');
	}	
    
	 function index()
	{
		$data['status'] = 'panel';
		$id = $this->session->userdata("id_user");
		$this->load->view('panel/header',$data);
		if($this->session->userdata("role") == 'admin') {
			$data['jumlah_customer'] = $this->m_login->jumlah_customer();
			$data['jumlah_representatif'] = $this->m_login->jumlah_representatif();
			$data['jumlah_transaksi'] = $this->m_login->jumlah_transaksi();
			$data['data_transaksi'] = $this->m_transaksi->show_data_all();
		}else if($this->session->userdata("role") == 'customer'){
			$data['data_transaksi'] = $this->m_transaksi->show_data_all_by_id($id);
		}else{
			$ref = $this->m_login->cek_sesi($id);
			$kode_ref = $ref['kode_ref'];
			$data['data_transaksi'] = $this->m_transaksi->show_data_all_by_ref($kode_ref);
		}
        $this->load->view('v_panel',$data);
        $this->load->view('panel/footer');
	}

}
?>