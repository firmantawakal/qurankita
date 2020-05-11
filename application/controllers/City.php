<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class City extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// if ($this->session->userdata('status')<>'login') {
		// 	$this->session->set_flashdata('message', '
		// 	<div class="alert alert-danger" id="success-alert">
		// 		<p>Silahkan Login terlebih dahulu</p>
		// 	</div>');
		// 		 redirect(site_url('login'));
		// 	 }
		$this->load->model('m_city');
	}
	
	public function index(){
		$data['provinsi']=$this->m_city->provinsi();
		$this->template->load('template','city/v_city_list',$data);
	}

	function ambil_data()
	{

		$modul = $this->input->post('modul');
		$id = $this->input->post('id');

		if ($modul == "kabupaten") {
			echo $this->m_city->kabupaten($id);
		} else if ($modul == "kecamatan") { 
			echo $this->m_city->kecamatan($id);
		} else if ($modul == "kelurahan") { 
			echo $this->m_city->kelurahan($id);
		}
	}
}
?>