<?php 
 
class M_laporan extends CI_Model{	
	function tampil(){
        $query=$this->db->query("SELECT * FROM t_pegawai");
        return $query;
    }
    function tampil_nama(){
        $query=$this->db->query("SELECT * FROM t_pegawai");
        return $query;
    }
    function laporan_nama($nama){
        /* $query=$this->db->query("SELECT * FROM t_pegawai WHERE nama = '$nama'");
        return $query; */
        $query=$this->db->query("SELECT t_pegawai.*, t_absen.* FROM t_pegawai, t_absen WHERE t_pegawai.nama = '$nama' AND t_pegawai.id_pegawai = t_absen.id_pegawai AND t_absen.valid = '1'");
        return $query;
    }
    function rekap(){
        /* $query=$this->db->query("SELECT * FROM t_pegawai WHERE nama = '$nama'");
        return $query; */
        $query=$this->db->query("SELECT t_pegawai.*, t_absen.* FROM t_pegawai, t_absen WHERE t_pegawai.id_pegawai = t_absen.id_pegawai AND t_absen.valid = '1'");
        return $query;
    }
}