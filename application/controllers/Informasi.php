<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	function __construct(){
 		parent::__construct();
 		$this->load->model('Admin');
 		$this->load->model('Chart');
 		$this->load->model('Posko');
 		$this->load->model('Bantuan');
	}

	function index(){
		//Apabila username benar dan password benar namun status tidak sama dengan login maka akan dikembalikan ke form login
		if($this->session->userdata('status') != "on"){
			redirect(base_url('LogsInti/masuk'));
		}else{
			if($this->session->userdata('akses') == 2){
				redirect(base_url('posko/tampil/'.$this->session->userdata('id')));
			}else{
				$this->load->view('admin/app-profile');
			}
		}
	}

	function tambah(){
		$config['upload_path']='./assets/img/';
		$config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1024*800';
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('val-number')){
			echo "gagal";
			$error = array('error' => $this->upload->display_errors()); var_dump($error);
		}else{
			$upload_data = $this->upload->data();
       		$input = array(
        		'judul'=>$this->input->post('val-username'),
        		'jenis_bencana'=>$this->input->post('val-select2'),
        		'deskripsi'=>$this->input->post('val-suggestions'),
        		'lokasi'=>$this->input->post('val-digits'),
        		'batas_pengumpulan'=>$this->input->post('val-website'),
        		'gambar'=> $upload_data['file_name'],
        		'laporan' => "Belum ada",
        		'pembuat'=>$this->session->userdata('id')
        );
        $this->Admin->input_data($input,'bencana');
		redirect('informasi/tampil');}	}

	function detail($id){
		//Informasi bencana
		$where = array('id_bencana' => $id);
        $data['info'] = $this->Admin->cek_data($where, 'bencana')->result_array();
        
        //Tabel informasi distribusi bantuan dan keadaan posko
        $data['posko'] = $this->Posko->pembagianposko($where)->result_array();
        
        //Tabel bantuan yang masuk
        $data['bantuan'] = $this->Bantuan->bantuanmasuk($where)->result_array();

        //DoughutChart
        $data['doughutchart'] = $this->Chart->doughutchart($where)->result_array();
        //BarChart
        $data['barchart'] = $this->Chart->barchart($where)->result_array();
        
        //Modal petugas aktif
        $kondisi = array(
        	'status' => FALSE, 
        	'kode_akses' => 2
        );
        $data['petugas'] = $this->Admin->cek_data($kondisi, 'pengguna')->result_array();
        $this->load->view('admin/detail-info',$data);
	}

	function tampil(){
		$data['info'] = $this->Admin->tampil('bencana')->result_array();
		$this->load->view('admin/table-info',$data);
	}

	function hapus($id){
		$where = array('id_bencana' => $id);
		$this->Admin->hapus_data($where,'bencana');
		redirect('informasi/tampil');
	}

	function edit($id){
		$where = array('id_bencana' => $id);
		$data['info'] = $this->Admin->cek_data($where, 'bencana')->result_array();	
		$this->load->view('admin/edit-info',$data);
	}

	function update($id){
		$where = array('id_bencana' => $id);
		$config['upload_path']='./assets/img/';
		$config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1024*800';
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('val-number')){
			echo "gagal";
			$error = array('error' => $this->upload->display_errors()); var_dump($error);
		}else{
			$upload_data = $this->upload->data();
       		$data = array(
        		'judul'=>$this->input->post('val-username'),
        		'jenis_bencana'=>$this->input->post('val-select2'),
        		'deskripsi'=>$this->input->post('val-suggestions'),
        		'lokasi'=>$this->input->post('val-digits'),
        		'batas_pengumpulan'=>$this->input->post('val-website'),
        		'gambar'=> $upload_data['file_name'],
        		'laporan' => "Belum ada",
        		'pembuat'=>$this->session->userdata('id')
        	);
       	}
		$this->Admin->update_data($where, $data, 'bencana');
		redirect('informasi/tampil');
	}

	function dashboard(){
		$where = array(
			'kode_akses' => 2 
		);
		$data['bantuanmasuk'] = $this->Bantuan->data()->result_array();
		$data['petugas'] = $this->Admin->cek_data($where, 'pengguna')->num_rows();
		$data['informasi'] = $this->Admin->tampil('bencana')->num_rows();
		$this->load->view('admin/dashboard', $data);
	}
}
