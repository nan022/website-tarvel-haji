<?php

class M_representatif extends CI_Model{
 
    function show_data(){
        $this->db->order_by("id_representatif", "desc");
		return $this->db->select(array('*'))->from('representatif')->join('user','user.id_user=representatif.id_user')->get()->result_array();
	}

    // function show_data_ref(){
    //     $this->db->order_by("id_representatif", "desc");
	// 	return $this->db->select(array('nama, kode_ref'))->from('representatif')->get()->result_array();
	// }



    function show_data_by_id($id){
        $this->db->order_by("id_representatif", "desc");
		return $this->db->select(array('*'))->from('representatif')->join('user','user.id_user=representatif.id_user')->where('user.id_user', $id)->get()->result_array();
	}

    function show_data_edit($id){
        $this->db->order_by("id_representatif", "desc");
		return $this->db->select(array('*'))->from('representatif')->join('user','user.id_user=representatif.id_user')->where('user.id_user', $id)->get()->result_array();
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