<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pertemuan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group('siswa')) {

            redirect('auth');
        }
        $this->load->helper(array('url','language'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');

    }

    public function index()
    {
        $this->load->model('pertemuan_model');
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $data = array(
            'pertemuan' => $this->pertemuan_model->pertemuan_siswa($id_user)
            );
        $this->load->view('siswa/pertemuan_view',$data);
        //var_dump($data['pertemuan']);
    }

    public function pilih($id, $id_mapel)
    {
        $this->load->model('jadwal_model');
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $data = array(
            'jadwal' => $this->jadwal_model->jadwal_murid($id),
            'id_mapel' => $id_mapel,
            );
        $this->load->view('siswa/jadwal_view',$data);
    }

    public function pilih_jadwal($id, $id_mapel)
    {
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $data = array(
            'murid' => $id_user,
            'status' => "taken",
            'id_mapel' => $id_mapel
            );
        $this->db->where('id_jadwal', $id);
        $this->db->update('jadwal_guru', $data);
        redirect('siswa/mapel');
    }

    public function validasi($id)
    {
        $data = array(
            'status' => 'done'
            );
        $this->db->where('id_pertemuan', $id);
        $this->db->update('pertemuan',$data);
        redirect('siswa/pertemuan');
    }

    public function materi($id, $mapel)
    {
        $this->load->model('pertemuan_model');
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $data = array(
            'materi' => $this->pertemuan_model->get_materi($id),
            'mapel' => $mapel,
            'id_pertemuan' => $id
            );
        $this->load->view('siswa/materi_view',$data);
    }

}
