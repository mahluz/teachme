<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Saldo extends CI_Controller
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
        $this->load->model('saldo_model');
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $data = array(
            'saldo' => $this->saldo_model->saldo_guru($id_user),
            );
        $this->load->view('guru/saldo_view',$data);
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
                    'saldo' => $this->input->post('jumlah_saldo'),
                    'id_guru' => $id_user,
                    'bukti_transfer' => $this->upload->data('bukti_transfer')
                );
            $this->db->insert('saldo_guru',$data);
            $this->index();
        }
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
