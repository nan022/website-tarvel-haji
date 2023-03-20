<?php

class M_login extends CI_Model{
    function cek_login($table, $where){
        return $this->db->get_where($table, $where);
    }

    function jumlah_customer()
    {
        $query = $this->db->query("SELECT DISTINCT id_customer FROM customer WHERE id_customer");
        $h = $query->num_rows();
        return $h;
    }

    function jumlah_representatif()
    {
        $query = $this->db->query("SELECT DISTINCT id_representatif FROM representatif WHERE id_representatif");
        $h = $query->num_rows();
        return $h;
    }

    function jumlah_transaksi()
    {
        $query = $this->db->query("SELECT DISTINCT id_transaksi FROM transaksi WHERE id_transaksi");
        $h = $query->num_rows();
        return $h;
    }
    
    function cek_sesi($id){
		$this->db->where('id_user',$id);
		return $this->db->get('representatif')->row_array();
	}

    function jumlah_masyarakat(){
        $query = $this->db->query('SELECT DISTINCT nik FROM masyarakat');
        $h = $query->num_rows();
        return $h;
    }

    function getItems($id){
		$this->db->where('nik',$id);
		return $this->db->get('masyarakat')->result();
	}
  
    function edit_user($id){
		return $this->db->select(array('*'))->from('user')->where('id=',$id)->get()->result_array();
	}

    function update_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

    function add_data($data,$table)
    {
        $this->db->insert($table,$data);
    }

    function is_email_available($email)  
    {  
        $this->db->where('email', $email);  
        $query = $this->db->get("user");  
        if($query->num_rows() > 0)  
        {  
            return true;  
        }  
        else  
        {  
            return false;  
        }  
    }  

    function is_username_available($username)  
    {  
        $this->db->where('username', $username);  
        $query = $this->db->get("user");  
        if($query->num_rows() > 0)  
        {  
            return true;  
        }  
        else  
        {  
            return false;  
        }  
    }  


}

?>