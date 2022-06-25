<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clogin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('mlogin');
        $this->load->model('m_user');
    }

    public function index() {
        $data['error']='';
        $this->load->view('vlogin',$data);
    }

    public function register() {
        $data['error']='';
        $this->load->view('register',$data);
    }
    
// Proses Login
    function masuk() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');    

    // Cek Inputan Username dan Password
        if (empty($username) || empty($password)) {
            $data['error']='Username atau Password Kosong!';
            $this->load->view('vlogin',$data);
        } else {
            $password = md5($password);    
        // Jika Sudah Terisi Kirim Parameter Username ke Model Login
            $result = $this->mlogin->login($username, $password, $nama_user);
            if ($result) {
            // Simpan Session 
                $data = array('user_name' => $result->username, 'nama' => $result->nama_user, 'role' => $result->role, 'login' => TRUE);
                $this->session->set_userdata($data);
                redirect('page');
            } else {
                $password = md5($password);    
            // Jika Sudah Terisi Kirim Parameter Username ke Model Login
                $result = $this->mlogin->login($username, $password, $nama_user);
                if ($result){
            // Simpan Session Username 
                    $data = array('user_name' => $result->username, 'nama' => $result->nama_user, 'role' => $result->role, 'login' => TRUE);
                    $this->session->set_userdata($data);
                    redirect('page');
                } else {
                    $data['error']='Username atau Password Salah!';
                    $this->load->view('vlogin',$data);    
                }
        } // End Jika Pada Tabel User Tidak Ketemu
    } // End else Jika Inputan Valid
} // End Fungsi

    // Logout
function logout() {
    $this->session->unset_userdata($data);
    $this->session->sess_destroy();  
    redirect('clogin');
}


}