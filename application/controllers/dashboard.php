<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		 date_default_timezone_set("Asia/Jakarta");
		
			 $this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->model('master');
	}

	public function index()
	{
		$this->load->view('web/dashboard');
	}


	public function insertcommentP()
	{
		$data = array(
			'nama'       	=> $this->input->post('nama'),
			'email'			=> $this->input->post('email'),
			'pekerjaan'		=> $this->input->post('pekerjaan'),
			'komentar'		=> $this->input->post('komentar'),
			'keterangan'	=> $this->input->post('keterangan'),
			'kode_peserta'	=> $this->input->post('kode_peserta'),
			'created_at'    => date('Y-m-d H:i:s') 
			);
	    $this->master->insertComment($data);
		$respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		echo json_encode($respon);
	}
	public function insertcomment()
	{
		$data = array(
			'nama'       	=> $this->input->post('nama1'),
			'email'			=> $this->input->post('email1'),
			'pekerjaan'		=> $this->input->post('pekerjaan1'),
			'keterangan'	=> $this->input->post('keterangan1'),
			'komentar'		=> $this->input->post('komentar1'),
			'created_at'    => date('Y-m-d H:i:s') 
			);
	    $this->master->insertComment($data);
	    // redirect('../dashboard');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */