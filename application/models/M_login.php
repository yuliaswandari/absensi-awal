<?php 
 
class M_login extends CI_Model{	
	function auth_user($username,$password){
        $query=$this->db->query("SELECT * FROM t_admin WHERE username ='$username' AND password = to_base64('$password') LIMIT 1");
        return $query;
    }
    function auth_nohp($no_hp){
        $query=$this->db->query("SELECT * FROM t_pegawai WHERE no_hp ='$no_hp' LIMIT 1");
        return $query;
    }
    function simpankode($id,$new_otp){
        $query=$this->db->query("INSERT INTO t_absen (id_pegawai, kode_otp)
        VALUES ($id, '$new_otp')");
        return $query;
    }
    function auth_kode($id,$otp){
        $query=$this->db->query("SELECT * FROM t_absen WHERE id_pegawai ='$id' AND kode_otp ='$otp' LIMIT 1");
        return $query;
    }
    function setvalid($otp){
        $query=$this->db->query("UPDATE t_absen SET valid = 1 WHERE kode_otp='$otp'");
    }

}