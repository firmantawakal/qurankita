<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->model('m_daftar');
	}
	
	public function index(){
		
		$data['surah'] = $this->m_daftar->get_table('surah');
		
		$this->template->load('template','daftar/v_daftar_list',$data);
	}

	function get_autocomplete(){
        if (isset($_GET['term'])) {
			$res = preg_replace("/[^a-zA-Z\s]/", "", $_GET['term']);
            $result = $this->m_daftar->search($res);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->surah;
                echo json_encode($arr_result);
            }
		}
	}
	
	function search(){
        $title=$this->input->get('q');
		$res = preg_replace("/[^a-zA-Z\s]/", "", $title);
		$result=$this->m_daftar->search($res);
		foreach ($result as $row)
                $id = $row->id_surah;
				redirect('quran/detail/'.$id);
    }
}
?>