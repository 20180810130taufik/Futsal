<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_member extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('m_member');    
  }

  public function tambah() {
   $id = $this->input->post('id');
   $nama = $this->input->post('nama');
   $pj = $this->input->post('nama_pj');
   $alamat = $this->input->post('alamat');
   $nope = $this->input->post('nope');
   $email = $this->input->post('email');
   $tanggal = $this->input->post('tanggal');   

  if ($this->input->post('nama')=='') {
    echo "<script>alert('Ups, Nama Masih Kosong !'); history.go(-1);</script>";   
  } else if ($this->input->post('alamat')=='') {
    echo "<script>alert('Ups, Alamat Masih Kosong !'); history.go(-1);</script>";   
  } else if ($this->input->post('nope')=='') {
    echo "<script>alert('Ups, Nomor HP Masih Kosong !'); history.go(-1);</script>";   
  } else {
     // Simpan Data
     $result = $this->m_member->simpan($id, $nama, $pj, $alamat, $nope, $email, $tanggal);
     if ($result){
       echo "<script>alert('Berhasil daftar menjadi Member!');</script>";    
       header('location:../page/data_member');
     } else {
      echo "<script>alert('Ups, Sepertinya terdapat Kesalahan :( !'); history.go(-1)</script>";   
    }   
  }
}

public function perbarui() {
   $id = $this->input->post('id');
   $nama = $this->input->post('nama');
   $pj = $this->input->post('nama_pj');
   $alamat = $this->input->post('alamat');
   $nope = $this->input->post('nope');
   $email = $this->input->post('email');
   $tanggal = $this->input->post('tanggal');   

  if ($this->input->post('nama')=='') {
    echo "<script>alert('Ups, Nama Masih Kosong !'); history.go(-1);</script>";   
  } else if ($this->input->post('alamat')=='') {
    echo "<script>alert('Ups, Alamat Masih Kosong !'); history.go(-1);</script>";   
  } else if ($this->input->post('nope')=='') {
    echo "<script>alert('Ups, Nomor HP Masih Kosong !'); history.go(-1);</script>";   
  }
  else {
   // Simpan Data
   $result = $this->m_member->perbarui($id, $nama, $pj, $alamat, $nope, $email, $tanggal);
   if ($result){
     echo "<script>alert('Data Member Berhasil diperbarui !');</script>";
     header('location:../page/data_member');
   } else {
    echo "<script>alert('Ups, Sepertinya terdapat Kesalahan :( !'); history.go(-1)</script>";   
  }   
}
}

function delete() {
  $this->m_member->hapus($this->uri->segment(3));
  echo "<script>alert('Data Member Berhasil dihapus !');</script>";
  redirect('page/data_member');    
}
}

