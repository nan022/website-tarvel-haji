<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

    function __construct(){
		parent:: __construct();
		
		$this->load->model('m_login');
		$this->load->model('m_paket_travel');
		$this->load->model('m_transaksi');
		$this->load->library('session');
	}	
    

	function index()
	{
		$data['status'] = 'paket';
		$data['pemesanan'] = '';
		$this->load->view('assets/header',$data);
		$data['data_paket_travel'] = $this->m_paket_travel->show_data();
		$this->load->view('v_paket',$data);
		$this->load->view('assets/footer');
	}

	function pilih_paket()
	{
		if($this->session->userdata('status') != "login"){
			$this->session->set_flashdata('msg', '<script language="javascript">
			swal("Info","Maaf, silahkan login terlebih dahulu", "info");
			</script>');
			redirect('paket');
		}else{
			$all_data['pemesanan'] = 'show';
			$all_data['status'] = 'paket';
			$this->load->view('assets/header',$all_data);
	
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

			$all_data['data_paket_travel'] = $this->m_paket_travel->show_data();
			$this->session->set_userdata($all_data);
			$this->load->view('v_paket',$all_data);
			$this->load->view('assets/footer');
		}
	
	}

	function cek_kode_ref()
	{
		$a = $this->uri->segment('3');

		if($this->m_transaksi->cek_data_ref($a))  
		{  
			$data = true;
		}else{
			$data = false;
		}
		echo json_encode($data);
	}


	function add_pemesanan()
	{
		$a = $this->input->post('nama');
		$b = $this->input->post('nik');
		$c = $this->input->post('no_wa');
		$d = $this->input->post('kode_ref');
		$paket =  $this->input->post('id_paket'); 
		$seat =  $this->input->post('available_seat'); 
	
		$cek_ref = $this->m_transaksi->cek_ref_pes('representatif',$d)->row_array();
		if($d == 0 || $d == $cek_ref['kode_ref']){
			$total = count($b);
			for($i = 0; $i < $total - 1; $i++){
				$data = array(
					'id_user' => $this->session->userdata("id_user"),
					'nama' => $a[$i],
					'nik' => $b[$i],
					'no_wa' => $c[$i],
					'created_at' => date('Y-m-d H:i:s'),
				);
				$this->m_transaksi->add_data($data, 'customer_peserta');
			}

			$data2 = array(
				'id_user' => $this->session->userdata("id_user"),
				'id_paket' => $paket,
				'jumlah' => $total-1,
				'kode_ref' => $d,
				'status' => 1,
				'created_at' => date('Y-m-d H:i:s'),
			);

			$this->m_transaksi->add_data($data2, 'transaksi');
			$total_seat = $total - 1;
			$data3 = array(
				'available_seat' => $seat-$total_seat
			);
		
			$this->m_transaksi->proses_edit_data($data3, $paket, 'paket_travel');
			
			$this->session->set_flashdata('msg', '<script language="javascript">
			swal("Success","Data berhasil dipesan, silahkan di cek di dashboard", "success");
			</script>');
			redirect('paket');
		}else{
			$this->m_transaksi->proses_edit_data_transaksi($data2, $where, 'transaksi');
			$this->session->set_flashdata('msg', '<script language="javascript">
			swal("Warning","Gunakan kode referal yang valid", "warning");
			</script>');
			
			$id = base64_encode($paket);
			redirect('paket/pilih_paket/'.$id);
		}
	}

}
?>