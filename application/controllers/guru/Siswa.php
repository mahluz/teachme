<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group('guru')) {

            redirect('auth');
        }
        $this->load->helper(array('url','language'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
    }

    public function index()
    {
        $this->load->model('mapel_model');
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $data = array(
            'mapel' => $this->mapel_model->kontrak_guru($id_user),
            );
        $this->load->view('guru/siswa_view',$data);
    }

    public function approve($id)
    {
        $this->load->model('mapel_model');
        $tarif = $this->mapel_model->get_tarif($id);
        $tgl1 = date('Y-m-d');
        $tgl2 = date('Y-m-d', strtotime('+30 days', strtotime($tgl1))); 
        $data = array(
            'status' => "approved",
            );
        $this->db->where('id_kontrak', $id);
        $this->db->update('kontrak',$data);

        $tagihan = array(
                'id_kontrak' => $id,
                'jatuh_tempo' => $tgl2,
                'total_tagihan' => $tarif->tarif,
                'status' => "hutang"
            );
        $this->db->insert('tagihan',$data);
        redirect('guru/siswa');
    }

    public function decline($id)
    {
        $data = array(
            'status' => "decline",
            );
        $this->db->where('id_kontrak', $id);
        $this->db->update('kontrak',$data);

        $this->index();
    }

}
