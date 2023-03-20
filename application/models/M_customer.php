<?php

class M_customer extends CI_Model{
    function show_data(){
        $this->db->order_by("id_customer", "desc");
		return $this->db->select(array('*'))->from('customer')->join('user','user.id_user=customer.id_user')->where_not_in('user.role', 'admin')->get()->result_array();
	}

    function show_data_by_id($id){
        $this->db->order_by("id_customer", "desc");
		return $this->db->select(array('*'))->from('customer')->join('user','user.id_user=customer.id_user')->where('user.id_user', $id)->get()->result_array();
	}

    function show_data_edit($id){
        $this->db->order_by("id_customer", "desc");
		return $this->db->select(array('*'))->from('customer')->join('user','user.id_user=customer.id_user')->where('user.id_user', $id)->get()->result_array();
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
    
    function add_data($data,$table)
    {
        $this->db->insert($table,$data);
    }

    function proses_edit_data($data, $where, $table)
    {
        $this->db->where('id_user', $where);
        $this->db->update($table,$data);
    }

    function m_del($id_de, $where, $table)
	{
		$this->db->where($where, $id_de);
		$this->db->delete($table);
	}

  
}
?>