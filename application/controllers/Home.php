<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        //print_r($this->session->userdata()); die();
        $data['camp_for'] = $this->My_model->selectRecord('camp_for','*','');
        $data['camp_type'] = $this->My_model->selectRecord('camp_type','*','');
        $data['camps'] = $this->My_model->selectRecord('camp', '*', array('status'=>'1'));
        $this->load->view('include/header');
		$this->load->view('home', $data);
        $this->load->view('include/footer');
	}
    public function old(){
        $this->load->view('include/header_old');
		$this->load->view('home_old');
        $this->load->view('include/footer_old');
    }
    public function login(){
        //check if user exists
        $check = $this->db->where('email', $this->input->post('email'))->from("users")->count_all_results();
        if($check > 0){
            $old_user = array(
                'photo' => $this->input->post('photo'),    
                'last_login' => date('Y-m-d H:i:s'), 
            );
            //update photo and login details if there is any change in the gmail account
            $where = array(
                'email' => $this->input->post('email')
            );
            $updt = $this->My_model->updateRecord('users', $old_user, $where);
            if($updt >= 0){
                $sess = array(
                    'google_id' => $this->input->post('googleid'),    
                    'email' => $this->input->post('email'),    
                    'first_name' => $this->input->post('fname'),    
                    'last_name' => $this->input->post('lname'),    
                    'photo' => $this->input->post('photo'),
                    'social_stat' => 'google'
                );
                $this->session->set_userdata($sess);
                echo "1";
            } else {
                echo "-1";
            }
        } else {
            $new_user = array(
                'google_id' => $this->input->post('googleid'),    
                'email' => $this->input->post('email'),    
                'first_name' => $this->input->post('fname'),    
                'last_name' => $this->input->post('lname'),    
                'photo' => $this->input->post('photo'),
                'email_verify' => '1',
                'social_stat' => 'google',    
                'last_login' => date('Y-m-d H:i:s'),    
                'first_login' => date('Y-m-d H:i:s'),    
            );
            
            if($this->My_model->insertRecord('users',$new_user)){
                //add data into session and login
                $this->session->set_userdata($new_user);
                echo "1";
            } else {
                echo '-1';
            }
        } 
    }
    public function setcurrency($cur){
        $prev_url = $_SERVER['HTTP_REFERER'];
        $this->session->set_userdata('selected_currency', $cur);
        redirect($prev_url);
    }
    public function rate_this_camp(){
        $rate_val='0';
        $rate_acc='0';
        $rate_food='0';
        $rate_loc='0';
        $overall_rating='0';
        if($this->input->post('rate_val') > 5 || $this->input->post('rate_val') < 0){
            $rate_val = '5';
        } else {
            $rate_val = $this->input->post('rate_val');
        }
        
        if($this->input->post('rate_acc') > 5 || $this->input->post('rate_acc') < 0){
            $rate_acc = '5';
        } else {
            $rate_acc = $this->input->post('rate_acc');
        }
        
        if($this->input->post('rate_food') > 5 || $this->input->post('rate_food') < 0){
            $rate_food = '5';
        } else {
            $rate_food = $this->input->post('rate_food');
        }
        
        if($this->input->post('rate_loc') > 5 || $this->input->post('rate_loc') < 0){
            $rate_loc = '5';
        } else {
            $rate_loc = $this->input->post('rate_loc');
        }
        
        if($this->input->post('overall_rating') > 5 || $this->input->post('overall_rating') < 0){
            $overall_rating = '5';
        } else {
            $overall_rating = $this->input->post('overall_rating');
        }
        $insert_data = array(
            'camp_id' => $this->input->post('camp_id'),
            'rate_val' => $rate_val,
            'rate_acc' => $rate_acc,
            'rate_food' => $rate_food,
            'rate_loc' => $rate_loc,
            'overall_rating' => $overall_rating,
            'comment' => htmlentities($this->input->post('comment')),
            'given_by' => $this->input->post('given_by'),
        );
        $idata = $this->My_model->insertRecord('camp_rating', $insert_data);
        if($idata){
           echo "<script>
                    alert('Ratings / Feedback submitted successfully'); 
                    window.location.href = '".base_url('Camp/view/').$this->input->post('camp_id')."';
                </script>";
        }
    }
    public function user_page(){
        if($this->session->userdata('email'))
            redirect(base_url());
        
        $this->load->view('include/header');
		$this->load->view('log_page');
        $this->load->view('include/footer');
    }
    public function register_user(){
        // check email already exist
		$iUser  = $this->checkUser($this->input->post('email'));
		//echo " User==> ".$iUser;
		if($iUser)
		{
			echo '-1';       // duplicate user
		}
		else
		{
			$code = $this->My_model->getRandomString(3);
			$today = date('Y-m-d h:i:sa');
			$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'code'  => $code,
				'first_login' => $today,
                'status' => '1'
				);
			$iInserId = $this->My_model->insertRecord('users',$data);
			// send verification mail
            if($iInserId){
                $subject = 'Bookourcamp.com Account Verification';
                $message = "Dear ".$this->input->post('first_name').",<br /> <br />
                            Please click on the below activation link to verify your email address.<br /><br />
                            <br />"
                            .base_url().'Home/verifyEmail/' .$code . "<br /> (note: if you can't click on the link just copy and paste it into address bar of your browser.)							
                            <br /><br /><b>Thanks & Regards</b>, <br /> Bookourcamp Team";

                $send_to = $this->input->post('email');
                echo $val = $this->My_model->send_mail($send_to, $subject, $message);
            } else {
                echo "-1";
            }
            
		}
    }
    public function normal_login(){
        $data = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		);
		$email = $this->input->post('email');
		
		$this->db->where('password',md5($this->input->post('password')));
       
        $where = "(email = "."'".$email."'".")";
		$this->db->where($where);
		$query = $this->db->get('users');
		$aResult = $query->result_array();
		//echo "check";
		if( $query->num_rows() == 0)
		{
			echo '2';
		}
		else if( $query->num_rows() > 0 &&  $aResult[0]['status'] == 1  && $aResult[0]['email_verify'] == 1  )
		{		
            echo "check";
			$data = array('last_login' => date('Y-m-d h:i:sa'));
			$where = array('id' => $aResult[0]['id']);
			$this->My_model->updateRecord('users',$data,$where);
			
			$aSess = array(		
					'user_id' => $aResult[0]['id'],
					'first_name' => $aResult[0]['first_name'],
					'last_name' => $aResult[0]['last_name'],
					'photo'  => $aResult[0]['photo'],
					'email'  => $aResult[0]['email'],
                    'social_stat' => '0'
					);
			$this->session->set_userdata($aSess);
			echo '3';	
		}
		else if( $query->num_rows() > 0 &&  $aResult[0]['email_verify'] == 0  )
		{
		    echo '0';
		}
		else if( $query->num_rows() > 0 && $aResult[0]['status'] == 0  )
		{
			echo '-1';
		} 
    }
    
    
    public function verifyEmail($code){	
        $where = array('code' => $code);			
		$data  = array('email_verify' => 1);
        
        $this->My_model->updateRecord('users', $data, $where);
        if($this->db->affected_rows() >=0){
           $val = $this->My_model->selectRecord('users', '*', $where);
           $send_to = $val[0]->email;
           $subject = "Welcome to Bookourcamp.com | Account Verified";
           $message = "Dear ".$val[0]->first_name.", <br/>
           <p style='text-align:justify;'> <b>Congratulations!, You account has been verified successfully.</b></p>
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
    public function checkUser($email)
	{
		$iNums  = $this->My_model->getNumRows('users','email',$this->input->post('email'));
		return $iNums; 	
	}
}
