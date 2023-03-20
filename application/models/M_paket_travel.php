<?php

class M_paket_travel extends CI_Model{
  
    public function show_data()
    {
        return $this->db->get('paket_travel')->result_array();
        $this->db->order_by('id_paket', 'desc');
    }

    public function show_data_by_id($id)
    {
        $this->db->where('id_paket',$id);
        return $this->db->get('paket_travel')->result_array();
    }

    public function show_data_paket_pilih_by_id($id)
    {
        $this->db->where('id_paket', $id);
		return $this->db->get('paket_travel')->row_array();
    }

    function add_data($data,$table)
    {
        $this->db->insert($table,$data);
    }

    function proses_edit_data($data, $where, $table)
    {
        $this->db->where('id_paket', $where);
        $this->db->update($table,$data);
    }

    function m_del($id_de, $where, $table)
	{
		$this->db->where($where, $id_de);
		$this->db->delete($table);
	}

  
}
?>