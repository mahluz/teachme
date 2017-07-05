<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mapel extends CI_Controller
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
        $this->load->model('mapel_model');
    }

    public function index()
    {   
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $data['mapel']=$this->mapel_model->get_mapel($id_user);
        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
        $this->load->view('guru/mapel_view',$data);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_mapel', 'Nama Mapel', 'trim|required');
        $this->form_validation->set_rules('tarif', 'Tarif', 'trim|required');
        $this->form_validation->set_rules('alokasi_waktu', 'Alokasi Waktu', 'trim|required');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'trim|required');
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);

        $data = array(
                'id_guru' => $id_user,
               'nama_mapel' => $this->input->post('nama_mapel',TRUE),
               'tarif' => $this->input->post('tarif',TRUE),
               'alokasi_waktu' => $this->input->post('alokasi_waktu',TRUE),
               'jenjang' => $this->input->post('jenjang',TRUE),
               );
        $this->db->insert('mapel',$data);
        $this->session->set_flashdata('message', 'Add Record Success');
        $this->index();

    }

    public function edit()
    {
        $this->form_validation->set_rules('id_mapel', 'ID Mapel', 'trim|required');
        $this->form_validation->set_rules('nama_mapel', 'Nama Mapel', 'trim|required');
        $this->form_validation->set_rules('tarif', 'Tarif', 'trim|required');
        $this->form_validation->set_rules('alokasi_waktu', 'Alokasi Waktu', 'trim|required');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'trim|required');
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $id_mapel = $this->input->post('id_mapel');
        $data = array(
               'nama_mapel' => $this->input->post('nama_mapel',TRUE),
               'tarif' => $this->input->post('tarif',TRUE),
               'alokasi_waktu' => $this->input->post('alokasi_waktu',TRUE),
               'jenjang' => $this->input->post('jenjang',TRUE),
               );
        $this->db->where('id_mapel',$id_mapel);
        $this->db->update('mapel',$data);
        $this->session->set_flashdata('message', 'Update Record Success');
        $this->index();
    }

}
