<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_graph extends CI_Model {

	function get_by_pertanyaan($id)
    {
        $this->db->select('*');    
        $this->db->select('count(a.id_jawaban) as jumlah_jawaban');    
        $this->db->from('hasil a');
        $this->db->join('pertanyaan b', 'a.id_pertanyaan = b.id_pertanyaan');
        $this->db->join('pertanyaan_jawaban c', 'a.id_jawaban = c.id_pertanyaan_jawaban');
        $this->db->group_by('a.id_jawaban');
        $this->db->where('a.id_pertanyaan', $id);
        return $this->db->get()->result();
	}
	
	function get_all_pertanyaan()
    {
        return $this->db->get('pertanyaan')->result();
    }
    
	function get_all_responden()
    {
        $this->db->select('count(distinct responden_ke) as jumlah_responden');    
        return $this->db->get('hasil')->row();
	}
	
	// insert data
    function insert($data)
    {
        $this->db->insert('graph', $data);
	}
	
	// update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
