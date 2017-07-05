<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
	public function get_jadwal($id, $hari)
	{
		$this->db->where('id_guru',$id);
		$this->db->where('hari',$hari);
		return $this->db->get('jadwal_guru')->result();
	}

	public function jadwal_murid($id)
	{
		$this->db->where('id_guru',$id);
		$this->db->where('status', NULL );
		return $this->db->get('jadwal_guru')->result();
	}

	public function bykabupaten($id, $q)
	{
		$this->db->select('*');		
		$this->db->from('mapel');
		$this->db->join('guru','guru.id_user = mapel.id_guru');
		$this->db->join('kabupaten','kabupaten.id = guru.kota');
		$this->db->like('nama_mapel', $q);
		$this->db->where('kota',$id);
		return $this->db->get()->result();
	}
	public function bytarif($id, $q, $min, $max)
	{
		$this->db->select('*');		
		$this->db->from('mapel');
		$this->db->join('guru','guru.id_user = mapel.id_guru');
		$this->db->join('kabupaten','kabupaten.id = guru.kota');
		$this->db->like('nama_mapel', $q);
		$this->db->where('kota',$id);
		$this->db->where("tarif BETWEEN $min AND $max");
		return $this->db->get()->result();
	}
	public function byjenjang($id, $q, $jenjang)
	{
		$this->db->select('*');		
		$this->db->from('mapel');
		$this->db->join('guru','guru.id_user = mapel.id_guru');
		$this->db->join('kabupaten','kabupaten.id = guru.kota');
		$this->db->like('nama_mapel', $q);
		$this->db->where('kota',$id);
		$this->db->where('jenjang',$jenjang);
		return $this->db->get()->result();
	}
}
