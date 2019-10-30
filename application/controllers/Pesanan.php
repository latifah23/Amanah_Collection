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
		$this->form_validation->set_rules('id_costumer', 'Id_costumer', 'required');
		$this->form_validation->set_rules('id_pegawai', 'Id_pegawai', 'required');
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

	public function edit_pesanan($id)
	{
		$data['pesanan'] = $this->model_pemesanan->getByid($id);
		$questions_id = $data['pesanan']['id'];
		$queryGetquestion = "SELECT `pemesanan` .*, 
			`costumer`.`nama` as nama_costumer, 
			`pegawai`.`nama` as nama_pegawai,
			`produk`.`nama` as nama_produk
			FROM `pemesanan` 
			JOIN `costumer` ON `pemesanan`.`id_costumer` = `costumer`. `id_costumer`
			JOIN `pegawai`  ON `pemesanan`.`id_pegawai` = `pegawai`. `id_pegawai`
			JOIN	`produk` ON `pemesanan`.`produk_id` = `produk`. `id_produk`
			WHERE `pemesanan`.`id` = $questions_id
		";
		$query = $this->db->query($queryGetquestion)->row_array();
		$data['get_pesanan'] = $query;
		$this->form_validation->set_rules('pegawai', 'Pegawai', 'required');
		// response_json($data);
		$this->form_validation->set_rules('costumer', 'Costumer', 'required');
		$this->form_validation->set_rules('produk', 'Produk', 'required');
		$this->form_validation->set_rules('kode_order', 'Kode_order', 'required');
		$this->form_validation->set_rules('pegawai', 'Pegawai', 'required');
		$this->form_validation->set_rules('durasi_pemesanan', 'durasi_pemesanan', 'required');
		$this->form_validation->set_rules('status', 'status', 'status');


		if ($this->form_validation->run() ==  FALSE) {
			$data['produk'] = $this->model_produk->getAll();
			$data['pegawai'] = $this->model_pegawai->getAll();
			$data['costumer'] = $this->model_costumer->getAll();
			$this->load->view("layouts/header");
			$this->load->view('pesanan/edit_pesanan', $data);
			$this->load->view("layouts/footer");
		} else {
			$this->model_pemesanan->update_pesanan();
			$this->session->set_flashdata('flash', 'Diupdate');
			redirect('pesanan');
		}
	}

	function hapus_pesanan($id)
	{
		$this->model_pemesanan->hapus_pemesanan($id);
		$this->session->set_flashdata('flash', 'DiHapus');
		redirect('pesanan');
	}
	public function laporan_pdf($kode)
	{

		$data['pesanan'] = $this->model_pemesanan->getBykode($kode);
		$pesanan_id = $data['pesanan']['id'];
		$queryGetquestion = "SELECT `pemesanan` .*, 
			`costumer`.`nama` as nama_costumer, 
			`pegawai`.`nama` as nama_pegawai,
			`produk`.`nama` as nama_produk
			FROM `pemesanan` 
			JOIN `costumer` ON `pemesanan`.`id_costumer` = `costumer`. `id_costumer`
			JOIN `pegawai`  ON `pemesanan`.`id_pegawai` = `pegawai`. `id_pegawai`
			JOIN	`produk` ON `pemesanan`.`produk_id` = `produk`. `id_produk`
			WHERE `pemesanan`.`id` = $pesanan_id
		";
		$query = $this->db->query($queryGetquestion)->row_array();
		$data['get_pesanan'] = $query;

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-petanikode.pdf";
		$this->pdf->load_view('pesanan/laporan_pdf', $data);
	}
}
