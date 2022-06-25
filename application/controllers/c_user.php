<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('m_user');    
  }	        
  public function tambah() {
    $id = $this->input->post('id_user');
    $nama = $this->input->post('nama');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $role = $this->input->post('role');
    
    if ($this->input->post('username')==''){
      echo "<script>alert('Ups, Username Masih Kosong !'); history.go(-1);</script>";   
    } else if ($this->input->post('password')==''){
      echo "<script>alert('Ups, Password Masih Kosong !'); history.go(-1);</script>";   
    } else if ($this->input->post('nama')==''){
      echo "<script>alert('Ups, Nama Masih Kosong !'); history.go(-1);</script>";   
    } else {
     // Simpan Data
     $result = $this->m_user->tambah($id, $nama, $username, $password, $role);
     if ($result){
       echo "<script>alert('Daftar Berhasil!'); </script>";               
       echo "<meta http-equiv='refresh' content='0; url=../clogin'>";
     } else {
      echo "<script>alert('Ups, Sepertinya ada Kesalahan :( !'); history.go(-1)</script>";   
    }   
  }
}

public function perbarui() {
  $id = $this->input->post('id');
  $nama = $this->input->post('nama');
  $username = $this->input->post('username');
  $password = $this->input->post('password');

  if ($this->input->post('username')==''){
    echo "<script>alert('Ups, Username Masih Kosong !'); history.go(-1);</script>";   
  } else if ($this->input->post('password')==''){
    echo "<script>alert('Ups, Password Masih Kosong !'); history.go(-1);</script>";   
  } else if ($this->input->post('nama')==''){
    echo "<script>alert('Ups, Nama Masih Kosong !'); history.go(-1);</script>";   
  } else {
     // Simpan Data
   $result = $this->m_user->perbarui($id, $nama, $username, $password);
   if ($result){
     echo "<script>alert('Data user Berhasil diperbarui !');</script>";    				   
     echo "<meta http-equiv='refresh' content='0; url=../page/data_user'>";
   } else {
    echo "<script>alert('Ups, Sepertinya ada Kesalahan :( !'); history.go(-1)</script>";   
  }   
}
}
}
