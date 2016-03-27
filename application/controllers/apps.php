<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apps extends CI_Controller {
	public function __construct() {
		parent::__construct();
		 date_default_timezone_set("Asia/Jakarta");
	
		    $this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->model('master');
	}

	public function index()
	{
		$data['dataPeserta'] = $this->master->getAllPeserta();
		$data['no'] = 1;
		$this->load->view('admin/peserta',$data);
	}
	
	public function changepeserta($id = null)
	{
		$data['data'] =$this->master->getPeserta($id);	
		$this->load->view('admin/peserta_change',$data);
	}
		
	public function uploadimg()
    {

        $var = $_POST['file'];
        print_r($var);
         if($this->input->post('file')) {

        $config['upload_path'] = 'upload'; 
        $config['file_name'] = $var;
        $config['overwrite'] = 'TRUE';
        $config["allowed_types"] = 'jpg|jpeg|png|gif';
        $config["max_size"] = '1024';
        $config["max_width"] = '400';
        $config["max_height"] = '400';
        $this->load->library('upload', $config);

        if(!$this->upload->do_upload()) {               
            $this->data['error'] = $this->upload->display_errors();
            print_r( $this->data['error']);
        } else {
            print_r("success");                                      
        }

    }
 }


	public function insert()
	{
		$data = array(
			'kode_peserta'  => $this->input->post('kode_peserta'),
			'nama_apps'		=> $this->input->post('nama_apps'),
			'pembuat'		=> $this->input->post('pembuat'),
			'email'			=> $this->input->post('email'),
			'telp'			=> $this->input->post('telp'),
			'gambar'		=> $this->input->post('gambar'),
			'kategori'		=> $this->input->post('kategori'),
			'keterangan'	=> $this->input->post('keterangan'),
			'created_at'    => date('Y-m-d H:i:s') 
			);
		
		$this->master->insertPeserta($data);

		// redirect('alat');
		// $respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		// echo json_encode($respon);
	}
	public function hapusData($id = null)
	{
		$dataawal=json_encode($this->malat->getAlat($id));
		$this->mmaster->setHistory(3,"Delete Master alat , ".$dataawal."");
		$this->malat->delete($id);

		$respon = ['msg' => 'Data supplier Berhasil Dihapus.'];
		//redirect('penalatan');
		echo json_encode($respon);
	}

 	public function checkData() {
		$data_arr = array();
		$q        = $this->malat->check($this->input->post('id_alat'));
		foreach ($q as $data) {
			$data_arr[] = $data;
		}
		echo json_encode($data_arr, JSON_PRETTY_PRINT);
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