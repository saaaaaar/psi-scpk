<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	function __construct(){
 		parent::__construct();
 		$this->load->model('Admin');

 		if($this->session->userdata('status') != "on"){
			redirect(base_url('LogsInti/masuk'));
		}
 	}

 	//Masuk pada halaman utama
	function index(){
		$kondisi = array(
			'status' => FALSE,
			'kode_akses !=' => 0
		);
		$data['pasif'] = $this->Admin->cek_data($kondisi,'pengguna')->result_array();
		$where = array(
			'kode_akses' => 2,
			'status' => TRUE
		);
		$data['aktif'] = $this->Admin->petugasaktif($where)->result_array();
		$this->load->view('admin/table-petugas', $data);
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->Admin->hapus_data($where,'pengguna');
		redirect('pengguna');
	}

	function tambah(){
		// $config['upload_path']='./assets/img/';
		// $config['allowed_types'] = 'jpg|jpeg|png';
  //       $config['max_size'] = '1024*800';
  //       $this->load->library('upload',$config);
  //       if(!$this->upload->do_upload('val-number')){
		// 	echo "gagal";
		// 	$error = array('error' => $this->upload->display_errors()); var_dump($error);
		// }else{
		// 	$upload_data = $this->upload->data();
		$akses = $this->input->post('jabatan');
		if($akses == 1){	$jabatan = "Petugas Admininstrasi";}
		else{	$jabatan = "Petugas Lapangan";}
       	$input = array(
        	'nama'=>$this->input->post('val-username'),
        	'jabatan'=>$jabatan,
        	'no_identitas'=>$this->input->post('val-website'),
        	'password'=>md5(substr($this->input->post('val-website'), 0, 8)),
        	'kode_akses'=> $akses,
        	'status' => FALSE
        );
        $this->Admin->input_data($input,'pengguna');
		redirect('pengguna');	
	}

	function updatepetugas($id){
		$where = array('id' => $id);
		$data = array(
			'status' => false
		);
		$this->Admin->update_data($where, $data, 'pengguna');
		redirect(base_url('logsinti/keluar'));
	}
}
