<?php

class M_transaksi extends CI_Model{
    function add_data($data,$table)
    {
        $this->db->insert($table,$data);
    }

    function show_data_all(){
        $this->db->order_by("id_transaksi", "desc");
		return $this->db->select('transaksi.*, paket_travel.nama_paket, customer.nama nama_pemesan')->from('transaksi')->join('customer','customer.id_user=transaksi.id_user')->join('paket_travel','paket_travel.id_paket=transaksi.id_paket')->get()->result_array();
	}

    // Data Ref
    function show_data_ref(){
        $this->db->order_by("id_representatif", "desc");
		return $this->db->select('nama, kode_ref')->from('representatif')->get()->result_array();
	}
    // Data Ref Filtered
    function show_data_ref_filter($kode_ref){
        $this->db->order_by("id_representatif", "desc");
		return $this->db->select('nama')->from('representatif')->where('kode_ref = ', $kode_ref)->get()->result_array();
	}

    function show_data_all_by_id($id){
        $this->db->order_by("id_transaksi", "desc");
		return $this->db->select('transaksi.*, paket_travel.nama_paket, customer.nama nama_pemesan')->from('transaksi')->join('customer','customer.id_user=transaksi.id_user')->join('paket_travel','paket_travel.id_paket=transaksi.id_paket')->where('transaksi.id_user',$id)->get()->result_array();
	}

    function show_data_all_by_ref($kode_ref){
        $this->db->order_by("id_transaksi", "desc");
		return $this->db->select('transaksi.*, paket_travel.nama_paket, customer.nama nama_pemesan')->from('transaksi')->join('customer','customer.id_user=transaksi.id_user')->join('paket_travel','paket_travel.id_paket=transaksi.id_paket')->where('transaksi.kode_ref', $kode_ref)->get()->result_array();
	}

    // Data Edit
    function show_data_edit($id){
        $this->db->order_by("id_transaksi", "desc");
		return $this->db->select(array('*'))->from('transaksi')->join('user','user.id_user=transaksi.id_user')->where('user.id_user', $id)->get()->result_array();
	}

    // Detail
    function show_data_detail_all(){
        $this->db->order_by("id_transaksi", "desc");
		return $this->db->select('transaksi.*, paket_travel.nama_paket, customer.nama nama_pemesan')->from('transaksi')->join('customer','customer.id_user=transaksi.id_user')->join('paket_travel','paket_travel.id_paket=transaksi.id_paket')->get()->result_array();
	}

    function show_data_detail_all_by_id($id){
        $this->db->order_by("id_transaksi", "desc");
		return $this->db->select('transaksi.*, paket_travel.*, customer.nama nama_pemesan')->from('transaksi')->join('customer','customer.id_user=transaksi.id_user')->join('paket_travel','paket_travel.id_paket=transaksi.id_paket')->where('transaksi.id_transaksi', $id)->get()->result_array();
	}

    function show_data_detail_jamaah($id){
        $this->db->order_by("id_transaksi", "desc");
		return $this->db->select('transaksi.*, paket_travel.*, customer.nama nama_pemesan')->from('transaksi')->join('customer','customer.id_user=transaksi.id_user')->join('paket_travel','paket_travel.id_paket=transaksi.id_paket')->where('transaksi.id_transaksi', $id)->get()->row_array();
	}

    function show_calon_jamaah($id){
        $this->db->order_by("id_customer_peserta", "desc");
		return $this->db->select('customer_peserta.*')->from('customer_peserta')->join('customer','customer.id_user=customer_peserta.id_user')->where('customer_peserta.id_user', $id)->get()->result_array();
	}

    function proses_edit_data($data, $where, $table)
    {
        $this->db->where('id_paket', $where);
        $this->db->update($table,$data);
    }

    function jumlah_calon_jamaah($id)
    {
        $query = $this->db->query("SELECT DISTINCT id_customer_peserta FROM customer_peserta WHERE id_user = $id");
        $h = $query->num_rows();
        return $h;
    }

    function cek_data_ref($where)  
    {  
        $this->db->where('kode_ref', $where);  
        $query = $this->db->get("representatif");  
        if($query->num_rows() > 0)  
        {  
            return true;  
        }  
        else  
        {  
            return false;  
        }  
    } 

    function cek_ref_pes($table, $where){
        $this->db->where('kode_ref', $where);  
        return $this->db->get($table);  
    }
    
    // Edit Data
    function proses_edit_data_transaksi($data, $where, $table)
    {
        $this->db->where('id_transaksi', $where);
        $this->db->update($table,$data);
    }

    //Select Date Customer Peserta
    function get_filtered_data($start_date, $end_date){
        $this->db->order_by("id_transaksi", "desc");
        return $this->db->select('transaksi.*, paket_travel.nama_paket, customer.nama nama_pemesan')->from('transaksi')->join('customer','customer.id_user=transaksi.id_user')->join('paket_travel','paket_travel.id_paket=transaksi.id_paket')->where('transaksi.created_at >= ', $start_date)->where('transaksi.created_at <= ', $end_date)->get()->result_array();
    }
    function get_filtered_data_ref($start_date, $end_date, $kode_ref){
        $this->db->order_by("id_transaksi", "desc");
        return $this->db->select('transaksi.*, paket_travel.nama_paket, customer.nama nama_pemesan')->from('transaksi')->join('customer','customer.id_user=transaksi.id_user')->join('paket_travel','paket_travel.id_paket=transaksi.id_paket')->where('transaksi.created_at >= ', $start_date)->where('transaksi.created_at <= ', $end_date)->where('transaksi.kode_ref = ', $kode_ref)->get()->result_array();
    }

    function get_filtered_dataT($start_date, $end_date){
        $this->db->order_by("id_transaksi", "desc");
        return $this->db->select('transaksi.*, SUM(transaksi.jumlah) total, paket_travel.nama_paket, customer.nama nama_pemesan')->from('transaksi')->join('customer','customer.id_user=transaksi.id_user')->join('paket_travel','paket_travel.id_paket=transaksi.id_paket')->where('transaksi.created_at >= ', $start_date)->where('transaksi.created_at <= ', $end_date)->get()->result_array();
    }

    function get_filtered_dataT_ref($start_date, $end_date, $kode_ref){
        $this->db->order_by("id_transaksi", "desc");
        return $this->db->select('transaksi.*, SUM(transaksi.jumlah) total, paket_travel.nama_paket, customer.nama nama_pemesan')->from('transaksi')->join('customer','customer.id_user=transaksi.id_user')->join('paket_travel','paket_travel.id_paket=transaksi.id_paket')->where('transaksi.created_at >= ', $start_date)->where('transaksi.created_at <= ', $end_date)->where('transaksi.kode_ref = ', $kode_ref)->get()->result_array();
    }

    function get_filtered_dataT_ref_now($start_date, $end_date, $kode_ref){
        $this->db->order_by("id_transaksi", "desc");
        return $this->db->select('transaksi.*, SUM(transaksi.dp) total_dp, SUM(transaksi.angsuran_1) total_angsuran_1, SUM(transaksi.angsuran_2) total_angsuran_2, SUM(transaksi.angsuran_3) total_angsuran_3, paket_travel.nama_paket, customer.nama nama_pemesan')->from('transaksi')->join('customer','customer.id_user=transaksi.id_user')->join('paket_travel','paket_travel.id_paket=transaksi.id_paket')->where('transaksi.created_at >= ', $start_date)->where('transaksi.created_at <= ', $end_date)->where('transaksi.kode_ref = ', $kode_ref)->get()->result_array();
    }
}
?>