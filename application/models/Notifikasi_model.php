<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notifikasi_model extends CI_Model {

	function __construct() {
		parent::__construct(); 
	}

	function get_request() {

		$this->db->where('status','request');
		$this->db->from('kontrak');
		return  $this->db->get()->result();
		
	}

	function hapus_retur_pembelian($id) {
		$this->db->where('id_retur_pembelian',$id);
		$this->db->delete('retur_pembelian');
		return;
	}
}