<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	function tampilDonatur(){
		return $this->db->get('donatur');}
 
	function last_id($data, $table){
		$this->db->insert($table, $data);
		return $this->db->insert_id();}

	function input_data($data, $table){
		$this->db->insert($table, $data);}

	function tampilBantuan(){
		return $this->db->get('bantuan');}

	function cek_data($where, $table){
		return $this->db->get_where($table, $where);}

	function tampilInformasi(){
		return $this->db->get('informasi');}

	function bantuan(){
		$this->db->select('*')
				 ->from('bantuan')
				 ->join('donatur','donatur.id = bantuan.id_donatur');
		return $this->db->get();
	}
}
