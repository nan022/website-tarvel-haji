<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();

class Customer extends CI_Controller {

    function __construct(){
		parent:: __construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
		// unset($_SESSION['msg']);
		$this->load->model('m_customer');
	}	
    
	 function index()
	{
        $data['status'] = 'customer';
		$this->load->view('panel/header',$data);
		$id = $this->session->userdata("id_user");
		if($this->session->userdata("role") == 'admin') {
			$data['data_customer'] = $this->m_customer->show_data();
		}else{
			$data['data_customer_by_id'] = $this->m_customer->show_data_by_id($id);
		}
        $this->load->view('v_customer',$data);
        $this->load->view('panel/footer');
	}

	function add_customer(){
		$a	= $this->input->post('nama');
		$b	= $this->input->post('email');
		$c	= $this->input->post('username');
		$d	= $this->input->post('password');
		$e	= $this->input->post('tgl_lahir');
		$f	= $this->input->post('nm_wa');

		if($this->m_customer->is_email_available($b))  
		{  
			$data = false;
			echo json_encode($data);
		}  
		else  
		{  
			$data = array(
				'nama' => $a,
				'email' => $b,
				'username' => $c,
				'password' => base64_encode(md5($d)),
				'tos' => 1,
				'role' => 'customer',
			);
			$this->m_customer->add_data($data,'user');

			$data2 = array(
				'id_user' => $this->db->insert_id(),
				'nama' => $a,
				'email' => $b,
				'tgl_lahir' => $e,
				'nm_wa' => $f,
			);
			$this->m_customer->add_data($data2,'customer');
			$data = true;
			echo json_encode($data);
		}
	}

	function proses_edit_customer(){
		$a	= $this->input->post('id_user');
		$b	= $this->input->post('nama');
		$c	= $this->input->post('email');
		$d	= $this->input->post('username');
		$e	= $this->input->post('password');
		$f	= $this->input->post('tgl_lahir');
		$g	= $this->input->post('nm_wa');

		if($e == "*********"){
			$where = base64_decode($a);
			$data = array(
				'nama' => $b,
				'email' => $c,
				'username' => $d,
			);
			$this->m_customer->proses_edit_data($data, $where, 'user');
		} 
		else  
		{  
			$where = base64_decode($a);
			$data = array(
				'nama' => $b,
				'email' => $c,
				'username' => $d,
				'password' => base64_encode(md5($d)),
			);
			$this->m_customer->proses_edit_data($data, $where, 'user');
		}
		$data2 = array(
			'nama' => $b,
			'email' => $c,
			'tgl_lahir' => $f,
			'nm_wa' => $g,
		);
		$this->m_customer->proses_edit_data($data2, $where, 'customer');
		
		$data = true;
		echo json_encode($data);
	}

	 function del_customer($id)
	{
		$id_de = base64_decode($id);

		$this->m_customer->m_del($id_de,'id_user','user');
		$this->m_customer->m_del($id_de,'id_user','customer');
		$this->session->set_flashdata('msg', '<script language="javascript">
        swal("Success","Data telah berhasil di delete", "success");
          </script>');
		redirect('customer');
	}

	 function edit_customer(){
		$id = base64_decode($this->uri->segment('3'));
		$data = $this->m_customer->show_data_edit($id);
		echo json_encode($data);
	}

}
?>