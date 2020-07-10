<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graph extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_graph');
	}
	
	public function index(){
		$jum = count($this->m_graph->get_all_pertanyaan());
		for($i=1; $i <= $jum; $i++) {
			$data['graph'.$i] = $this->m_graph->get_by_pertanyaan($i);
		}
		// echo json_encode($data);die;
		$data['jumlah'] = $jum;
		$data['jumlah_responden'] = $this->m_graph->get_all_responden();
		$this->template->load('template','v_graph', $data);
	}
	public function print(){
		$data['pertanyaan'] = $this->m_graph->get_all_pertanyaan();
		$data['jumlah_responden'] = $this->m_graph->get_all_responden();

		$this->template->load('template','v_print', $data);
	}
}
?>