<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_pegawai");
		$this->load->model('model_produk');
		$this->load->model("model_costumer");
		$this->load->model("model_pemesanan");

		$this->load->library('form_validation');
	}
	public function index()
	{

		$data['pemesanan'] = $this->model_pemesanan->getAll();
		$this->load->view('layouts/header');
		$this->load->view('pesanan/index', $data);
		$this->load->view('layouts/footer');
		// response_json($data);
	}

	public function tambah_pesanan()
	{
		$this->form_validation->set_rules('costumer_id', 'Costumer_Id', 'required');
		$this->form_validation->set_rules('pegawai_id', 'Pegawai_id', 'required');
		$this->form_validation->set_rules('durasi_pemesanan', 'Durasi_Pemesanan', 'required');
		$this->form_validation->set_rules('kode_order', 'Kode_Order', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('produk_id', 'produk_id', 'required');
		$this->form_validation->set_rules('jenis_kain', 'Jenis_Kain', 'required');
		$this->form_validation->set_rules('warna', 'Warna', 'required');
		$this->form_validation->set_rules('jumlah_pemesanan', 'Jumlah_Pemesanan', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('jenis_sablon', 'jenis_sablon', 'required');

		if ($this->form_validation->run() == false) {
			$data['kode_order']  = $this->model_pemesanan->cekkodeorder();
			$data['produk'] = $this->model_produk->getAll();
			$data['pegawai'] = $this->model_pegawai->getAll();
			$data['costumer'] = $this->model_costumer->getAll();
			$this->load->view('layouts/header');
			$this->load->view('pesanan/_form_tambah_pesanan', $data);
			$this->load->view('layouts/footer');
		} else {
			$this->model_pemesanan->tambahDataPemesanan();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('pesanan');
		}
	}
}
