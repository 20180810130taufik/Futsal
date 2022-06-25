<?php if (!defined('BASEPATH')) exit ('no direct script access allowed');

class mlogin extends CI_Model {   
    
    function __construct() {
        parent::__construct();        
    }
    
    function login($username, $password){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('username', $username);
        $this->db->where('password', $password); 
        $this->db->limit(1);
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->row() : FALSE;
    }
    
    function tampil_kode() {
        $query = $this->db->get('tbl_user');
        if($query->num_rows()<1) {
            return 1;
        } else {
            //$query->last_query();
            //$query->row()->stok;
            $this->db->last_query();
            return $query->result(); 
        }
    }    
}