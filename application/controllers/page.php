<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page extends CI_Controller {

    public function __construct() {
      parent::__construct();
      
      $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
      $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
      $this->output->set_header('Pragma: no-cache');
      $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
      
      $this->load->model('m_user');
      $this->load->model('m_booking');      
      $this->load->model('m_member');      
    }
  
    public function index() {
        if($this->session->userdata('role') == "admin") {
            $data['booking']= $this->m_booking->tampilkan();  
            $isi =  $this->template->display('admin/content/v_booking',$data);
            $this->load->view('admin/vutama',$isi); 
        } else { 
            $data['booking']= $this->m_booking->tampilkan();  
            $isi =  $this->template->dis('user/v_booking',$data);
            $this->load->view('user/vuser',$isi);
        }
    }

    public function data_user() {
        if ($this->session->userdata('role') == "admin") {
            $data['user']= $this->m_user->tampilkan();    
            $isi =  $this->template->display('admin/content/v_user',$data);
            $this->load->view('admin/vutama',$isi);
        } else { redirect('clogin'); }
    }

    public function edit_user() {    
        if ($this->session->userdata('role') == "admin") {
            $data['user'] = $this->m_user->get_by_id($this->uri->segment(3));
            $isi =  $this->template->display('admin/content/v_edit_user',$data);
            $this->load->view('admin/vutama',$isi);
        } else { redirect('clogin'); }
    }

    public function data_booking() {
        if ($this->session->userdata('role') == "admin") {
            $data['booking']= $this->m_booking->tampilkan();         
            $isi =  $this->template->display('admin/content/v_booking',$data);         
            $this->load->view('admin/vutama',$isi);         
        } else { 
            $data['booking']= $this->m_booking->tampilkan();         
            $isi =  $this->template->dis('user/v_booking',$data); 
            $this->load->view('user/vuser',$isi);            
        }
    }

    public function tambah_booking() {            
        if ($this->session->userdata('role') == "admin") {
            $data['cari_kode']= $this->m_booking->tampil_kode();         
            $isi =  $this->template->display('admin/content/v_tambah_booking',$data);
            $this->load->view('admin/vutama', $isi);
        } else {
            $data['cari_kode']= $this->m_booking->tampil_kode();
            $isi =  $this->template->dis('user/v_tambah_booking',$data);         
            $this->load->view('user/vuser',$isi);
        } 
    }

    public function edit_booking() {    
        if ($this->session->userdata('role') == "admin") {
            $data['booking'] = $this->m_booking->get_by_id($this->uri->segment(3));
            $isi =  $this->template->display('admin/content/v_edit_booking',$data);
            $this->load->view('admin/vutama',$isi);
        } else { redirect('clogin'); }
    }

    public function data_member() {
        if ($this->session->userdata('role') == "admin") {
            $data['member']= $this->m_member->tampilkan();                
            $isi =  $this->template->display('admin/content/v_member',$data);
            $this->load->view('admin/vutama',$isi);
        } else {
            $data['member']= $this->m_member->tampilkan();                
            $isi =  $this->template->dis('user/v_member',$data);
            $this->load->view('user/vuser',$isi);
        }
    }

    public function tambah_member() {            
        if ($this->session->userdata('role') == "admin") {
            $data['cari_kode']= $this->m_member->tampil_kode();         
            $isi =  $this->template->display('admin/content/v_tambah_member',$data);
            $this->load->view('admin/vutama',$isi);
        } else {
            $data['cari_kode']= $this->m_member->tampil_kode();                           
            $isi =  $this->template->dis('user/v_tambah_member',$data);    
            $this->load->view('admin/vutama',$isi);
        } 
    }

    public function edit_member() {    
        if ($this->session->userdata('role') == "admin") {
            $data['member'] = $this->m_member->get_by_id($this->uri->segment(3));
            $isi =  $this->template->display('admin/content/v_edit_member',$data);
            $this->load->view('admin/vutama',$isi);
        } else { redirect('clogin'); }
    }

}