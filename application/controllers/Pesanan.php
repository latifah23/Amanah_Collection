<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_pegawai");
		$this->load->model("model_costumer");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('pesanan/index');
		$this->load->view('layouts/footer');
	}

	public function tambah_pesanan()
	{
		$data['pegawai'] = $this->model_pegawai->getAll();
		$data['costumer'] = $this->model_costumer->getAll();
		$this->load->view('layouts/header');
		$this->load->view('pesanan/_form_tambah_pesanan', $data);
		$this->load->view('layouts/footer');
	}

	public function form_pdl()
	{
		$this->load->view('layouts/header');
		$this->load->view('pesanan/form_pdl');
		$this->load->view('layouts/footer');
	}

	public function form_polo()
	{
		$this->load->view('layouts/header');
		$this->load->view('pesanan/form_polo');
		$this->load->view('layouts/footer');
	}
}
