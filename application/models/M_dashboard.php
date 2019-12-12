<?php 
 
class M_dashboard extends CI_Model{	
	  function tampil_pegawai(){
        return $this->db->query("SELECT t_pegawai.*, t_absen.* FROM t_pegawai, t_absen WHERE t_pegawai.id_pegawai=t_absen.id_pegawai AND t_absen.valid = '1' AND DATE(t_absen.time) = CURDATE();");
    }

    function save(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
            'jabatan' => $this->input->post('jabatan')
        );
        return $this->db->insert('t_pegawai', $data);
    }
    
    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->like('id_pegawai', $search); 
        $this->db->or_like('nama', $search); 
        $this->db->or_like('no_hp', $search); 
        $this->db->or_like('jabatan', $search); 
        $where = array('jabatan', $search);
        $this->db->or_like($where, $search); 
        $this->db->order_by($order_field, $order_ascdesc); 
        $this->db->limit($limit, $start);
       
        return $this->db->get('t_pegawai')->result_array(); 
      }

      public function count_all(){
      
        return $this->db->count_all('t_pegawai'); 
      }

      public function count_filter($search){
        $this->db->like('id_pegawai', $search); 
        $this->db->or_like('nama', $search); 
        $this->db->or_like('no_hp', $search); 
        $this->db->or_like('jabatan', $search); 
        $where = array('jabatan', $search);
        $this->db->or_like($where, $search);  
       
        return $this->db->get('t_pegawai')->num_rows(); 
      }

      function edit($where,$table){		
        return $this->db->get_where($table,$where);
      }

      function hapus($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
      }

      function update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}