<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();

class Setting extends CI_Controller {

    function __construct(){
		parent:: __construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
		// unset($_SESSION['msg']);
		$this->load->model('m_setting');
	}	
    
	 function index()
	{
        $data['status'] = 'panel';
		$id = $this->session->userdata("id_user");
		$this->load->view('panel/header',$data);
		if($this->session->userdata("role") == 'admin') {
			$data['data_setting_by_id'] = $this->m_setting->show_data_by_id_admin($id);
		}else if($this->session->userdata("role") == 'customer'){
			$data['data_setting_by_id'] = $this->m_setting->show_data_by_id_customer($id);
		}else{
			$data['data_setting_by_id'] = $this->m_setting->show_data_by_id_representatif($id);
		}
        $this->load->view('v_setting',$data);
        $this->load->view('panel/footer');
	}

	function update_setting(){
		$id	= $this->input->post('id_user');
		$a	= $this->input->post('username');
		$b	= $this->input->post('password');

		$where = base64_decode($id);

		if($b == "***********"){
			$data = array(
				'username' => $a,
			);
		}else{
			$data = array(
				'username' => $a,
				'password' => base64_encode(md5($b)),
			);
		}
		$this->m_setting->update_setting($data, $where, 'user');
		$this->session->set_flashdata('msg','<script language="javascript">
		swal("Informasi","Data Akun berhasil di perbarui", "success");
		  </script>');
		redirect('setting');
	}
}
?>