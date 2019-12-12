<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		/* if($this->session->userdata('masuk') != TRUE){
				$url=base_url();
				redirect($url);
			} */
		$this->load->helper('url');
		$this->load->model('m_login');
		$this->load->library('form_validation','session');
		
}
	public function index()
	{
		$this->session->set_flashdata('msg', '<div class="text-center" >Masukkan nomor hp</div>');
		$this->load->view('login');
	}
	public function admin()
	{
		$this->load->view('login-admin');
	}
	public function input()
	{
		$this->load->view('input');
	}
	// fungdi untuk membuat kode otp
	function randomString($length=6) {
		$str = "";
		$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		return $str;
	}
	
	public function authnohp(){
		$this->form_validation->set_rules('no_hp','no_hp','required|numeric|min_length[10]|max_length[13]');
		if($this->form_validation->run() != false){
			// Kalau validasi nomor hp benar
			$no_hp=htmlspecialchars($this->input->post('no_hp',TRUE),ENT_QUOTES);
			$cek_nohp=$this->m_login->auth_nohp($no_hp); //Cek apakah no hp ada di database
			$data=$cek_nohp->row_array();
			// Kalau nomor hp terdaftar
			if ($cek_nohp->num_rows() > 0){
				$this->session->set_userdata('ses_id',$data['id_pegawai']);
				$this->session->set_userdata('ses_nama',$data['nama']);
				
				/* $data['t_pegawai']=$this->m_login->auth_nohp($no_hp,'t_pegawai')->result();
				$this->load->view('input',$data); */
				
				// load library kirim sms
				$this->load->library('nexmo');
				
				// set response format: xml or json, default json
				$this->nexmo->set_format('json');
				$from = 'Absensi Pegawai';
				$to = $no_hp;
				$str = $this->randomString($length=6); //pemanggilan fungsi kode otp
				$message = array(
					'text' => 'Kode OTP absensi: '.$str,
					
				);
				$response = $this->nexmo->send_message($from, $to, $message);
				$new_otp = $str;
				$id = $data['id_pegawai'];
				$this->m_login->simpankode($id,$new_otp,'t_absen');
				$this->session->set_flashdata('msg', '<div class="text-center">Kode OTP sudah dikirim ke nomor hp Anda</div>');
				$this->load->view('input');
				/* echo "<h1>Text Message</h1>";
				$this->nexmo->d_print($response);
				echo "<h3>Response Code: ".$this->nexmo->get_http_status()."</h3>"; */
				
			}
			// Kalau nomor hp belum terdaftar
			else{
				$this->session->set_flashdata('msg', '<div class="text-center">Nomor hp belum terdaftar</div>');
				$this->load->view('login');
			}
			// Kalau validasi nomor hp salah 
		}else{
			$this->session->set_flashdata('msg', '<div class="text-center">Nomor hp tidak valid</div>');
			$this->load->view('login');
		}
	}
	
	function authkode(){
		$id_pegawai = $this->input->post('id');
		$otp=htmlspecialchars($this->input->post('kode',TRUE),ENT_QUOTES);

		$cek_kode=$this->m_login->auth_kode($id_pegawai,$otp);

		if($cek_kode->num_rows() > 0){ 
			$this->m_login->setvalid($otp);
			$this->session->set_flashdata('msg', '<div class="text-center">Anda berhasil absensi</div>');
			$this->load->view('absen');
		}
		else {
			$this->session->set_flashdata('msg', '<div class="text-center">Kode OTP salah</div>');
			$this->load->view('input');
		}
	}
	

	function auth(){
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
 
		if($this->form_validation->run() != false){
            $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
            $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
     
            $cek_user=$this->m_login->auth_user($username,$password);
     
            if($cek_user->num_rows() > 0){ 
                    $data=$cek_user->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                   
                        $this->session->set_userdata('ses_id',$data['user_id']);
                        $this->session->set_userdata('ses_nama',$data['user_username']);
                       
                        redirect('dashboard');
     
			}
                else {
                    $this->session->set_flashdata('admin', ' 
					<div class="text-danger text-center" id="ts-error">Username atau Password Salah</div>
				');
                    redirect(base_url('login/admin'));
                }
		}else{
			$this->load->view('login');
		}
	}

	function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
	
}
