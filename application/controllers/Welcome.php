<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        if($this->ion_auth->logged_in()) {

            redirect('auth');
        }
        $this->load->helper(array('url','language'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
    }

	public function index()
	{
		$this->load->view('v_home');
	}

	public function about()
	{
		$this->load->view('v_about');
	}

	public function pricing()
	{
		$this->load->view('v_pricing');
	}

	public function search()
	{
		$q = $this->input->get('q');
		$this->db->select('*');		
		$this->db->from('mapel');
		$this->db->join('guru','guru.id_user = mapel.id_guru');
		$this->db->join('kabupaten','kabupaten.id = guru.kota');
		$this->db->like('nama_mapel', $q);
		$data['mapel'] = $this->db->get()->result();
		$data['propinsi'] = $this->db->get('provinsi');
		$this->load->view('v_search', $data);
	}	

	public function bykabupaten()
	{
		$this->load->model('mapel_model');
		$id = $this->input->get('id');
		$q = $this->input->get('q');

		$search = $this->mapel_model->bykabupaten($id, $q);
		foreach ($search as $key => $value) {             
            echo "<div class='col-xs-6 col-lg-4'>";
            echo  "<div class='well text-center'>";
            echo    "<img src=".base_url('uploads/'.$value->photo)." class='img-rounded'  height='200' width='200'>";
            echo    "<h3>".$value->nama_awal." ".$value->nama_akhir."</h3>";
            echo    "Mapel : ".$value->nama_mapel."<br/>";
            echo    "Jenjang : ".$value->jenjang."<br/>";
            echo    "Kota : ".$value->nama."<br/>";
            echo    "Tarif : ".$value->tarif."<br/>";
            echo    "<p><a class='btn btn-default' href='#' role='button'>View details &raquo;</a></p>";
            echo  "</div>";
            echo "</div><!--/.col-xs-6.col-lg-4-->";
            }
	}

	public function bytarif()
	{
		$this->load->model('mapel_model');
		$id = $this->input->get('id');
		$q = $this->input->get('q');
		$min = $this->input->get('min');
		$max = $this->input->get('max');

		$search = $this->mapel_model->bytarif($id, $q, $min, $max);
		foreach ($search as $key => $value) {             
            echo "<div class='col-xs-6 col-lg-4'>";
            echo  "<div class='well text-center'>";
            echo    "<img src=".base_url('uploads/'.$value->photo)." class='img-rounded'  height='200' width='200'>";
            echo    "<h3>".$value->nama_awal." ".$value->nama_akhir."</h3>";
            echo    "Mapel : ".$value->nama_mapel."<br/>";
            echo    "Jenjang : ".$value->jenjang."<br/>";
            echo    "Kota : ".$value->nama."<br/>";
            echo    "Tarif : ".$value->tarif."<br/>";
            echo    "<p><a class='btn btn-default' href='#' role='button'>View details &raquo;</a></p>";
            echo  "</div>";
            echo "</div><!--/.col-xs-6.col-lg-4-->";
            }
	}

	public function byjenjang()
	{
		$this->load->model('mapel_model');
		$id = $this->input->get('id');
		$q = $this->input->get('q');
		$jenjang = $this->input->get('jjg');

		$search = $this->mapel_model->byjenjang($id, $q, $jenjang);
		foreach ($search as $key => $value) {             
            echo "<div class='col-xs-6 col-lg-4'>";
            echo  "<div class='well text-center'>";
            echo    "<img src=".base_url('uploads/'.$value->photo)." class='img-rounded'  height='200' width='200'>";
            echo    "<h3>".$value->nama_awal." ".$value->nama_akhir."</h3>";
            echo    "Mapel : ".$value->nama_mapel."<br/>";
            echo    "Jenjang : ".$value->jenjang."<br/>";
            echo    "Kota : ".$value->nama."<br/>";
            echo    "Tarif : ".$value->tarif."<br/>";
            echo    "<p><a class='btn btn-default' href='#' role='button'>View details &raquo;</a></p>";
            echo  "</div>";
            echo "</div><!--/.col-xs-6.col-lg-4-->";
            }
	}
}
