<?php

class M_question extends CI_Model{

	function get_data($table){
		return $this->db->get($table)->result();
  }
  
	function get_responden(){
    $this->db->select('max(responden_ke) as responden');
		return $this->db->get('hasil')->row();
	}

  function get_all()
  {
      $sql = "SELECT * from 
              pertanyaan a, pertanyaan_jawaban b
              where a.id_pertanyaan = b.id_pertanyaan";

		return $this->db->query($sql)->result();
  }

  // insert data
  function insert($data)
  {
      $this->db->insert('hasil', $data);
  }
}

?>
