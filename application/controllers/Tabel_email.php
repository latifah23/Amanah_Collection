<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabel_email extends CI_Controller
{

	public function index()
	{

		$this->load->view('layouts/header');
		$this->load->view('pesanan/tabel_email');
		$this->load->view('layouts/footer');
	}
}
