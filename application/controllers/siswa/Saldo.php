<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Saldo extends CI_Controller
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
        $this->load->model('saldo_model');
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $data = array(
            'saldo' => $this->saldo_model->saldo_siswa($id_user),
            );
        $this->load->view('siswa/saldo_view',$data);
    }

    public function tagihan()
    {
        $this->load->model('saldo_model');
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $saldo = $this->saldo_model->sum_saldo($id_user);
        $data = array(
            'tagihan' => $this->saldo_model->tagihan_siswa($id_user),
            'saldo' => $saldo->saldo_masuk
            );
        $this->load->view('siswa/tagihan_view',$data);
    }

     public function add()
    {
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $config['upload_path']          = './uploads/transfer';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        

        if ( !$this->upload->do_upload('bukti_transfer'))
        {
               echo $this->upload->display_errors();
        }
        else
        {
            $data = array(
                    'tanggal' => date('Y-m-d'),
                    'saldo_masuk' => $this->input->post('jumlah_saldo'),
                    'keterangan' => "proses",
                    'id_siswa' => $id_user,
                    'bukti_transfer' => $this->upload->data('bukti_transfer')
                );
            $this->db->insert('saldo_siswa',$data);
            $this->tagihan();
        }
    }
}
