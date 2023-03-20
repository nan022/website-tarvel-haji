<?php

class m_setting extends CI_Model{
    function show_data_by_id_customer($id){
        $this->db->order_by("id_customer", "desc");
		return $this->db->select(array('*'))->from('customer')->join('user','user.id_user=customer.id_user')->where('user.id_user', $id)->get()->result_array();
	}

    function show_data_by_id_representatif($id){
        $this->db->order_by("id_representatif", "desc");
		return $this->db->select(array('*'))->from('representatif')->join('user','user.id_user=representatif.id_user')->where('user.id_user', $id)->get()->result_array();
	}

    function show_data_by_id_admin($id){
        $this->db->where('id_user',$id);
        return $this->db->get('user')->result_array();
	}

    function update_setting($data, $where, $table)
    {
        $this->db->where('id_user', $where);
        $this->db->update($table,$data);
    }

}
?>