<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_pegawai");
		$this->load->library('form_validation');
	}

	public function index()
	{
		// $data['kode'] = $this->model_pegawai->kode();
		$data['pegawai'] = $this->model_pegawai->getAll();
		$this->load->view("layouts/header", $data);
		$this->load->view('pegawai/index', $data);
		$this->load->view("layouts/footer");
	}

	public function tambah_pegawai()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_pegawai->tambahDataPegawai();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('pegawai');
		}
	}
	public function edit_pegawai($id)
	{
		$data['pegawai'] = $this->model_pegawai->getByid($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('pegawai/_form_edit_pegawai', $data);
			$this->load->view("layouts/footer");
		} else {
			$this->model_pegawai->update_pegawai();
			$this->session->set_flashdata('flash', 'Diupdate');
			redirect('pegawai');
		}
	}

	function hapus_pegawai($id_pegawai)
	{
		$this->model_pegawai->hapus_pegawai($id_pegawai);
		$this->session->set_flashdata('flash', 'DiHapus');
		redirect("pegawai");
	}
}
