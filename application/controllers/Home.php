<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}
	public function getDataIndonesia() {
		$response = file_get_contents('https://api.kawalcorona.com/indonesia');
		return json_decode($response,true);
	}
	public function getDataProvinsi() {
		$response = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
		return json_decode($response,true);
	}
	
	public function download(){				
		force_download('assets/aksi.apk',NULL);
	}	
	public function index() 
	{
		
		$data = array (
			'indonesia' => $this->getDataIndonesia(),
			'provinsi' 	=> $this->getDataProvinsi());
			$this->load->view('template/header');
			$this->load->view('home',$data);
			$this->load->view('template/footer');
	}
}
