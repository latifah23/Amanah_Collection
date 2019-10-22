<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_pemesanan extends CI_Model
{
	public $_table = "pemesanan";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	public function tambahDataCostumer()
	{
		$post = $this->input->post();
		$data = array(
			"nama"         => $post['nama'],
			'alamat'       => $post["alamat"],
			'notelp' 		=> $post["notelp"],
			'email'		=> $post["email"],
		);

		$this->db->insert('costumer', $data);
	}


	function hapus_costumer($id)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('id', $id);
		//DELETE FORM mytable
		$this->db->delete("costumer");
	}

	public function getByid($id)
	{
		return $this->db->get_where('costumer', ['id' => $id])->row_array();
	}


	public function update_costumer()
	{
		$post = $this->input->post();
		$data = array(
			"nama"         => $post['nama'],
			'alamat'       => $post["alamat"],
			'notelp' 		=> $post["notelp"],
			'email'		=> $post["email"],
		);
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('costumer', $data);
	}
}
