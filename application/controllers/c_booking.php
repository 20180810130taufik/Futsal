<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_booking extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('m_booking');    
  }

  public function tambah() {
   $kode = $this->input->post('kode');
   $nama = $this->input->post('nama');
   $nope = $this->input->post('nope');
   $lap = $this->input->post('lapangan');
   $tanggal = $this->input->post('tanggal');
   $waktu = $this->input->post('waktu');
   $ket = $this->input->post('ket');

  if ($this->input->post('nama')=='') {
    echo "<script>alert('Ups, Nama Masih Kosong !'); history.go(-1);</script>";   
  } else if ($this->input->post('nope')=='') {
    echo "<script>alert('Ups, Nomor HP Masih Kosong !'); history.go(-1);</script>";     
  } else if ($this->input->post('lapangan')=='') {
    echo "<script>alert('Ups, Lapangan belum dipilih !'); history.go(-1);</script>";     
  } else if ($this->input->post('ket')=='') {
    echo "<script>alert('Ups, Keterangan Booking Masih Kosong !'); history.go(-1);</script>";   
  } else {
    // Simpan Data
    $result = $this->m_booking->simpan($kode, $nama, $nope, $lap, $tanggal, $waktu, $ket);
    if ($result){
      echo "<script>alert('Berhasil Booking tempat!'); history.go(-1)</script>";    
      header('location:../page/data_booking');
    } else {
      echo "<script>alert('Ups, Sepertinya terdapat Kesalahan :( !'); history.go(-1)</script>";   
    }   
  }
}

public function perbarui() {
  $kode = $this->input->post('kode');
  $nama = $this->input->post('nama');
  $nope = $this->input->post('nope');
  $lap = $this->input->post('lapangan');
  $tanggal = $this->input->post('tanggal');
  $waktu = $this->input->post('waktu');
  $ket = $this->input->post('ket');

  if ($this->input->post('nama')=='') {
    echo "<script>alert('Ups, Nama Masih Kosong !'); history.go(-1);</script>";   
  } else if ($this->input->post('ket')=='') {
    echo "<script>alert('Ups, Keterangan booking Masih Kosong !'); history.go(-1);</script>";   
  } else {
     // Simpan Data
     $result = $this->m_booking->perbarui($kode, $nama, $nope, $lap, $tanggal, $waktu, $ket);
     if ($result){
       echo "<script>alert('Data Booking Berhasil diperbarui !'); history.go(-1)</script>";   
       header('location:../page/data_booking');
     } else {
      echo "<script>alert('Ups, Sepertinya terdapat Kesalahan :( !'); history.go(-1)</script>";   
    }   
  }
}

function delete() {
  $this->m_booking->hapus($this->uri->segment(3));
  redirect('page/data_booking');    
}
}

