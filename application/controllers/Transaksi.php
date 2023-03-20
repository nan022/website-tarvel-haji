<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();

class Transaksi extends CI_Controller {

    function __construct(){
		parent:: __construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
		// unset($_SESSION['msg']);
		$this->load->model('m_transaksi');
		$this->load->model('m_login');
		$this->load->model('m_paket_travel');
	}	
    
	 function index()
	{
		$data['status'] = 'transaksi';
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
        $this->load->view('v_transaksi',$data);
        $this->load->view('panel/footer');
	}

	 function pemesanan()
	{
        $data['status'] = 'transaksi';
		$this->load->view('panel/header',$data);
        $this->load->view('v_pemesanan');
        $this->load->view('panel/footer');
	}

	 function detail_pemesanan()
	{
        $data['status'] = 'transaksi';
		$id = $this->session->userdata("id_user");
		$this->load->view('panel/header',$data);
		if($this->session->userdata("role") == 'admin') {
			$data['detail_data_transaksi'] = $this->m_transaksi->show_data_detail_all();
		}else if($this->session->userdata("role") == 'customer'){
			$data['data_transaksi'] = $this->m_transaksi->show_data_all_by_id($id);
		}else{
			$ref = $this->m_login->cek_sesi($id);
			$kode_ref = $ref['kode_ref'];
			$data['data_transaksi'] = $this->m_transaksi->show_data_all_by_ref($kode_ref);
		}
		$data_uri = base64_decode($this->uri->segment('3'));
		$data['data_all_transaksi'] =  $this->m_transaksi->show_data_detail_all_by_id($data_uri);

		// Show Data Calon Customer
		$show_data =  $this->m_transaksi->show_data_detail_jamaah($data_uri);
		$id_customer = $show_data['id_user'];
		$data['data_all_calon_customer']=  $this->m_transaksi->show_calon_jamaah($id_customer);

		// Show Total Pemesanan
		$count_pesanan = $this->m_transaksi->jumlah_calon_jamaah($id_customer);
		$data['jumlah_pesanan'] = $count_pesanan * $show_data['harga'];
		
        $this->load->view('v_detail_pemesanan',$data);
        $this->load->view('panel/footer');
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
	
			$data3 = array(
				'available_seat' => $seat-$total
			);
			
			$this->m_transaksi->proses_edit_data_transaksi($data3, $paket, 'paket_travel');
		
			$this->session->set_flashdata('msg', '<script language="javascript">
			swal("Success","Data pemesanan berhasil dikirim", "success");
			</script>');
			redirect('transaksi');
		}else{
				$this->m_transaksi->proses_edit_data_transaksi($data2, $where, 'transaksi');
				$this->session->set_flashdata('msg', '<script language="javascript">
				swal("Warning","Gunakan kode referal yang valid", "warning");
				</script>');
				redirect('transaksi/pemesanan');
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

	// Edit Transaksi
	function update_transaksi_dp()
	{
		$a = $this->input->post('id_dp');
		$b = $this->input->post('dp');

		$where = base64_decode($a);
		$data2 = array(
			'dp' => $b,
		);
		$this->m_transaksi->proses_edit_data_transaksi($data2, $where, 'transaksi');
		$this->session->set_flashdata('msg', '<script language="javascript">
		swal("Success","Uang DP berhasil ditambahkan", "success");
		</script>');
		redirect('transaksi');
	}

	function update_transaksi_angsuran_1()
	{
		$a = $this->input->post('id_angsuran_1');
		$b = $this->input->post('angsuran_1');

		$where = base64_decode($a);
		$data2 = array(
			'angsuran_1' => $b,
		);
		$this->m_transaksi->proses_edit_data_transaksi($data2, $where, 'transaksi');
		$this->session->set_flashdata('msg', '<script language="javascript">
		swal("Success","Angsuran pertama berhasil ditambahkan", "success");
		</script>');
		redirect('transaksi');
	}

	function update_transaksi_angsuran_2()
	{
		$a = $this->input->post('id_angsuran_2');
		$b = $this->input->post('angsuran_2');

		$where = base64_decode($a);
		$data2 = array(
			'angsuran_2' => $b,
		);
		$this->m_transaksi->proses_edit_data_transaksi($data2, $where, 'transaksi');
		$this->session->set_flashdata('msg', '<script language="javascript">
		swal("Success","Angsuran kedua berhasil ditambahkan", "success");
		</script>');
		redirect('transaksi');
	}

	function update_transaksi_angsuran_3()
	{
		$a = $this->input->post('id_angsuran_3');
		$b = $this->input->post('angsuran_3');

		$where = base64_decode($a);
		$data2 = array(
			'angsuran_3' => $b,
		);
		$this->m_transaksi->proses_edit_data_transaksi($data2, $where, 'transaksi');
		$this->session->set_flashdata('msg', '<script language="javascript">
		swal("Success","Angsuran ketiga berhasil ditambahkan", "success");
		</script>');
		redirect('transaksi');
	}

	// Filtered Data
	function filter_data(){
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');

		$data['start_date'] = $this->input->post_get('start_date');
		$data['end_date'] = $this->input->post_get('end_date');
		
		$data['data'] = $this->m_transaksi->get_filtered_data($start_date, $end_date);
		$data['data_total'] = $this->m_transaksi->get_filtered_dataT($start_date, $end_date);
		// var_dump($data);
		// die();
		$status['status'] = 'report';
		$this->load->view('panel/header',$status);
		$this->load->view('v_report_select',$data);
        	$this->load->view('panel/footer');
	}

	// Filtered Data
	function filter_data_representatif(){
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$kode_ref = $this->input->post('kode_ref');

		$data['start_date'] = $this->input->post_get('start_date');
		$data['end_date'] = $this->input->post_get('end_date');
		$data['kode_ref'] = $this->input->post_get('kode_ref');
		
		$data['data'] = $this->m_transaksi->get_filtered_data_ref($start_date, $end_date, $kode_ref);
		$data['data_total'] = $this->m_transaksi->get_filtered_dataT_ref($start_date, $end_date, $kode_ref);
		$data['data_total_now'] = $this->m_transaksi->get_filtered_dataT_ref_now($start_date, $end_date, $kode_ref);
		$data['data_refe'] = $this->m_transaksi->show_data_ref_filter($kode_ref);
		$status['status'] = 'report_representatif';
		$this->load->view('panel/header',$status);
		$this->load->view('v_report_select',$data);
		$this->load->view('panel/footer');
	}

}
?>