<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petunjuk extends CI_Controller {

		public function index() 
		{
				$this->load->view('template/header');
				$this->load->view('penggunaan');
				$this->load->view('template/footer');
		}
}

