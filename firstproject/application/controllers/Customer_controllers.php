<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer_controllers extends CI_Controller {
    
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('welcome_message');
        $this->load->view('Welcome_model');
        $this->Welocome_model->helloworld();
    }
    
    public function insert(){
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers');
        
        $this->load->model('Customer_model');
        $postData = json_decode(file_get_contents('php://input'),true);
        if(empty($postData)){
            return false;
        }
        if((is_int($postData['mobile'])==False)  and  (strlen($postData['mobile']) != 10)){
            echo "enter correct mobile number";
            echo strlen($postData['mobile']);
            return false;
        }
        
        if (preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$^", $postData['email']) == false){
            echo "wrong email";
            return false;
        }

        $input = $this->Customer_model->insert($postData);
        
        echo json_encode($input);
    }
    
    public function insert_multi_table(){
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers');
        
        
        $this->load->model('Customer_model');
        $postData = json_decode(file_get_contents('php://input'),true);
        if(empty($postData)){
            return false;
        }
        
        $input = $this->Customer_model->insert_multi_table($postData);
        
        echo json_encode($input);
    }
        
    
    public function update(){
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers');
        
        $this->load->model('Customer_model');
        $postData = json_decode(file_get_contents('php://input'),true);
        if(empty($postData)){
            return false;
        }
        $input = $this->Customer_model->update($postData);
        
        echo json_decode($input);
    }
    
    public function delete() {
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers');
        
        $this->load->model('Customer_model');
        $postData = json_decode(file_get_contents('php://input'),true);
        if(empty($postData)){
            return false;
        }
        $input = $this->Customer_model->delete($postData);
        
        echo json_encode($input);
    }
    
    public function fetch_by_company() {
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers');
        
        $this->load->model('Customer_model');
        $postData = json_decode(file_get_contents('php://input'),true);
        if(empty($postData)){
            return false;
        }
        $input = $this->Customer_model->fetch_by_company($postData);
        
        echo json_encode($input);
        
    }
    
    public function fetch_by_date() {
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers');
        
        $this->load->model('Customer_model');
        $postData = json_decode(file_get_contents('php://input'),true);
        if(empty($postData)){
            return false;
        }
        $input = $this->Customer_model->fetch_by_date($postData);
        
        echo json_encode($input);
    }
    
    }
