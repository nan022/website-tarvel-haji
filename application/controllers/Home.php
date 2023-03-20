<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
		parent:: __construct();
		$this->load->model('m_login');
		$this->load->model('m_paket_travel');
	}	
    
	 function index()
	{
		$data['status'] = 'home'; 
		$data['data_paket_travel'] = $this->m_paket_travel->show_data();
		$this->load->view('assets/header',$data);
        $this->load->view('v_home');
        $this->load->view('assets/footer');
	}

}
?>