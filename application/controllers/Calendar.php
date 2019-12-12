<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {
	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		/* if($this->session->userdata('masuk') != TRUE){
				$url=base_url();
				redirect($url);
			} */
        $this->load->helper('url');
        $this->load->helper('tgl_indo');
		/* $this->load->model('m_todo');
		 */
}
	public function index()
	{
		$this->load->view('calendar');
	}
	
}
