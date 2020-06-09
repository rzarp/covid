<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panduan extends CI_Controller {

		public function index() 
		{
				$this->load->view('template/header');
				$this->load->view('panduan');
				$this->load->view('template/footer');
		}
}

