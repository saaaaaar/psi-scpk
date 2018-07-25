<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posko extends CI_Model {
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

	function pembagianposko($where){
		$this->db->select('*')
				 ->from('posko p')
				 ->where($where)
				 ->join('pengguna pe','p.id_petugas = pe.id')
				 ->order_by('cf','desc');
		return $this->db->get();
	}

	function detailposko($where){
		$this->db->select('m.id_bencana, m.id_bantuan, bn.id, bn.id_donatur, bn.nama_bantuan, bn.jumlah, d.id, m.status_penerimaan, d.nama')
				 ->from('mendapatkan m')
				 ->join('bantuan bn','m.id_bantuan = bn.id')
				 ->join('donatur d','bn.id_donatur = d.id')
				 ->where($where);
		return $this->db->get();
	}
}
