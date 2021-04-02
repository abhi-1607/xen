<?php
session_start();
class new_cu extends CI_Model{
    
    public function insert($postData) {
        
        $data = array(
            'fname'=>$postData['fname'],
            'lname'=>$postData['lname'],
            'email'=>$postData['email'],
            'city'=>$postData['city'],
            'company'=>$postData['company'],
            'phone'=>$postData['phone'],
            'designation'=>$postData['designation'],
            'no_of_ca'=>$postData['No_of_CA'],
            'No_of_IT_Person'=>$postData['No_of_IT_person'],
            'No_of_Employee'=>$postData['No_of_Employee']
        );
       
        $this->db->insert('tya',$data);
    }
}
?>