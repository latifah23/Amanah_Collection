<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_pegawai extends CI_Model
{
	public $_table = "pegawai";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	public function tambahDataPegawai()
	{
		$post = $this->input->post();
		$data = array(
			"nama"         => $post['nama'],
			'level'        => $post["level"],
			'pekerjaan' 	=> $post["pekerjaan"],
		);

		$this->db->insert('pegawai', $data);
	}


	function hapus_pegawai($id_pegawai)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('id_pegawai', $id_pegawai);
		//DELETE FORM mytable
		$this->db->delete("pegawai");
	}

	public function getByid($id_pegawai)
	{
		return $this->db->get_where('pegawai', ['id_pegawai' => $id_pegawai])->row_array();
	}


	public function update_pegawai()
	{
		$post = $this->input->post();
		$data = array(

			"nama"         => $post['nama'],
			'level'        => $post["level"],
			'pekerjaan' 	=> $post["pekerjaan"],
		);
		$this->db->where('id_pegawai', $this->input->post('id_pegawai'));
		$this->db->update('pegawai', $data);
	}
	// <!-- <?php
	// $query = "SELECT MAX(`no`) as `kodepegawai` from pegawai";
	// $dariDB = $this->db->query($query)->row();
	// $data = $dariDB->kodepegawai;
	// // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
	// $nourut = substr($data, 3, 4);
	// $kodeBarangSekarang = $nourut + 1;
	// 
	public function kode()
	{

		//keterangan 
		//tbl_users di ganti sesuai dengan nama tabel costumer di database

		$this->db->select('RIGHT(pegawai.no,2) as kode_pegawai', FALSE);
		$this->db->order_by('kode_pegawai', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('pegawai');  //cek dulu apakah ada sudah ada kode di tabel.    
		if ($query->num_rows() <> 0) {
			//cek kode jika telah tersedia    
			$data = $query->row();
			$kode = intval($data->kode_pegawai) + 1;
		} else {
			$kode = 1;  //cek jika kode belum terdapat pada table
		}
		$tgl = date('dmY');
		$batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodetampil = "K" . $tgl . $batas;  //format kode
		return $kodetampil;
	}
}
