<?php 
    //model declaration
Class Customer_model extends CI_Model{
    
    Public function __construct() {
        parent:: __construct();
        //it will include all the database logic
    }
    
    Public function insert($postData) {
        $data=array(
            'first_name'=>$postData['first_name'],
            'last_name'=> $postData['last_name'],
            'mobile' => $postData['mobile'],
            'email' => $postData['email'],
            'company'=>$postData['company']
        );
        
        $this->db->insert('customer',$data);
        $output = array();
        $output['status'] = true;
        $output['message'] = 'data added successfully';
        return $output;
        
    }
    public function insert_multi_table($postData){
        $data=array(
            'first_name'=>$postData['first_name'],
            'last_name'=> $postData['last_name'],
            'mobile' => $postData['mobile'],
            'email' => $postData['email'],
            'company'=>$postData['company']
        );
        $this->db->insert('customer',$data);
        $last_id = $this->db->insert_id();
        for ($i = 0; $i < sizeof($postData['customer_address']); $i++) {
            
        
        
        
        $address_data = array(
            'state'  =>$postData['customer_address'][$i]['state'],
            'city'   =>$postData['customer_address'][$i]['city'],
            'pincode'=>$postData['customer_address'][$i]['pincode'],
            'customer_id' =>$last_id

        );
        //        foreach ($postData['customer_address'] as $values){
        //             'state'  =>$values['state'],
        //             'city'   =>$values['city'],
        //             'pincode'=>$values['pincode'],
        //             'customer_id' =>$last_id
        $this->db->insert('customer_address',$address_data);
        }
        
        $output = array();
        $output['status'] = true;
        $output['message'] = 'data added successfully';
        return $output;
    }
    
    public function update($postData) {
        $data = array(
        'first_name' => $postData['first_name'],
        'last_name' => $postData['last_name'],
        'mobile' => $postData['mobile'],
        'email' => $postData['email'],
        'company'=>$postData['company']
        );
        $this->db->where('id',$postData['id']);
        $this->db->update('customer',$postData);
        $output = array();
        $output['status'] = true;
        $output['message'] = 'data updated successfully';
        return $output;
        
    }
    
    public function delete($postData) {
        $this->db->where('id', $postData['id']);
        $this->db->delete('customer');
        
        $output = array();
        $output['status'] = true;
        $output['message'] = 'data deleted successfully';
        return $output;
    }
    
    public function fetch_by_company($postData) {
        $this->db->select("*");
        $this->db->from('customer');
        $this->db->where(array('company'=>$postData['company']));
        $tmpQuery = $this->db->get();
        $tmpResult = $tmpQuery->result_array();
        
        $output = array();
        $output['status'] = true;
        $output['message'] = $tmpResult;
        return $output;
    }
    
    public function fetch_by_date($postData){
        $this->db->select("*");
        $this->db->from('customer');
        $this->db->where('date(date_added) >= ', $postData['first_date']);
        $this->db->where('date(date_added) <= ', $postData['last_date']);
        $tmpQuery = $this->db->get();
        $tmpResult = $tmpQuery->result_array();
        
        $output = array();
        $output['status'] = true;
        $output['message'] = $tmpResult;
        return $output;
    }
}
?>