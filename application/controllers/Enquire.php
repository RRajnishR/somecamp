<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquire extends CI_Controller {

	public function index()
	{
        $this->load->view('include/header');
		$this->load->view('enquire');
        $this->load->view('include/footer');
	}
    
    public function save_enquiry(){
        if(empty($this->input->post('org_id')) || empty($this->input->post('camp_id'))){
            echo "<script>
                    alert('Something went wrong, Please try after sometime'); 
                    window.location.href = '".base_url()."';
                </script>";
        } else {
            $insert_data = array(
                'fname' => $this->input->post('fname'),
                'email' => $this->input->post('email'),
                'msg' => $this->input->post('msg'),
                'accomodation_selected' => $this->input->post('accomodation_selected'),
                'preffered_currency' => $this->input->post('preffered_currency'),
                'start_date' => $this->input->post('start_date'),
                'org_id' => $this->input->post('org_id'),
                'camp_id' => $this->input->post('camp_id'),
                'enquiry_time' => date('Y-m-d h:i:sa'),
            );
            
            $save = $this->My_model->insertRecord('enquiry', $insert_data);
            if($save){
                $new_insert = array(
                    'replied_by' => 'User',
                    'reply' => $this->input->post('msg'),
                    'replier_id' => $this->input->post('email'),
                    'reply_time' => date("Y-m-d H:i:s"),
                    'view_stat' => 0,
                    'enq_id' => $this->db->insert_id()
                );
                $save2 = $this->My_model->insertRecord('enq_history', $new_insert);
                if($save2){
                    $user_email = $this->input->post('email');
                    $check = $this->db->where('email', $user_email)->from("users")->count_all_results();
                    if($check > 0){
                        //show alert
                        echo "<script>
                            alert('Enquiry sent successfully! Check Enquiry History Page to see the reply of Organiser'); 
                            window.location.href = '".base_url()."';
                        </script>";
                    } else {
                        //register the user and generate password.
                        $code = $this->My_model->getRandomString(3);
                        $pass = $this->My_model->getRandomString(6);
                        $today = date('Y-m-d h:i:sa');
                        $data = array(
                            'first_name' => $this->input->post('fname'),
                            'last_name' => '',
                            'email' => $this->input->post('email'),
                            'password' => md5($pass),
                            'code'  => $code,
                            'first_login' => $today,
                            'status' => '1'
                            );
                        $save3 = $this->My_model->insertRecord('users', $data);
                        if($save3){
                            //send mail and inform the user
                            $send_to = $user_email;
                            $subject = "Bookyourcamp.com | Enquiry Sent";
                            $message = "Dear ".$this->input->post('fname').",<br /> <br />
                            Your enquiry was sent to the organiser. They usually reply back in 1-2 hours.<br /><br />
                            <br /> In the meantime, We have created a camper account for you, incase you want to converse with the organisers more. Use following credentials to login into your account.<br/>Email: ".$user_email."<br/>Password: <b>".$pass."</b><br/><b>Thanks & Regards</b>, <br /> Bookourcamp Team";
                            $val = $this->My_model->send_mail($send_to, $subject, $message);
                            if($val){
                                echo "<script>
                                    alert('Enquiry sent successfully! Check Enquiry History Page to see the reply of Organiser'); 
                                    window.location.href = '".base_url()."';
                                </script>";
                            } else {
                                echo "<script>
                                        alert('Error Sending Confirmation Mail, Please try again after sometime'); 
                                        window.location.href = '".base_url()."';
                                    </script>";
                            }
                        } else {
                            echo "<script>
                                alert('Something went wrong, Please try again after sometime'); 
                                window.location.href = '".base_url()."';
                            </script>";
                        }
                    }
                }
            } else {
                echo "<script>
                    alert('Something went wrong, Please try again after sometime'); 
                    window.location.href = '".base_url()."';
                </script>";
            }
        }
    }
    public function show_enquiries(){
         if(!$this->session->userdata('email'))
            redirect(base_url());
        
        $data['enq'] = $this->My_model->selectRecord('enquiry', '*', array('email' => $this->session->userdata('email')));
        $this->load->view('include/header');
		$this->load->view('user_enquiry', $data);
        $this->load->view('include/footer');
    }
    public function chathistory($enq_id){
        if(!$this->session->userdata('email'))
            redirect(base_url());
        $data['enq_id'] = $enq_id;
        $data['enq_history'] = $this->My_model->selectRecord('enq_history', '*', array('enq_id' => $enq_id));
        $this->load->view('include/header');
		$this->load->view('user_enq_history', $data);
        $this->load->view('include/footer');
    }
    public function continue_enq($enq_id){
        if(!$this->session->userdata('email'))
            redirect(base_url());
        
        $insert_data = array(
            'replied_by' => 'User',
            'reply' => $this->db->escape($this->input->post('reply_to_camp')),
            'replier_id' => $this->session->userdata('email'),
            'reply_time' => date("Y-m-d h:i:sa"),
            'view_stat' => 0,
            'enq_id' => $enq_id
        );
        
        $save = $this->My_model->insertRecord('enq_history', $insert_data);
        if($save){
            echo "<script>
                    alert('New Enquiry Sent!'); 
                    window.location.href = '".base_url()."Enquire/chathistory/".$enq_id."';
                </script>";
        } else {
            echo "<script>
                    alert('Something went wrong, Try again later.'); 
                    window.location.href = '".base_url()."Enquire/chathistory/".$enq_id."';
                </script>";
        }
    }
}
