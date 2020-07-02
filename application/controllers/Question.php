<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_question');
	}
	
	public function index() {
		$data = array(
			'action' => site_url('question/create_action'),
		);
		
		$data['res'] = $this->m_question->get_responden();
		$data['question'] = $this->m_question->get_data('pertanyaan');
		$this->template->load('template','question/v_question_form',$data);
	}

	public function create_action()
	{
		$sess = $this->session->userdata('status');
		
		if ($sess == 'submited') {
			$this->session->set_flashdata('msg', 'error');
			redirect(site_url('question'));
		}else{
			$res = $this->m_question->get_responden()->responden;
			if ($res==null) {
				$res=1;
			}else{
				$res+=1;
			}
			
			$jum = $this->input->post('jumlah');
			
			for ($i=1; $i <= $jum; $i++) { 
				$data = array(
					'responden_ke' => $res,
					'id_pertanyaan' => $i,
					'id_jawaban' => $this->input->post('pertanyaan'.$i,TRUE)
				);
				$this->m_question->insert($data);
			}
			
			$db_debug = $this->db->db_debug; //save setting
			$this->db->db_debug = FALSE; //disable debugging for queries

			$error = $this->db->error();

			if ($error['code'] == 0) {
				$this->session->set_flashdata('message', '
				<div class="alert alert-success alert-dismissable" id="success-alert">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><strong>Sukses</strong></h4>
						<p>Data berhasil ditambah!</p>
				</div>');
				session_start();
				$this->session->set_userdata('status', 'submited');
				$this->session->set_flashdata('msg', 'success');

				redirect(site_url('question'));
			}
		}
	}
}
?>