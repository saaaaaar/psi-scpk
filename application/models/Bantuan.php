<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan extends CI_Model {
	function bantuanmasuk($where){
		$this->db->select('m.id_bantuan, m.id_bencana, m.status_penerimaan, b.id, b.nama_bantuan, SUM(b.jumlah) as jumlah')
				 ->from('mendapatkan m')
				 ->where($where)
				 ->join('bantuan b', 'm.id_bantuan = b.id')
				 ->group_by('b.nama_bantuan');
		return $this->db->get();
	}

	function data(){
		$this->db->select('SUM(IF(bn.nama_bantuan != "dana", bn.jumlah, 0)) AS jumlah_barang, SUM(IF(bn.nama_bantuan = "dana", bn.jumlah, 0)) AS jumlah_uang')
				 ->from('bantuan bn');
		return $this->db->get();
	}
}