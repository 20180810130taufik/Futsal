<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class m_user extends CI_Model{    
    
    function __construct() {
        parent::__construct();
    }            
            
    function tampilkan(){         
        $query = $this->db->get('tbl_user');
        return $query->result();            
    }
    
    function get_by_id($id){
        $this->db->where('id_user', $id);
        $query = $this->db->get('tbl_user');
        return $query->result();           
    }

    function tambah($id, $nama, $username, $password, $role){
        $password =  md5($password);
        $data = array(
            'id_user'=>$id,
            'nama_user'=>$nama,
            'username'=>$username,
            'password'=>$password,
            'role'=>$role,
        );      
        return $this->db->insert('tbl_user', $data);
    }

    function perbarui($id, $nama, $username, $password){
        $password =  md5($password);
        $data = array(
            'id_user'=>$id,
		    'nama_user'=>$nama,
            'username'=>$username,
            'password'=>$password,
        );      
        $this->db->where('id_user', $id);
        return $this->db->update('tbl_user', $data);     
    }           
}