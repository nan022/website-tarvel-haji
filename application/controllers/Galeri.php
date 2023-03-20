<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    function __construct(){
		parent:: __construct();
		
		$this->load->model('m_login');
		$this->load->library('session');
	}	
    
	function index()
	{
		$data['status'] = 'galeri'; 
		$this->load->view('assets/header',$data);
        $this->load->view('v_galeri');
        $this->load->view('assets/footer');
	}

}
?>