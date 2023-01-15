<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_tema extends CI_Model
{

	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db
			->where('username', $username)
			->where('password', md5($password))
			->limit(1)
			->get('admin');

		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return false;
		}
	}

	public function ambil_id_event($id)
	{
		$hasil = $this->db->where('id', $id)->get('event');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}
	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	// public function delete_gambar($id, $path, $file, $table)
	// {

	// 	$this->db->where('id', $id);

	// 	unlink(FCPATH . './assets/upload/achiev/' . $file);

	// 	$this->db->delete($table);
	// }

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function update_data($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}

	public function tambah_naskah()
	{
		$data = [
			"judul" => $this->input->post('judul'),
			"kategori" => $this->input->post('kategori'),
			"content" => $this->input->post('content'),
		];
		$this->db->set('tanggal', 'NOW()', FALSE);
		$this->db->insert('naskah', $data);
	}

	public function download($id)
	{
		$query = $this->db->get_where('naskah', array('id_naskah' => $id));
		return $query->row_array();
	}

	public function update_password($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hitungJumlah($table)
	{
		$query = $this->db->get($table);
		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}
}

/* End of file tema_model.php */
