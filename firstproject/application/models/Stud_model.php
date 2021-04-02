<?php 
Class Stud_model extends CI_Model{
    function __construct(){
        parent:: __construct();
    }
    //This function is for insertion of record
    
    public function insert($postData) {
        $data=array(
           'name'=>$postData['name'],
           'rollno'=>$postData['rollno'],
           'class'=>$postData['class'],
           'email'=>$postData['email'],
           'company'=>$postData['company']
            
        );
        $this->db->insert("student", $data);
        $output = array();
        $output['status'] = true;
        $output['message'] = "Data Added Successfully";
        return $output;
    }
    
    public function fetch_data_student($postData) {
       $this->db->select("*");
       $this->db->from("student");
       $this->db->where(array('class'=>$postData['subject']));
       $tmpQuery = $this->db->get();
       $tmpResult = $tmpQuery->result_array();
       
       $output = array();
       $output['status'] = true;
       $output['message'] = $tmpResult;
       return $output;
    }
    
    public function update($postData) {
        
        $data = array(
            
            'name'=>$postData['name'],
            'rollno'=>$postData['rollno'],
            'class'=>$postData['class'],
            'email'=>$postData['email']
        );
        
        $this->db->where('id', $postData['id']);
        $this->db->update('student', $data);
        
        
        $output = array();
        $output['status'] = true;
        $output['message'] = "Data Updated Successfully";
        return $output;
    }
    
    public function delete($postData) {
        $this->db->where('id', $postData['id']);
        $this->db->delete('student');
        $output = array();
        $output['status'] = true;
        $output['message'] = "Data Deleted Sucessfully";
        return $output;
    }
 
    
    
}


?>