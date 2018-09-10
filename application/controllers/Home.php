<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->view('include/header');
		$this->load->view('home');
        $this->load->view('include/footer');
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
}
