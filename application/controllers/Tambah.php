<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {
	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		/* if($this->session->userdata('masuk') != TRUE){
				$url=base_url();
				redirect($url);
			} */
        $this->load->helper('url');
		$this->load->helper('tgl_indo');
		$this->load->library('form_validation');
		$this->load->model('m_dashboard');
		
}
	public function index()
	{
		$this->load->view('tambah');
	}

	function save() {  
        $this->form_validation->set_rules('nama', 'nama', 'required|is_unique[t_pegawai.nama]');  
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');  
		$this->form_validation->set_rules('no_hp', 'Nomor handphone', 'required|numeric|min_length[10]|max_length[13]|is_unique[t_pegawai.no_hp]');   
		$this->form_validation->set_message('is_unique', '%s sudah terdaftar');  

        if ($this->form_validation->run() == FALSE){  
            $this->load->view('tambah');
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"><i class="far fa-times-circle"></i> Gagal disimpan</div>');  
        }else {
         
            $this->m_dashboard->save();
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"><i class="fas fa-check"></i> Data user berhasil disimpan</div>');
            redirect('data');
        }
     }
	
}