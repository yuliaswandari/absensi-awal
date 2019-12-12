<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		/* if($this->session->userdata('masuk') != TRUE){
				$url=base_url();
				redirect($url);
			} */
        $this->load->helper('url');
        $this->load->helper('tgl_indo');
		$this->load->model('m_dashboard');
		
}
	public function index()
	{
		$data['t_pegawai'] = $this->m_dashboard->tampil_pegawai('t_pegawai')->result();
		$this->load->view('dashboard',$data);
	}

	
}
