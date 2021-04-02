<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Xentatic_controller extends CI_Controller {
    public function index() {
        
        
        $this->load->model('Xentatic_model');
        $output2['notes']=$this->Xentatic_model->fetch_data();
        if(isset($output2))
        {
            $this->load->view('xentatic', $output2['notes']);
        }
        else {
            $this->load->view('xentatic');
        }
        
           
        
    }
    
    public function insert() {
        $output = array();
        $output2 = array();
        $this->load->model('Xentatic_model');
        $postData=$this->input->post();
        $output = $this->Xentatic_model->insert($postData);
        
        if(isset($output))
        {
         $output2['notes']=$this->Xentatic_model->fetch_data();
                  
         $this->load->view('xentatic', $output2['notes']);
        }   
    }
    
    public function edit($id){
        $output = array();
        
        $this->load->model('Xentatic_model');
        $output['notes']=$this->Xentatic_model->fetch_by_id($id);
        $this->load->view('edit', $output['notes']);
    }
    
    public function delete($id) {
        $output2 = array();
        $this->load->model('Xentatic_model');
        $this->Xentatic_model->delete($id);
        
        $output2['notes']=$this->Xentatic_model->fetch_data();
        $this->load->view('xentatic',$output2['notes']);
        
    }
    
    public function update($id) {
        $output = array();
        $output2 = array();
        
        $this->load->model('Xentatic_model');
        $postData=$this->input->post();
        $this->Xentatic_model->update($postData,$id);
        $output['notes']=$this->Xentatic_model->fetch_data();
        $this->load->view('xentatic',$output['notes']);
    }
    
    public function fetchToken() {
        $output = array();
        $this->load->model('Xentatic_model');
        $postData=$this->input->post();
        $output = $this->Xentatic_model->fetchToken($postData);
    }
    
//     public function sendfcmNotification()
//     {
        
//         $output = array();
//         define("server_key", "AAAAv5EcVEY:APA91bGEl63Ml5WS_58JjcdCG8HZi8EYA7DVEM9kETlqD5_6SQjgtNSN46WGBLle5eQq_FWvmO_2v4NFLXUCZzbmkTzOZFsxXTxCsbLWyBMtm-zJnFvzgblTQyl0lstH08_PXzlfsfx6");
//         $token =["fm6Dra4zcc96YaTYyUp51T:APA91bF48WKl5loKG1lw9jJ9yFK5Hnf_yYPgy1cD-StF3TfnfNNhu1-S1ropcbzVuvs3yTMgjUVil5-AgCY9Up2GT9Pu2MNHv7T1YiDKmEFT30R1G1q9brV-R0Ky9Hepq4xAuIPL6pq7"];
//         $header = [
//             'Authorization: key='.server_key,
//             'Content-Type: application/json'
//         ];
//         $msg = [
//             'title'=>'Testing Notification',
//             'body'=>'Notification from xen',
//             'click_action'=>'http://localhost/firstproject/Xentatic_controller'
//         ];
        
//         $payload=[
//             'registraion_ids'=>$token,
//             'data'=>$msg,
//         ];
        
//         $curl = curl_init();
        
//         curl_setopt_array($curl, array(
//             CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
//             CURLOPT_RETURNTRANSFER => true,
//             CURLOPT_CUSTOMREQUEST => 'POST',
//             CURLOPT_POSTFIELDS => json_encode($payload),
//             CURLOPT_HTTPHEADER => $header,
//         ));
        
//         $response = curl_exec($curl);
//         $err = curl_error($curl);
        
//         curl_close($curl);
        
//         if ($err){
//             echo "cURL Error #:".$err;
//         } else {
//             echo "success".$response;
//         }
        
//         $token = 'Registratin_id'; // push token
//         $message = "Test notification message";
//         $this->load->library('fcm');
//         $this->fcm->setTitle('Test FCM Notification');
//         $this->fcm->setMessage($message);
//         $json = $this->fcm->getPush();
//         $p = $this->fcm->send($token, $json);
//    }
}
?>