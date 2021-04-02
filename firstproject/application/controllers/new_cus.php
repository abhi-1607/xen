<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class new_cus extends CI_Controller {
    
    
    public function index()
    {
        $this->load->view('customer');
        
    }
    
    public function insert() {
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers');
        
        $this->load->model('new_cu');
        $postData = json_decode(file_get_contents("php://input"),TRUE);
        if(empty($postData)){
            return False;
        }
        if(isset($postData['fname'])){
            
        }
        
    }
}
?>