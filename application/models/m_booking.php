<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class m_booking extends CI_Model{

  function __construct() {
    parent::__construct();
  }
  
  function simpan($kode, $nama, $nope, $lap, $tanggal, $waktu, $ket){
    $data = array(
      'kd_booking'=>$kode,
      'nama'=>$nama,
      'nope'=>$nope,
      'lapangan'=>$lap,
      'tanggal'=>$tanggal,
      'waktu'=>$waktu,
      'keterangan'=>$ket,
    );    
    $query = $this->db->insert('tbl_booking', $data);
    return $query;
  }
  
  function tampil_kode() {
    $query = $this->db->get('tbl_booking');
    if($query->num_rows()<1) {
     return 1;
   }
   else {
		 //$query->last_query();
		 //$query->row()->stok;
     $this->db->last_query();
     return $query->result(); 
   }
 }

 function tampilkan() {
  $query = $this->db->get('tbl_booking');
  return $query->result();    
}

function get_by_id($id) {
  $this->db->where('kd_booking', $id);
  $query = $this->db->get('tbl_booking');
  return $query->result();   
}

function hapus($id) {
  $this->db->where('kd_booking', $id);
  $query = $this->db->delete('tbl_booking');
  return $query;
}

function perbarui($kode, $nama, $nope, $lap, $tanggal, $waktu, $ket) {
  $data = array(
    'kd_booking'=>$kode,
    'nama'=>$nama,
    'nope'=>$nope,
    'lapangan'=>$lap,
    'tanggal'=>$tanggal,
    'waktu'=>$waktu,
    'keterangan'=>$ket,
  );    
  $this->db->where('kd_booking', $kode);
  return $this->db->update('tbl_booking', $data);     
}
}
