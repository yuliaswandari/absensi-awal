<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
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
		$this->load->view('data');
	}
	public function view(){
        $search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
        $limit = $_POST['length']; // Ambil data limit per page
        $start = $_POST['start']; // Ambil data start
        $order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
        $order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
        $order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"
        $sql_total = $this->m_dashboard->count_all(); // Panggil fungsi count_all pada m_user
        $sql_data = $this->m_dashboard->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada m_user
        $sql_filter = $this->m_dashboard->count_filter($search); // Panggil fungsi count_filter pada m_user
        $callback = array(
            'draw'=>$_POST['draw'], // Ini dari datatablenya
            'recordsTotal'=>$sql_total,
            'recordsFiltered'=>$sql_filter,
            'data'=>$sql_data
        );
        header('Content-Type: application/json');
        echo json_encode($callback); // Convert array $callback ke json
      }
      
     function edit($id_pegawai){    
        $where = array('id_pegawai' => $id_pegawai);
        $data['t_pegawai'] = $this->m_dashboard->edit($where,'t_pegawai')->result();
        $this->load->view('edit',$data);  
    }
    function hapus($id_pegawai){
            $where = array('id_pegawai' => $id_pegawai);
            $this->m_dashboard->hapus($where,'t_pegawai');
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"><i class="fas fa-check"></i> Data user berhasil dihapus</div>');
            redirect('data');   
    }
    function update(){
        $id_pegawai = $this->input->post('id_pegawai');
        $nama = $this->input->post('nama');
        $no_hp = $this->input->post('no_hp');
        $jabatan = $this->input->post('jabatan');
        
        $data = array(
            'nama' => $nama,
            'no_hp' => $no_hp,
            'jabatan' => $jabatan,
        );
     
        $where = array(
            'id_pegawai' => $id_pegawai
        );
     
        $this->m_dashboard->update($where,$data,'t_pegawai');
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"><i class="fas fa-check"></i> Data User berhasil diubah</div>');
        redirect('data');
            
    }
}