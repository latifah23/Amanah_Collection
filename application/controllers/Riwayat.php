<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{

	public function _construct()
	{
          parent ::_construct();
          
          $this->load->library('form_validation');
     
     }
     public function index()
     {

		$this->load->view('layouts/header');
		$this->load->view('riwayat/index');
		$this->load->view('layouts/footer');
	}
}
