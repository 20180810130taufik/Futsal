<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Alowed');

class template{
    
    protected $_ci;
    function __construct() {
        
        $this->_ci=&get_instance();
    }
    
    function display($template, $data=NULL){
        $data['_content'] = $this->_ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->_ci->load->view('/_header', $data, TRUE);
        $data['_menu'] = $this->_ci->load->view('/_menu', $data, TRUE);
        $data['_footer'] = $this->_ci->load->view('/_footer', $data, TRUE);
        $this->_ci->load->view('/admin/vutama.php',$data, TRUE);
    }
    
    function dis($template, $data=NULL){
        $data['_content'] = $this->_ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->_ci->load->view('/user/_header', $data, TRUE);
        $data['_menu'] = $this->_ci->load->view('/user/_menu', $data, TRUE);
        $data['_footer'] = $this->_ci->load->view('/_footer', $data, TRUE);
        $this->_ci->load->view('/user/vuser.php',$data, TRUE);
    }
}
