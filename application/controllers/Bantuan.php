<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan extends CI_Controller {
	function __construct(){
 		parent::__construct();
 		$this->load->model('Admin');
 		$this->load->model('Posko');


 		if($this->session->userdata('status') != "on"){
			redirect(base_url('LogsInti/masuk'));
		}
	}

	function pengiriman(){
		$where = array(
			'm.status_pengiriman' => false,
		);
		$data['distribusi'] = $this->Admin->distribusi($where)->result_array();
		$this->load->view('admin/table-pengiriman',$data);
	}

	function rincian(){
		$this->load->view('admin/table-posko');
	}

	function bantuanmasuk(){
		$data['bantuan'] = $this->Admin->bantuanmasuk()->result_array();
		$this->load->view('admin/table-bantuan-masuk', $data);
	}

	//verifikasi bantuan masuk
	function verifikasi($id){
		$where = array('id_bantuan' => $id);
		$data = array(
			'status_penerimaan' => true
		);
		$this->Admin->update_data($where, $data, 'mendapatkan');
		redirect('bantuan/bantuanmasuk');
	}

	function detail($id){
		$where = array(
			'm.id_bencana' => $id
		);
		$data['detailposko'] = $this->Posko->detailposko($where)->result_array();
		$this->load->view('admin/detail-bantuan', $data);
	}
}

