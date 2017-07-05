<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapel_model extends CI_Model
{
	public function get_mapel($id)
	{
		$this->db->where('id_guru',$id);
		return $this->db->get('mapel')->result();
	}

	public function get_kontrak($id)
	{
		$this->db->join('mapel', 'mapel.id_mapel = kontrak.id_mapel');
		$this->db->join('guru', 'guru.id_user = mapel.id_guru');
		$this->db->where('id_siswa',$id);
		return $this->db->get('kontrak')->result();
	}

	public function kontrak_guru($id)
	{
		$this->db->select('*');
		$this->db->select('siswa.nama_awal as nama_awal_siswa');
		$this->db->select('siswa.nama_akhir as nama_akhir_siswa');
		
		$this->db->join('mapel', 'mapel.id_mapel = kontrak.id_mapel');
		$this->db->join('guru', 'guru.id_user = mapel.id_guru');
		$this->db->join('siswa', 'siswa.id_user = kontrak.id_siswa');
		$this->db->where('mapel.id_guru',$id);
		return $this->db->get('kontrak')->result();
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

	public function get_tarif($id_kontrak)
	{
		$this->db->select('tarif');
		$this->db->join('kontrak','kontrak.id_mapel = mapel.id_mapel');
		$this->db->where('kontrak.id_kontrak', $id_kontrak);
		return $this->db->get('mapel')->row();
	}
	
	function count_mapel_siswa($id)
	{
		$this->db->from('kontrak');
		$this->db->join('mapel', 'mapel.id_mapel = kontrak.id_mapel');
		$this->db->join('siswa', 'siswa.id_user = kontrak.id_siswa');
		$this->db->where('siswa.id_user',$id);
		$query = $this->db->get();
		return $query->num_rows();     
	}

	function count_guru_siswa($id)
	{
		$this->db->from('kontrak');
		$this->db->join('mapel', 'mapel.id_mapel = kontrak.id_mapel');
		$this->db->join('siswa', 'siswa.id_user = kontrak.id_siswa');
		$this->db->where('siswa.id_user',$id);
		$this->db->group_by('mapel.id_guru');
		$query = $this->db->get();
		return $query->num_rows();     
	}
	function count_pertemuan_siswa($id)
	{
		$this->db->from('pertemuan');
		$this->db->join('kontrak', 'kontrak.id_kontrak = pertemuan.id_kontrak');
		$this->db->where('kontrak.id_siswa',$id);
		$query = $this->db->get();
		return $query->num_rows();     
	}

	function count_tagihan_siswa($id)
	{
		$this->db->from('tagihan');
		$this->db->join('kontrak', 'kontrak.id_kontrak = tagihan.id_kontrak');
		$this->db->where('kontrak.id_siswa',$id);
		$query = $this->db->get();
		return $query->num_rows();     
	}
}
