<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_pemesanan extends CI_Model
{
	public $_table = "pemesanan";

	public function getAll()
	{
		$pemesananQuery = "SELECT `pemesanan` .*, 
		`costumer`.`nama` as nama_costumer, 
		`pegawai`.`nama` as nama_pegawai,
		`produk`.`nama` as nama_produk
		FROM `pemesanan` 
		JOIN `costumer` ON `pemesanan`.`id_costumer` = `costumer`. `id_costumer`
		JOIN `pegawai`  ON `pemesanan`.`id_pegawai` = `pegawai`. `id_pegawai`
		JOIN	`produk` ON `pemesanan`.`produk_id` = `produk`. `id_produk`
		ORDER BY `pemesanan`.`id` DESC";
		return $this->db->query($pemesananQuery)->result_array();
	}
	public function cekkodeorder()
	{
		//keterangan 
		//tbl_users di ganti sesuai dengan nama tabel costumer di database

		$this->db->select('RIGHT(pemesanan.kode_order,2) as kode_order', FALSE);
		$this->db->order_by('kode_order', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('pemesanan');  //cek dulu apakah ada sudah ada kode di tabel.    
		if ($query->num_rows() <> 0) {
			//cek kode jika telah tersedia    
			$data = $query->row();
			$kode = intval($data->kode_order) + 1;
		} else {
			$kode = 1;  //cek jika kode belum terdapat pada table
		}
		$tgl = date('dmY');
		$batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodetampil = "" . $tgl . $batas;  //format kode
		return $kodetampil;
	}

	public function tambahDataPemesanan()
	{
		$post = $this->input->post();
		$data = array(
			"id_pegawai" 			=> $post["id_pegawai"],
			"id_costumer" 			=> $post["id_costumer"],
			"durasi_pemesanan" 		=> $post["durasi_pemesanan"],
			"kode_order" 			=> $post["kode_order"],
			"status" 				=> $post["status"],
			"produk_id" 			=> $post["produk_id"],
			"jenis_kain" 			=> $post["jenis_kain"],
			"warna" 				=> $post["warna"],
			"jumlah_pemesanan" 		=> $post["jumlah_pemesanan"],
			"jenis_sablon"			=> $post["jenis_sablon"],
			"keterangan" 			=> $post["keterangan"]
		);


		$this->db->insert('pemesanan', $data);
	}


	public function hapus_pemesanan($id)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('id', $id);
		//DELETE FORM mytable
		$this->db->delete("pemesanan");
	}

	public function getByid($id)
	{
		return $this->db->get_where('pemesanan', ['id' => $id])->row_array();
	}
	public function getBykode($kode)
	{
		return $this->db->get_where('pemesanan', ['kode_order' => $kode])->row_array();
	}

	public function update_pemesanan()
	{
		$post = $this->input->post();
		$data = array(
			"id_pegawai" 			=> $post["id_pegawai"],
			"id_costumer" 			=> $post["id_costumer"],
			"durasi_pemesanan" 		=> $post["durasi_pemesanan"],
			"kode_order" 			=> $post["kode_order"],
			// "status" 				=> $post["status"],
			// "produk_id" 			=> $post["produk_id"],
			"jenis_kain" 			=> $post["jenis_kain"],
			"warna" 				=> $post["warna"],
			// "jumlah_pemesanan" 		=> $post["jumlah_pemesanan"],
			// "jenis_sablon"			=> $post["jenis_sablon"],
			"keterangan" 			=> $post["keterangan"]
		);
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('pemesanan', $data);
	}
}
