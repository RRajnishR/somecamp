<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
    }

	public function index()
	{
        if( !$this->session->userdata('admin_id') )
			redirect('camp_admin/Admin/login','refresh'); 
        
        $data['reservations'] = $this->My_model->selectRecord('reservations', '*', '', array('criteria' => 'request_time', 'order' => 'DESC'));
        
        $this->load->view('include/admin_header');
		$this->load->view('admin/admin', $data);
        $this->load->view('include/admin_footer');
	}
    
    public function login(){
        $this->load->view('include/admin_header');
		$this->load->view('admin/login');
        $this->load->view('include/admin_footer');
    }
    public function loginValidate(){
        $this->form_validation->set_rules('user_name', 'user name', 'trim|required|min_length[4]|max_length[35]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('include/admin_header');
			$this->load->view('admin/login');
			$this->load->view('include/admin_footer');	
		}
		else
		{    			
			$data = array( 				
				'user_name' => $this->input->post('user_name'), 
				'password' => $this->input->post('password')			
			);
			
			//print_r($data); die('88');
			$bLogin = $this->admin_model->login_admin($data);
			//echo "==> ". $bLogin; die();
			if($bLogin == -1)
			{
				//echo "wrong User name or Password"; //die();
				$data['error'] = 'your account is not activated!';
				$this->load->view('include/admin_header');	
				$this->load->view('admin/login',$data);
				$this->load->view('include/admin_footer');
			}	
			if(!$bLogin)
			{
				//echo "wrong User name or Password"; //die();
				$data['error'] = 'User name or Password is incorrect!';
				$this->load->view('include/admin_header');	
				$this->load->view('admin/login',$data);
				$this->load->view('include/admin_footer');
			}			
		}
    }
}
