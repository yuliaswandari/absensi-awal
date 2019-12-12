<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		/* if($this->session->userdata('masuk') != TRUE){
				$url=base_url();
				redirect($url);
			} */
        $this->load->helper('url');
        $this->load->helper('tgl_indo');
		$this->load->model('m_laporan');
		
}
	public function index()
	{
		$data['t_pegawai'] = $this->m_laporan->tampil('t_pegawai')->result();
        $this->load->view('laporan',$data);  
	}

	public function nama()
	{
		$nama = $this->input->post('nama');
		$data['t_pegawai'] = $this->m_laporan->laporan_nama($nama,'t_pegawai')->result();
		$this->load->view('detillaporan',$data);  
	}

	public function rekaplaporan()
	{
		$data['rekap'] = $this->m_laporan->rekap()->result();
		$this->load->view('rekaplaporan',$data);  
	}
	
}
