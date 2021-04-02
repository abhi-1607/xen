<?php
class Xentatic_model extends CI_Model{

    public function insert($postData) {
        $output=array();
        $data=array(
            'data'=>$postData['inputNote']
        );
        $this->db->insert('todo',$data);
        $output['status']='true';
        $output['message']='success';
        
        return $output;
        
    }
    
    public function fetch_data() {
        $this->db->select("*");
        $this->db->from("todo");
        $tmpQuery = $this->db->get();
        $tmpResult = $tmpQuery->result_array();
        
        $output2 = array();
        $output2['status'] = 'true';
        $output2['notes'] = $tmpResult;
        return $output2;
    }
    
    public function fetch_by_id($id){
        $this->db->select("*");
        $this->db->from("todo");
        $this->db->where('id',$id);
        $tmpQuery=$this->db->get();
        $tmpResult = $tmpQuery->result_array();
        
        $output = array();
        $output['status'] = 'true';
        $output['notes'] = $tmpResult;
        return $output;
    }
    
    public function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('todo');
    }
    
    public function update($postData,$id) {
        
        $output=array();
        $data=array(
            'data'=>$postData['editNote']
        );
        $this->db->where('id',$id);
        $this->db->update('todo',$data);
        $output['status']='true';
        $output['message']='success';
        
        return $output;
    }
    
    public function fetchToken($postData) {
        $output=array();
        $data = array(
            "token"=>$postData["token"]
        );
        $this->db->insert("webPush_subscriber",$data);
        $output["status"] = "true";
        $output["message"] = "success";
        return $output;
    }
    
    public function sendNotification() {
        
    }
}
?>