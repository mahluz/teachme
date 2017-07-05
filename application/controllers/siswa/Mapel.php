<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mapel extends CI_Controller
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
        $this->load->model('mapel_model');
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $data = array(
            'mapel' => $this->mapel_model->get_kontrak($id_user),
            );
        $this->load->view('siswa/mapel_view',$data);
    }


}
