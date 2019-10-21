<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Costumer extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_costumer");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['costumer'] = $this->model_costumer->getAll();
		$this->load->view('layouts/header');
		$this->load->view('costumer/index', $data);
		$this->load->view('layouts/footer');
	}
	public function tambah_costumer()
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('notelp', 'Notelp', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_costumer->tambahDataCostumer();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('costumer');
		}
	}
	public function edit_costumer($id)
	{
		$data['costumer'] = $this->model_costumer->getByid($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('notelp', 'Notelp', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('costumer/_form_edit_costumer', $data);
			$this->load->view("layouts/footer");
		} else {
			$this->model_costumer->update_costumer();
			$this->session->set_flashdata('flash', 'Diupdate');
			redirect('costumer');
		}
	}

	function hapus_costumer($id)
	{
		$this->model_costumer->hapus_costumer($id);
		$this->session->set_flashdata('flash', 'DiHapus');
		redirect('costumer');
	}
}
