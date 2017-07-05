<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile extends CI_Controller
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
        
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $user = $this->db->get_where('siswa',array('id_user'=>$id_user));
        foreach ($user->result() as $d)
        {
            if(isset($d->tanggal_lahir)){
             $res = explode("-", $d->tanggal_lahir);
             $changeDate = $res[1]."/".$res[2]."/".$res[0];
            }else{
             $changeDate = " ";
            }
            $data = array(
                'nama_awal' => $d->nama_awal, 
                'nama_akhir' => $d->nama_akhir,
                'tempat' => $d->tempat,
                'tanggal_lahir' => $d->tanggal_lahir,
                'agama' => $d->agama,
                'gender' => $d->gender,
                'tanggal_lahir' => $changeDate,
                'provinsi' => $d->provinsi,
                'kota' => $d->kota,
                'kecamatan' => $d->kecamatan,
                'desa' => $d->desa,
                'alamat_lengkap' => $d->alamat_lengkap,
                'jenjang' => $d->jenjang,
                'email' => ucfirst($user_login->email)
                ); 

        }
        $data['propinsi'] = $this->db->get('provinsi');
        $this->load->view('siswa/profile_view',$data);
    }

    public function simpan()
    {
        $this->_rules();
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        $user_login = $this->ion_auth->user()->row();
        $res = explode("/", $this->input->post('tanggal_lahir',TRUE));
        $changeDate = $res[2]."-".$res[0]."-".$res[1];

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            if ( !$this->upload->do_upload('photo'))
            {
                   echo $this->upload->display_errors();
            }
            else
            {
                $data = array(
                    'nama_awal' => $this->input->post('firstName',TRUE),
                    'nama_akhir' => $this->input->post('lastName',TRUE),
                    'tempat' => $this->input->post('tempat',TRUE),
                    'tanggal_lahir' => $changeDate,
                    'jenjang' => $this->input->post('jenjangSekolah',TRUE),
                    'agama' => $this->input->post('agama',TRUE),
                    'gender' => $this->input->post('gender',TRUE),
                    'alamat_lengkap' => $this->input->post('alamat_lengkap',TRUE),
                    'provinsi' => $this->input->post('propinsi',TRUE),
                    'kota' => $this->input->post('kabupaten',TRUE),
                    'kecamatan' => $this->input->post('kecamatan',TRUE),
                    'desa' => $this->input->post('desa',TRUE),
                    'photo' => $this->upload->data('file_name'),
                    );
                 $user_login = $this->ion_auth->user()->row();
                $id_user  =  ucfirst($user_login->id);
                $row = $this->db->get_where('siswa',array('id_user'=>$id_user));
                if ($row) {
                    $this->db->where('id_user',$id_user);
                    $this->db->update('siswa', $data);
                }
                $data_user=array(
                        'first_name' => $this->input->post('firstName',TRUE),
                        'last_name' => $this->input->post('lastName',TRUE),
                        'email' => $this->input->post('email',TRUE),
                    );
                $this->db->where('id',$id_user);
                $this->db->update('users',$data_user);
                
                $this->session->set_flashdata('message', 'Update Record Success');
                $this->index();
            }
        }
    }

    public function _rules() 
    {
        $this->form_validation->set_rules('firstName', 'Nama Awal', 'trim|required');
        $this->form_validation->set_rules('lastName', 'Nama Akhir', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('tempat', 'tempat', 'trim');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'trim');
        $this->form_validation->set_rules('jenjangSekolah', 'Jenjang Sekolah', 'trim|required');
        $this->form_validation->set_rules('agama', 'agama', 'trim');
        $this->form_validation->set_rules('gender', 'Gender', 'trim');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'trim');
        $this->form_validation->set_rules('propinsi', 'propinsi', 'trim');
        $this->form_validation->set_rules('kabupaten', 'kabupaten', 'trim');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim');
        $this->form_validation->set_rules('desa', 'desa', 'trim');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
