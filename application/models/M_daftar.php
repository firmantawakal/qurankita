<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_daftar extends CI_Model {

	function get_table($table)
    {
        return $this->db->get($table)->result();
    }

    function search($title){
        $this->db->like('pencarian', $title , 'both');
        $this->db->order_by('surah', 'ASC');
        $this->db->limit(10);
        return $this->db->get('surah')->result();
        // $sql = "SELECT * FROM 'surah' WHERE surah REGEXP '^[a-zA-Z.]+$'";
        // $query = $this->db->query($sql);
        // return $query->result();
    }
}
