<?php

class Master extends CI_model
{
	public function check($kode_peserta = '') {
		$this->db->select('kode_peserta');
		$this->db->where('kode_peserta', $kode_peserta); 
		$q = $this->db->get('peserta');
		return $q->row();
	}
	public function insertComment($data = null)
	{
		$this->db->insert('comment', $data);
	}
	public function insertPeserta($data = null)
	{
		$this->db->insert('peserta', $data);
	}
	public function getAllPeserta() {
		$this->db->select('*');
		return $this->db->get('peserta')->result();
	}
	public function getPeserta($id) {
		$this->db->select('*');
		$this->db->where('kode_peserta',$id);
		return $this->db->get('peserta')->result();
	}
	
	public function updatePeserta($data = null, $id = null)
	{
		$this->db->where('kode_peserta', $id);
		$this->db->update('peserta', $data);
	}

	public function deletePeserta($id)
	{
		$this->db->where('kode_peserta', $id);
		$this->db->delete('peserta');
	}
	

}
