<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class m_member extends CI_Model{

  function __construct() {
    parent::__construct();
  }
  
  function simpan($id, $nama, $pj, $alamat, $nope, $email, $tanggal){
    $data = array(
      'id_member'=>$id,
      'nama_tim'=>$nama,      
      'nama_pj'=>$pj,      
      'alamat'=>$alamat,
      'nope'=>$nope,
      'email'=>$email,      
      'tgl_daftar'=>$tanggal
    );    
    $query = $this->db->insert('tbl_member', $data);
    return $query;
  }
  
  function tampil_kode() {
    $query = $this->db->get('tbl_member');
    if($query->num_rows()<1) {
     return 1;
   }
   else {
     $this->db->last_query();
     return $query->result(); 
   }
 }

 function tampilkan() {
  $query = $this->db->get('tbl_member');
  return $query->result();    
}

function get_by_id($id) {
  $this->db->where('id_member', $id);
  $query = $this->db->get('tbl_member');
  return $query->result();   
}

function hapus($id) {
  $this->db->where('id_member', $id);
  $query = $this->db->delete('tbl_member');
  return $query;
}

function perbarui($id, $nama, $pj, $alamat, $nope, $email, $tanggal){
  $data = array(
    'id_member'=>$id,
    'nama_tim'=>$nama,      
    'nama_pj'=>$pj,      
    'alamat'=>$alamat,
    'nope'=>$nope,
    'email'=>$email,      
    'tgl_daftar'=>$tanggal
  );    
  $this->db->where('id_member', $id);
  return $this->db->update('tbl_member', $data);     
}
}
