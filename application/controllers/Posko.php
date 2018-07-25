<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posko extends CI_Controller {
	function __construct(){
 		parent::__construct();
 		$this->load->model('Admin');
 		$this->load->model('CertaintyFactor');

 		//Apabila username benar dan password benar namun status tidak sama dengan login maka akan dikembalikan ke form login
		if($this->session->userdata('status') != "on"){
			redirect(base_url('LogsInti/masuk'));
		}
	}

	function tambah($id){
		//Menambahkan posko kosong tanpa jumlah pengungsi dan kondisi
		$data = array(
			'kode' => $this->input->post('kode_posko'),
			'id_petugas' => $this->input->post('petugas'),
			'id_bencana' => $id,
			'status_bantuan' => false
		);
		$this->Admin->input_data($data, 'posko');

		//Update petugas yang semula tidak aktif menjadi aktif/bertugas
		$update = array('status' => TRUE);
		$where = array('id' => $this->input->post('petugas'));
		$this->Admin->update_data($where, $update, 'pengguna');
		redirect(base_url('Informasi/detail/'.$id));
	}

	//Belum Berfungsi
	// function tambahkorban($id){
	// 	$data = array(
	// 		'kode' => $id,

	// 		if($this->input->post('kondisi') == "Selamat"){
	// 			'selamat' => $this->input->post('jumlah'),
	// 		}elseif($this->input->post('kondisi') == "Luka-Luka"){
	// 			'luka' => $this->input->post('jumlah'),
	// 		}else{
	// 			'meninggal' => $this->input->post('jumlah'),
	// 		}

	// 		'cf' =>  max($p1,$p2,$p3),
	// 		'id_petugas' => $this->session->userdata('id')
	// 	);
	// 	$where = array('kode' => $this->input->post('kode'));
	// 	$this->Admin->update_data($where, $data, 'posko');
	// 	redirect('posko/tampil/'.$this->session->userdata('id'));
	// }

	//Setiap Petugas
	function tampil($id){
 		$this->load->model('Chart');
		$where = array('id_petugas' => $id);
		$cek = $this->Admin->cek_data($where, 'posko');
		if($cek->num_rows() > 0){
			foreach ($cek->result_array() as $key) {
				$data_session = array(
					'posko' => $key['kode'],
					'bencana' => $key['id_bencana'],
					'status_bantuan' => $key['status_bantuan']
				);
				$this->session->set_userdata($data_session);
			}
		}

		$where = array(	'kode' => $this->session->userdata('posko'));
		$data['chart'] = $this->Chart->cek_data($where, 'posko')->result_array();
		$this->load->view('admin/app-profile', $data);
	}

	function updateposko($id){
		//Update jumlah korban dan menambahkan kondisi (perhitungan cf)
		$where = array( 'id_bencana' => $id );
		$cek = $this->Admin->cek_data($where, 'bencana');
		if($cek->num_rows() > 0){
			foreach ($cek->result_array() as $key) {
				$kondisi = $key['tingkat_bencana'];
				$id = $key['id_bencana'];
			}
		}

		$selamat = $this->input->post('selamat');
		$luka = $this->input->post('luka');
		$meninggal = $this->input->post('meninggal');

		//Korban Selamat
		if($selamat > 300){
			$md1ks = 0.25;	$md2ks = 0.25;	$md3ks = 0.25;
			$mb1ks = 0.25;	$mb2ks = 0.5;	$mb3ks = 0.75;
		}elseif($selamat > 150){
			$md1ks = 0.25;	$md2ks = 0.25;	$md3ks = 0.25;
			$mb1ks = 0.5; 	$mb2ks = 0.75;	$mb3ks = 0.5;
		}elseif($selamat > 0){
			$md1ks = 0.25;	$md2ks = 0.25;	$md3ks = 0.25;
			$mb1ks = 0.75;	$mb2ks = 0.5; 	$mb3ks = 0.25;}

		//Korban Luka - Luka
		if($luka > 300){
			$md1kl = 0.25;	$md2kl = 0.25;	$md3kl = 0.25;
			$mb1kl = 0.75;	$mb2kl = 0.5; 	$mb3kl = 0.25;
		}elseif($luka > 150){
			$md1kl = 0.25;	$md2kl = 0.25;	$md3kl = 0.25;
			$mb1kl = 0.5;	$mb2kl = 0.75; 	$mb3kl = 0.5;
		}elseif($luka > 0){
			$md1kl = 0.25;	$md2kl = 0.25;	$md3kl = 0.25;
			$mb1kl = 0.25;	$mb2kl = 0.25; 	$mb3kl = 0.75;}

		//Korban Meninggal
		if($meninggal > 300){
			$md1km = 0.25;	$md2km = 0.25;	$md3km = 0.25;
			$mb1km = 0.75;	$mb2km = 0.25; 	$mb3km = 0.75;
		}elseif($meninggal > 150){
			$md1km = 0.25;	$md2km = 0.25;	$md3km = 0.25;
			$mb1km = 0.5;	$mb2km = 0.75; 	$mb3km = 0.5;
		}elseif($meninggal > 0){
			$md1km = 0.25;	$md2km = 0.25;	$md3km = 0.25;
			$mb1km = 0.25;	$mb2km = 0.5; 	$mb3km = 0.25;}

		//Kondisi Bencana berdasarkan tingkatan(input)
		if($kondisi == "Berat"){
			$mb1tb = 0.75;	$mb2tb = 0.5;	$mb3tb = 0.25;
			$md1tb = 0.25;	$md2tb = 0.25;	$md3tb = 0.25;
		}elseif($kondisi == "Sedang") {
			$mb1tb = 0.5;	$mb2tb = 0.75;	$mb3tb = 0.25;
			$md1tb = 0.25;	$md2tb = 0.25;	$md3tb = 0.25;
		}elseif($kondisi == "Ringan"){
			$mb1tb = 0.25;	$mb2tb = 0.5;	$mb3tb = 0.75;
			$md1tb = 0.25;	$md2tb = 0.25;	$md3tb = 0.25;}

		$p1 = $this->CertaintyFactor->hitung($mb1ks,$md1ks,$mb1kl,$md1kl,$mb1km,$md1km,$mb1tb,$md1tb);
		$p2 = $this->CertaintyFactor->hitung($mb2ks,$md2ks,$mb2kl,$md2kl,$mb2km,$md2km,$mb2tb,$md2tb);
		$p3 = $this->CertaintyFactor->hitung($mb3ks,$md3ks,$mb3kl,$md3kl,$mb3km,$md3km,$mb3tb,$md3tb);

		switch (max($p1, $p2, $p3)) {
			case $p1:
				$prioritas = "Pertama";
				break;
			case $p2:
				$prioritas = "Kedua";
				break;
			case $p3:
				$prioritas = "Ketiga";
				break;
		}

		$data = array(
			'kode' => $this->input->post('kode'),
			'selamat' => $this->input->post('selamat'),
			'luka' => $this->input->post('luka'),
			'meninggal' => $this->input->post('meninggal'),
			'cf' =>  max($p1,$p2,$p3),
			'prioritas' => $prioritas,
			'id_petugas' => $this->input->post('petugas'),
			'id_bencana' => $id,
			'status_bantuan' => false
		);
		$where = array('kode' => $this->input->post('kode'));
		$this->Admin->update_data($where, $data, 'posko');
		redirect('posko/tampil/'.$this->session->userdata('id'));
	}

	function hapuskorban($id){
		$where = array(
			'id' => $id
		);
		$this->Admin->hapus_data($where, 'korban');
		redirect('posko/tampil/'.$this->session->userdata('id'));
	}

	function updatebantuan($id){
		$where = array( 'kode' => $id);
		$data = array(
			'kode' => $id,
			'status_bantuan' => true
		);
		$this->Admin->update_data($where, $data, 'posko');
		redirect('posko/tampil/'.$this->session->userdata('id'));
	}
}
