<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pertemuan extends CI_Controller
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
        $this->load->model('pertemuan_model');
        $user_login = $this->ion_auth->user()->row();
        $id_user  =  ucfirst($user_login->id);
        $data = array(
            'pertemuan' => $this->pertemuan_model->get_pertemuan($id_user),
            'siswa' => $this->pertemuan_model->get_siswa($id_user)
            );
        $this->load->view('guru/pertemuan_view',$data);
        //var_dump($data['pertemuan']);
    }

    public function add()
    {
        $res = explode("/", $this->input->post('tanggal_pertemuan',TRUE));
        $changeDate = $res[2]."-".$res[0]."-".$res[1];
        $data = array(
            'id_kontrak'=>$this->input->post('nama_siswa'),
            'tanggal_pertemuan'=>$changeDate,
            'status' => "created"
            );

        $this->db->insert('pertemuan',$data);
        redirect('guru/pertemuan');
    }
    public function edit()
    {
        $id_pertemuan = $this->input->post('pertemuan');
        $res = explode("/", $this->input->post('tanggal_pertemuan',TRUE));
        $changeDate = $res[2]."-".$res[0]."-".$res[1];
        $data = array(
            'id_kontrak'=>$this->input->post('nama_siswa'),
            'tanggal_pertemuan'=>$changeDate,
            'status' => "created"
            );
        $this->db->where('id_pertemuan',$id_pertemuan);
        $this->db->update('pertemuan',$data);
        redirect('guru/pertemuan');
    }
    public function delete($id)
    {
        $this->db->where('id_pertemuan',$id);
        $this->db->delete('pertemuan');
        redirect('guru/pertemuan');
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
        $this->load->view('guru/materi_view',$data);
        //var_dump($data['pertemuan']);
    }

    public function add_materi($id, $mapel)
    {
        $config['upload_path']          = './uploads/materi';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        

        if ( !$this->upload->do_upload('file_materi'))
        {
               echo $this->upload->display_errors();
        }
        else
        {
            $data = array(
                    'id_pertemuan' => $id,
                    'nama_materi' => $this->input->post('deskripsi'),
                    'url_materi' => $this->upload->data('file_name')
                );
            $this->db->insert('materi',$data);
            $this->materi($id, $mapel);
        }
    }

    public function delete_materi($id_materi, $id_pertemuan, $mapel)
    {
        $this->db->where('id_materi',$id_materi);
        $this->db->delete('materi');
        redirect('guru/pertemuan/materi/'.$id_pertemuan.'/'.$mapel);
    }

}
