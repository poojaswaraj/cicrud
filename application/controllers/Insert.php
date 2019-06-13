<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller {
// For data insertion	
public function index(){
$this->form_validation->set_rules('firstname','First Name','required|alpha');	
$this->form_validation->set_rules('lastname','Last Name','required|alpha');	
$this->form_validation->set_rules('emailid','Email id','required|valid_email');
$this->form_validation->set_rules('contactno','Contact Number','required|numeric|exact_length[10]');
$this->form_validation->set_rules('address','Address','required');	


           




if($this->form_validation->run()){ 
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname');
$email=$this->input->post('emailid');
$cntno=$this->input->post('contactno');
$adrss=$this->input->post('address'); 
$this->load->model('Insert_Model');
$this->Insert_Model->insertdata($fname,$lname,$email,$cntno,$adrss);


$this->load->view('insert');


}   
else {  
$this->load->view('insert'); 
}
}

// For data updation
public function updatedetails(){
$this->form_validation->set_rules('firstname','First Name','required|alpha');	
$this->form_validation->set_rules('lastname','Last Name','required|alpha');	
$this->form_validation->set_rules('emailid','Email id','required|valid_email');
$this->form_validation->set_rules('contactno','Contact Number','required|numeric|exact_length[10]');
$this->form_validation->set_rules('address','Address','required');	

if($this->form_validation->run()){
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname'); 
$email=$this->input->post('emailid');
$cntno=$this->input->post('contactno');
$adrss=$this->input->post('address');
$usid=$this->input->post('userid');
$this->load->model('Insert_Model');
$this->Insert_Model->updatedetails($fname,$lname,$email,$cntno,$adrss,$usid);

}  

else {
$this->session->set_flashdata('error', 'Somthing went worng. Try again with valid details !!');
		redirect('read');
}
}


   public function send_mail() { 


// $email_config = Array( 
// 'protocol'  => 'smtp',
// 'smtp_host' => 'ssl://smtp.googlemail.com',
// 'smtp_port' => '465',
// 'smtp_user' => 'ranawadea@gmail.com',
// 'smtp_pass' => 'amit123',
// 'mailtype'  => 'html',
// 'starttls'  => true,
// 'newline'   => "\r\n"
// );


         $from_email = "pooja.ebc2018@gmail.com"; 
         $to_email = $this->input->post('email'); 


    
         //Load email library  
          // $this->load->config('email');
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Your Name'); 
         $this->email->to($to_email);
         $this->email->subject('Email Test'); 
         $this->email->message('Testing the email class.'); 
   
         //Send mail 
         if($this->email->send())
         { 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
     echo '1';
     // redirect('insert');
 }
         else 

         {
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
     echo '2';
     
 }

        
      }


      public function cart() 
{    

$this->load->view('shopping_view');
}

}