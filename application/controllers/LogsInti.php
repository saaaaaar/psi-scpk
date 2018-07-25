<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogsInti extends CI_Controller {
	function __construct(){
 		parent::__construct();
 		$this->load->model('Admin');
 		$this->load->model('Chart');
 	}

 	//Masuk pada halaman utama
	function index(){
		$data_session = array(
			'status' => "off"
		);
		$data['informasi'] = $this->Admin->tampilIndex('bencana');
		$data['informasis'] = $this->Admin->tampilInformasi('bencana');
		$this->session->set_userdata($data_session);
		$this->load->view('index',$data);}

	function bencana(){
		$data_session = array(
			'status' => "off"
		);
		$data['informasi'] = $this->Admin->tampilBencana('bencana');
		$this->session->set_userdata($data_session);
		$this->load->view('umum/bencana',$data);}

	function artikel($id){
		$where = array('id_bencana' => $id);
		$data['korban'] = $this->Chart->doughutchart($where)->result_array();
		$data['informasi'] = $this->Admin->cek_data($where,'bencana')->result_array();
		$this->load->view('umum/artikel',$data);}

	function masuk(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'no_identitas' => $username,
			'password' => md5($password)
		);

		$cek = $this->Admin->cek_data($where, 'pengguna');
		if($cek->num_rows() > 0){
			foreach ($cek->result_array() as $key) {
				if($key['kode_akses'] == 2 && $key['status'] != TRUE){
					echo "ANDA BELUM DI TUGASKAN DI POSKO MANAPUN <br>";
					echo "<a href='/psi-scpk/logsinti/masuk'><button>Kembali</button></a>";
				}else{
					$data_session = array(
						'id' => $key['id'],
						'identitas' => $key['no_identitas'],
						'nama' => $key['nama'],
						'jabatan' => $key['jabatan'],
						'akses' => $key['kode_akses'],
						'status' => "on"
					);
					$this->session->set_userdata($data_session);
					
					redirect(base_url('informasi'));
				}
			}
		}else{
			//Apabila tidak ditemukan username dan password terkait
			$this->load->view('login');
		}
	}

	function pindah($folder, $halaman){
		$this->load->view($folder.'/'. $halaman);
	}

	function keluar(){
		$this->session->sess_destroy();
		redirect('logsInti/masuk');
	}

	function search(){
        $keyword = $this->input->post('keyword');
        $data['results'] = $this->Admin->search($keyword);
        $this->load->view('umum/search',$data);
    }

    function bencana2(){
		$data_session = array(
			'status' => "off"
		);
		$data['informasis'] = $this->Admin->tampilBencana2('bencana');
		$this->session->set_userdata($data_session);
		$this->load->view('umum/bencana2',$data);
	}
}
