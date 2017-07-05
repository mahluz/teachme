<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pertemuan_model extends CI_Model
{
	public function get_pertemuan($id)
	{
		/*$query = $this->db->query("SELECT '*' FROM (pertemuan as pt INNER JOIN kontrak as kt ON pt.id_kontrak = kt.id_kontrak) INNER JOIN siswa as sw ON sw.id_user = kt.id_siswa INNER JOIN mapel as mp ON mp.id_mapel = kt.id_mapel INNER JOIN guru as gr ON gr.id_user = mp.id_guru");*/
		$this->db->select('*');
		$this->db->select('siswa.nama_awal as nama_awal_siswa');
		$this->db->select('siswa.nama_akhir as nama_akhir_siswa');
		$this->db->select('mapel.jenjang as jenjang_mapel');
		$this->db->select('pertemuan.status as status_pertemuan');
		$this->db->select('pertemuan.id_kontrak as kontrak_id');
		$this->db->select('pertemuan.id_pertemuan');
		$this->db->from('pertemuan');
		$this->db->join('kontrak', 'pertemuan.id_kontrak = kontrak.id_kontrak');
		$this->db->join('siswa', 'siswa.id_user = kontrak.id_siswa');
		$this->db->join('mapel', 'mapel.id_mapel = kontrak.id_mapel');
		$this->db->join('guru', 'guru.id_user = mapel.id_guru');
		$this->db->where('guru.id_user',$id);

		return $this->db->get()->result();
	}

	public function pertemuan_siswa($id)
	{
		$this->db->select('*');
		$this->db->select('guru.nama_awal as nama_awal_guru');
		$this->db->select('guru.nama_akhir as nama_akhir_guru');
		$this->db->select('mapel.jenjang as jenjang_mapel');
		$this->db->select('pertemuan.status as status_pertemuan');
		$this->db->select('pertemuan.id_kontrak as kontrak_id');
		$this->db->select('pertemuan.id_pertemuan');
		$this->db->from('pertemuan');
		$this->db->join('kontrak', 'pertemuan.id_kontrak = kontrak.id_kontrak');
		$this->db->join('siswa', 'siswa.id_user = kontrak.id_siswa');
		$this->db->join('mapel', 'mapel.id_mapel = kontrak.id_mapel');
		$this->db->join('guru', 'guru.id_user = mapel.id_guru');
		$this->db->where('siswa.id_user',$id);

		return $this->db->get()->result();
	}

	public function get_siswa($id)
	{
		$this->db->where('id_guru',$id);
		$this->db->where('status', 'approved' );
		$this->db->from('kontrak');
		$this->db->join('mapel', 'mapel.id_mapel = kontrak.id_mapel');
		$this->db->join('siswa', 'siswa.id_user = kontrak.id_siswa');
 
		return $this->db->get()->result();
	}

	public function get_materi($id)
	{
		$this->db->where('id_pertemuan',$id);
		return $this->db->get('materi')->result();
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
