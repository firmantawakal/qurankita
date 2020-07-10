<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_daftar extends CI_Model {

	function get_table($table)
    {
        return $this->db->get($table)->result();
    }
    
    
}
