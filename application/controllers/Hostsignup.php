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
                //send mail
                echo '1';
            } else {
                echo '-1';
            }
        }        
    }
}
