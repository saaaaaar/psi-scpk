<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Model {
    function detailposko($where){
		$this->db->select('k.id, k.kondisi, SUM(k.jumlah) as jumlah_korban, p.kode')
				 ->from('posko p')
				 ->where($where)
				 ->join('korban k','p.kode = k.posko')
				 ->group_by('k.kondisi');
		return $this->db->get();
	}

	function cek_data($where, $table){
		return $this->db->get_where($table, $where);}

	function doughutchart($where){
		$this->db->select('p.kode, p.id_bencana, p.id_petugas, SUM(p.selamat) as ks, SUM(p.luka) as kl, SUM(p.meninggal) as km')
				 ->from('posko p')
				 ->group_by('p.id_bencana')
				 ->where($where);
		return $this->db->get();
	}

	function barchart($where){
		$this->db->select('*')
				 ->from('posko p')
				 ->order_by('cf','desc')
				 ->where($where);
		return $this->db->get();
	}
}
