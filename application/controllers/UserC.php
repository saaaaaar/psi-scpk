<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserC extends CI_Controller {
	function __construct(){
 		parent::__construct();
 		$this->load->model('User');
 	}

 	//controller donatur
	function IndexDonatur($id_bencana){
		$data['donatur'] = $this->User->tampilDonatur()->result();
		$data['id'] = $this->User->tampilDonatur()->num_rows();
		$data['id_bencana'] = $id_bencana;
		$this->load->view('umum/pilihDonasi',$data);
	}

	//Memasukkan data donatur
	function input_dataD($id_bencana){
		$data = array(
			'nama' => $this->input->post('nama'),
			'no_hp' => $this->input->post('no_hp'),
			'email' =>  $this->input->post('email')
		);

		$this->User->input_data($data, 'donatur');
		redirect('UserC/IndexDonatur/'.$id_bencana);
	}

	//controller bantuan
	function indexBantuan($id){
		$where = array(
			'id' => $id );
		$data['donatur'] = $this->User->cek_data($where, 'donatur')->result();
		$data['bantuan'] = $this->User->cek_data($where,'bantuan')->result();
		$this->load->view('umum/DetailDonasi',$data);
	}

	function input_dataB($id_bencana){
		$nama_bantuan = $this->input->post('nama_bantuan');
		$jumlah = $this->input->post('jumlah');
		$id = $this->input->post('id');

		if($nama_bantuan == "dana"){ $kode = $this->input->post('kode');
		}else{ $kode = "-"; }

		$data = array(
			'nama_bantuan' => $nama_bantuan,
			'jumlah' => $jumlah,
			'id_donatur' => $id,
			'kode' => $kode
			);

		$last_id = $this->User->last_id($data,'bantuan');
		$data = array(
			'id_bencana' => $id_bencana,
			'id_bantuan' => $last_id,
			'status_penerimaan' => false,
			'status_pengiriman' => false
		);

		$this->User->input_data($data, 'mendapatkan');
		redirect('UserC/IndexBantuan/'.$last_id);
	}
}
