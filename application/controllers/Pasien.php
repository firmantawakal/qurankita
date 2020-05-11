<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pasien extends CI_Controller {

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
		$this->load->model('m_pasien');
	}
	
	public function index(){
		$data['pasien'] = $this->m_pasien->get_all();
		$data['label'] = $this->m_pasien->get_table('label');
		
		// echo json_encode($label_f1);die;
		$this->template->load('template','pasien/v_pasien_list',$data);
	}

	public function create()
	{
		$data = array(
				'title' => 'Tambah Pasien',
				'action' => site_url('pasien/create_action'),
		);
		$data['provinsi']=$this->m_city->provinsi();
		 $this->template->load('template','pasien/v_pasien_form',$data);
	}

	public function create_action()
	{
		$f6 = $this->input->post('form6',TRUE);
		$f6val = null;
		if($f6!=''){
			$f6val = implode(', ', $f6);
		};

	   $data = array(
			'f1_v1' => $this->input->post('form11',TRUE),
			'f1_v2' => $this->input->post('form12',TRUE),
			'f1_v3' => $this->input->post('form13',TRUE),
			'f1_v4' => $this->input->post('form14',TRUE),
			'f1_v5' => $this->input->post('form15',TRUE),
			'f1_v6' => $this->input->post('form16',TRUE),
			'f1_v7' => $this->input->post('form17',TRUE),
			'f1_v8' => $this->input->post('form18',TRUE),
			'f1_v9' => $this->input->post('form19',TRUE),
			'f1_v10' => $this->input->post('form110',TRUE),

			'f2_v1' => $this->input->post('form2_1',TRUE),
			'f2_v2' => $this->input->post('form2_2',TRUE),
			'f2_v3' => $this->input->post('form2_3',TRUE),
			'f2_v4' => $this->input->post('form2_4',TRUE),
			'f2_v5' => $this->input->post('form2_5',TRUE),
			'f2_v6' => $this->input->post('form2_6',TRUE),
			'f2_v7' => $this->input->post('form2_7',TRUE),
			'f2_v8' => $this->input->post('form2_8',TRUE),
			'f2_v9' => $this->input->post('form2_9',TRUE),
			'f2_v10' => $this->input->post('form2_10',TRUE),
			'f2_v11' => $this->input->post('form2_11',TRUE),
			'f2_v12' => $this->input->post('form2_12',TRUE),
			'f2_v13' => $this->input->post('form2_13',TRUE),
			'f2_v14' => $this->input->post('form2_14',TRUE),
			'f2_v15' => $this->input->post('form2_15',TRUE),
			'f2_v16' => $this->input->post('form2_16',TRUE),
			'f2_v17' => $this->input->post('form2_17',TRUE),

			'f3_v1' => $this->input->post('form3_1',TRUE),
			'f3_v2' => $this->input->post('form3_2',TRUE),
			'f3_v3' => $this->input->post('form3_3',TRUE),
			'f3_v4' => $this->input->post('form3_4',TRUE),
			'f3_v5' => $this->input->post('form3_5',TRUE),
			'f3_v6' => $this->input->post('form3_6',TRUE),

			'f4_v1' => $this->input->post('form4_1',TRUE),
			'f4_v2' => $this->input->post('form4_2',TRUE),
			'f4_v3' => $this->input->post('form4_3',TRUE),
			'f4_v4' => $this->input->post('form4_4',TRUE),
			'f4_v5' => $this->input->post('form4_5',TRUE),
			'f4_v6' => $this->input->post('form4_6',TRUE),
			'f4_v7' => $this->input->post('form4_7',TRUE),

			'f5_v1a' => $this->input->post('form5_1a',TRUE),
			'f5_v1b' => $this->input->post('form5_1b',TRUE),
			'f5_v2a' => $this->input->post('form5_2a',TRUE),
			'f5_v2b' => $this->input->post('form5_2b',TRUE),
			'f5_v3a' => $this->input->post('form5_3a',TRUE),
			'f5_v3b' => $this->input->post('form5_3b',TRUE),
			'f5_v4a' => $this->input->post('form5_4a',TRUE),
			'f5_v4b' => $this->input->post('form5_4b',TRUE),
			'f5_v5a' => $this->input->post('form5_5a',TRUE),
			'f5_v5b' => $this->input->post('form5_5b',TRUE),
			'f5_v6a' => $this->input->post('form5_6a',TRUE),
			'f5_v6b' => $this->input->post('form5_6b',TRUE),
			'f5_v7a' => $this->input->post('form5_7a',TRUE),
			'f5_v7b' => $this->input->post('form5_7b',TRUE),
			'f5_v8a' => $this->input->post('form5_8a',TRUE),
			'f5_v8b' => $this->input->post('form5_8b',TRUE),
			'f5_v9a' => $this->input->post('form5_9a',TRUE),
			'f5_v9b' => $this->input->post('form5_9b',TRUE),
			'f5_v10a' => $this->input->post('form5_10a',TRUE),
			'f5_v10b' => $this->input->post('form5_10b',TRUE),
			'f5_v11a' => $this->input->post('form5_11a',TRUE),
			'f5_v11b' => $this->input->post('form5_11b',TRUE),
			'f5_v12a' => $this->input->post('form5_12a',TRUE),
			'f5_v12b' => $this->input->post('form5_12b',TRUE),
			'f5_v13a' => $this->input->post('form5_13a',TRUE),
			'f5_v13b' => $this->input->post('form5_13b',TRUE),
			'f6' => $f6val
		);

	    // echo json_encode($data);die;

		$this->m_pasien->insert('pasien', $data);
		// $this->session->set_flashdata('message', '
		// 	<div class="alert alert-success alert-dismissable" id="success-alert">
		// 			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		// 			<h4><strong>Sukses</strong></h4>
		// 			<p>Data Berhasil Diubah!</p>
		// 	</div>');
			redirect(site_url('pasien'));
	}

	public function update($id)
    {
        $row = $this->m_user->get_by_id($id);
	
        if ($row) {
			$data = array(
				'title' => 'Edit user',
				'action' => site_url('user/update_action'),
				'username_hid' => $row->username,
				'username' => $row->username,
				'nama_user' => $row->nama_user,
			);
            $this->template->load('template','user/v_user_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('user'));
        }
    }

    public function update_action()
    {
		$username = $this->input->post('f_username_hid',TRUE);
        $password = $this->input->post('f_password');

		$data = array(
			'username' => $this->input->post('f_username',TRUE),
			'nama_user' => $this->input->post('f_nama_user',TRUE),
			'password' => md5($password)
		);
		
		$db_debug = $this->db->db_debug; //save setting
		$this->db->db_debug = FALSE; //disable debugging for queries

		$this->m_user->update($username, $data);
		$error = $this->db->error();

		if ($error['code'] == 0) {
			$this->session->set_flashdata('message', '
			<div class="alert alert-success alert-dismissable" id="success-alert">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><strong>Sukses</strong></h4>
					<p>Data Berhasil Diubah!</p>
			</div>');
			redirect(site_url('user'));
		}
		elseif ($error['code'] == 1062) {
				$this->session->set_flashdata('message', '
				<div class="alert alert-danger alert-dismissable" id="success-alert">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><strong>Error</strong></h4>
						<p>Data Gagal Disimpan. Username sudah ada!</p>
				</div>');
				redirect($_SERVER['HTTP_REFERER']);
		}
		else {
				$this->session->set_flashdata('message', '
				<div class="alert alert-danger alert-dismissable" id="success-alert">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><strong>Error</strong></h4>
						<p>Data Gagal Disimpan. '.$error['message'].'</p>
				</div>');
				redirect($_SERVER['HTTP_REFERER']);
		}
		$this->db->db_debug = $db_debug; //set it back
    }

    public function delete($id)
    {
        $row = $this->m_user->get_by_id($id);

        if ($row) {
            $this->m_user->delete($id);
            $this->session->set_flashdata('message', '
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4>    <i class="icon fa fa-check"></i> Sukses!</h4>Data Berhasil Dihapus
                </div>');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
			$this->session->set_flashdata('message', 'Record Not Found');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
?>