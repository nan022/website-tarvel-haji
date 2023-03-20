<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    function __construct(){
		parent:: __construct();
		
		$this->load->model('m_login');
		$this->load->library('session');
	}	
    
	function index()
	{
		$data['status'] = 'kontak'; 
		$this->load->view('assets/header',$data);
        $this->load->view('v_kontak');
        $this->load->view('assets/footer');
	}

}
?>