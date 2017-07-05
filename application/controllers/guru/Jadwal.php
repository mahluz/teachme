<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwal extends CI_Controller
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

        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $this->load->model('jadwal_model');
        $data = array(
                'senin' => $this->jadwal_model->get_jadwal($id_user,'senin'),
                'selasa' => $this->jadwal_model->get_jadwal($id_user,'selasa'),
                'rabu' => $this->jadwal_model->get_jadwal($id_user,'rabu'),
                'kamis' => $this->jadwal_model->get_jadwal($id_user,'kamis'),
                'jumat' => $this->jadwal_model->get_jadwal($id_user,'jumat'),
                'sabtu' => $this->jadwal_model->get_jadwal($id_user,'sabtu'),
                'minggu' => $this->jadwal_model->get_jadwal($id_user,'minggu')
            );
        $this->load->view('guru/jadwal_view', $data);
    }

    public function add()
    {
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $data = array(
            'id_guru' => $id_user,
            'hari' => $this->input->post('hari'),
            'deskripsi' => $this->input->post('deskripsi'),
            'jam' => $this->input->post('jam')
        );
        $this->db->insert('jadwal_guru', $data);
        $this->index();
    }

    public function edit()
    {
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $id_jadwal = $this->input->post('id_jadwal');
        $data = array(
            'hari' => $this->input->post('hari'),
            'deskripsi' => $this->input->post('deskripsi'),
            'jam' => $this->input->post('jam')
        );
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->update('jadwal_guru', $data);
        $this->index();
    }

    public function delete($id)
    {
        $this->db->where('id_jadwal', $id);
        $this->db->delete('jadwal_guru');

        $this->index();
    }
}
