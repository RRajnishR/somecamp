<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
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
                    'photo' => $this->input->post('photo')
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
        $this->load->view('include/header');
		$this->load->view('log_page');
        $this->load->view('include/footer');
    }
}
