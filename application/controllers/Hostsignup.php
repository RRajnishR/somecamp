<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hostsignup extends CI_Controller {

	public function index(){
        $this->load->view('include/header');
		$this->load->view('host_signup.php');
        $this->load->view('include/footer');
	}
    public function register(){
        
        $check = $this->db->where('email', $this->input->post('email'))->from("organisers")->count_all_results();
        if($check > 0){
            echo "2";
        } else {
            $code = $this->My_model->getRandomString(3);
            $new_user = array(
                'first_name'=>$this->input->post('fname'),
                'last_name'=>$this->input->post('lname'),
                'email'=>$this->input->post('email'),
                'pass'=>md5($this->input->post('pass')),
                'contact'=>$this->input->post('num'),
                'secret_code' => $code,
                'acc_type'=>$this->input->post('btype'),
            );
            if($this->My_model->insertRecord('organisers',$new_user)){
                $subject = 'Bookourcamp.com Partner Account Verification';
                $message = "Dear ".$this->input->post('fname').",<br /> <br />
                            Please click on the below activation link to verify your email address.<br /><br />
                            <br />"
                            .base_url().'Hostsignup/verifyEmail/' .$code . "<br /> (note: if you can't click on the link just copy and paste it into address bar of your browser.)							
                            <br /><br /><b>Thanks & Regards</b>, <br /> Bookourcamp Team";

                $send_to = $this->input->post('email');
                echo $val = $this->My_model->send_mail($send_to, $subject, $message);
            } else {
                echo '-1';
            }
        }        
    }
    public function verifyEmail($code){
        $where = array('secret_code' => $code);			
		$data  = array('email_verify' => 1);
        
        $this->My_model->updateRecord('organisers', $data, $where);
        if($this->db->affected_rows() >=0){
           $val = $this->My_model->selectRecord('organisers', '*', $where);
           $send_to = $val[0]->email;
           $subject = "Welcome to Bookourcamp.com | Camp Organiser Account Verified";
           $message = "Dear ".$val[0]->first_name.", <br/>
           <p style='text-align:justify;'> <b>Congratulations !, You account has been verified successfully.</b></p>
           <p style='text-align:justify;'>
                Thanks and Regards,<br/>
                Bookourcamp.com Team.
           </p>
           ";
           $val = $this->My_model->send_mail($send_to, $subject, $message);
           echo "<script>
                    alert('Awesome! Your account is verified successfully.'); 
                    window.location.href = '".base_url('Home/user_page')."';
                </script>"; 
        } else {
            echo "<script>
                    alert('Oops! Something went wrong. Try again later / contact us'); 
                    window.location.href = '".base_url()."';
                </script>"; 
        }
    }
}
