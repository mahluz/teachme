<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Saldo_model extends CI_Model
{
	public function saldo_guru($id)
	{
		$this->db->where('id_guru',$id);
		return $this->db->get('saldo_guru')->result();
	}

	public function tagihan_siswa($id)
	{
		$this->db->join('kontrak','kontrak.id_kontrak = tagihan.id_kontrak');
		$this->db->where('kontrak.id_siswa',$id);
		return $this->db->get('tagihan')->result();
	}

	public function sum_saldo($id)
	{
		$this->db->select_sum('saldo_masuk');
		$this->db->where('id_siswa',$id);
		return $this->db->get('saldo_siswa')->row();
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

}
