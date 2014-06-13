<?php
class Web extends CI_Controller {  
     public function __construct(){  
        parent::__construct();  
     }  
     public function index(){  
        $this->load->view('web/bg_atas');
        $this->load->view('web/bg_login');
        $this->load->view('web/bg_bawah');
     }   
}
?>