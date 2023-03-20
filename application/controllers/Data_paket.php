<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();

class Data_paket extends CI_Controller {

    function __construct(){
		parent:: __construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
		// unset($_SESSION['msg']);
		$this->load->model('m_paket_travel');
	}	
    
	 function index()
	{
        $data['status'] = 'paket';
		$this->load->view('panel/header',$data);
		$data['data_paket_travel'] = $this->m_paket_travel->show_data();
        $this->load->view('v_data_paket',$data);
        $this->load->view('panel/footer');
	}
	  
	 function edit_data_paket()
	{
        $data['status'] = 'edit_paket';
		$id = base64_decode($this->uri->segment('3'));
		$this->load->view('panel/header',$data);
		$data['data_paket_travel'] = $this->m_paket_travel->show_data_by_id($id);
        $this->load->view('v_data_paket',$data);
        $this->load->view('panel/footer');
	}

	function add_paket(){
		$a	= $this->input->post('nama_paket');
		$b	= $this->input->post('jadwal');
		$c	= $this->input->post('durasi');
		$d	= $this->input->post('hotel');
		$e	= $this->input->post('total_seat');
		$f	= $this->input->post('available_seat');
		$g	= $this->input->post('berangkat');
		$h	= $this->input->post('maskapai');
		$i	= $this->input->post('harga');

		$this->upload->initialize([
			'upload_path' => 'assets/asset_paket',
			'allowed_types' => 'gif|jpg|png',
			'encrypt_name' => true,
		]);
		if ($this->upload->do_upload('poster')) {
			$uploaded = $this->upload->data();
			$poster = $uploaded['file_name'];
		}

		$data = array(
			'nama_paket' => $a,
			'jadwal' => $b,
			'durasi' => $c,
			'hotel' => $d,
			'total_seat' => $e,
			'available_seat' => $f,
			'berangkat' => $g,
			'maskapai' => $h,
			'harga' => $i,
			'poster' => $poster
		);

		$this->m_paket_travel->add_data($data,'paket_travel');
		$this->session->set_flashdata('msg', '<script language="javascript">
		swal("Success","Data berhasil ditambahkan", "success");
		</script>');
		redirect('data_paket');
	}

	function proses_edit_data_paket(){
		$id	= $this->input->post('id');
		$poster_id	= $this->input->post('poster_id');
		$a	= $this->input->post('nama_paket');
		$b	= $this->input->post('jadwal');
		$c	= $this->input->post('durasi');
		$d	= $this->input->post('hotel');
		$e	= $this->input->post('total_seat');
		$f	= $this->input->post('available_seat');
		$g	= $this->input->post('berangkat');
		$h	= $this->input->post('maskapai');
		$i	= $this->input->post('harga');

		$this->upload->initialize([
			'upload_path' => 'assets/asset_paket',
			'allowed_types' => 'gif|jpg|png',
			'encrypt_name' => true,
		]);
		if ($this->upload->do_upload('poster_update')) {
			$uploaded = $this->upload->data();
			$poster = $uploaded['file_name'];

			$data = array(
				'nama_paket' => $a,
				'jadwal' => $b,
				'durasi' => $c,
				'hotel' => $d,
				'total_seat' => $e,
				'available_seat' => $f,
				'berangkat' => $g,
				'maskapai' => $h,
				'harga' => $i,
				'poster' => $poster
			);
		
			$path = './assets/asset_paket/'.$poster_id;
			unlink($path);

		}else{
			$data = array(
				'nama_paket' => $a,
				'jadwal' => $b,
				'durasi' => $c,
				'hotel' => $d,
				'total_seat' => $e,
				'available_seat' => $f,
				'berangkat' => $g,
				'maskapai' => $h,
				'harga' => $i,
			);
		}

		$where = base64_decode($id);
		$this->m_paket_travel->proses_edit_data($data, $where, 'paket_travel');

		$this->session->set_flashdata('msg', '<script language="javascript">
		swal("Success","Data berhasil ditambahkan", "success");
		</script>');
		redirect('data_paket');
	}

	 function del_paket()
	{
		$a	= $this->input->post('id');
		$b	= $this->input->post('poster');
		$id_de = base64_decode($a);

		$path = './assets/asset_paket/'.$b;
		unlink($path);

		$this->m_paket_travel->m_del($id_de,'id_paket','paket_travel');
		$data = true;
		echo json_encode($data);
	}

	 function pilih_paket()
	{
		$id = base64_decode($this->uri->segment('3'));
		$show =  $this->m_paket_travel->show_data_paket_pilih_by_id($id);

		$all_data = array(
			'id_paket' => $show['id_paket'],
			'nama_paket' => $show['nama_paket'],
			'jadwal' => $show['jadwal'],
			'durasi' => $show['durasi'],
			'hotel' => $show['hotel'],
			'total_seat' => $show['total_seat'],
			'available_seat' => $show['available_seat'],
			'berangkat' => $show['berangkat'],
			'maskapai' => $show['maskapai'],
			'harga' => $show['harga'],
			'poster' => $show['poster']
		);

		$this->session->set_userdata($all_data);
		redirect('transaksi/pemesanan');
	
	}

}
?>