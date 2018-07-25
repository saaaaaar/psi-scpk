<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {
	function tampil($table){
		return $this->db->get($table);}
 
	function cek_data($where, $table){
		return $this->db->get_where($table, $where);}
 
	function input_data($data, $table){
		$this->db->insert($table, $data);}
 
	function hapus_data($where, $table){
		$this->db->where($where)
				 ->delete($table);}
 
	function update_data($where, $data, $table){
		$this->db->where($where)
				 ->update($table, $data);}

	function petugasaktif($where){
		$this->db->select('*')
		         ->from('pengguna')
		         ->where($where)
		         ->join('posko','pengguna.id = posko.id_petugas');
		return $this->db->get();
	}

	function bantuanmasuk(){
		$this->db->select('*')
				 ->from('bencana')
				 ->join('mendapatkan','bencana.id_bencana = mendapatkan.id_bencana')
				 ->join('bantuan', 'mendapatkan.id_bantuan = bantuan.id')
				 ->join('donatur','bantuan.id_donatur = donatur.id')
				 ->where('mendapatkan.status_penerimaan',false);
		return $this->db->get();
	}

	function distribusi($where){
		$this->db->select('b.id_bencana, b.judul, m.id_bencana, m.id_bantuan, bn.id, bn.nama_bantuan, SUM(IF(bn.nama_bantuan != "uang", bn.jumlah, 0)) AS jumlah_barang, SUM(IF(bn.nama_bantuan = "uang", bn.jumlah, 0)) AS jumlah_uang')
				 ->from('bencana b')
				 ->join('mendapatkan m','b.id_bencana = m.id_bencana')
				 ->join('bantuan bn', 'm.id_bantuan = bn.id')
				 ->group_by('bn.nama_bantuan','b.id_bencana')
				 ->where($where);
		return $this->db->get();
	}

	function detailInfo(){
		$this->db->select('*')
				 ->from('bencana')
				 ->order_by('id_bencana', 'desc')
				 ->limit(1);
		return $this->db->get();
	}

	function donatur($where){
		$this->db->select('*')
				 ->from('bantuan')
				 ->where($where)
				 ->join('donatur','bantuan.id_donatur = donatur.id');
		return $this->db->get();
	}

	function tampilIndex(){
		$query = $this->db->query('SELECT * FROM bencana where batas_pengumpulan>current_date limit 4');
		return $query->result();
	}

	function search($keyword){
        $this->db->like('judul',$keyword)->limit(10);
        $query = $this->db->get('bencana');
        return $query->result();
    }

    function tampilInformasi(){
    	$query = $this->db->query('SELECT * FROM bencana where batas_pengumpulan<current_date limit 4');
		return $query->result();
	}

	function tampilBencana(){
		$query = $this->db->query('SELECT * FROM bencana where batas_pengumpulan>current_date');
		return $query->result();
	}

	function tampilBencana2(){
		$query = $this->db->query('SELECT * FROM bencana where batas_pengumpulan<current_date');
		return $query->result();
	}

}
