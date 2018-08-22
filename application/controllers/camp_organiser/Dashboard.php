<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('organiser_model');
    }

	public function index()
	{
        if( !$this->session->userdata('org_id') )
			redirect('camp_organiser/Dashboard/login','refresh'); 
        
        $this->load->view('include/org_header');
		$this->load->view('organiser/dashboard');
        $this->load->view('include/org_footer');
	}
    
    public function login(){
        if($this->session->userdata('org_id'))
            redirect('camp_organiser/Dashboard','refresh');
        
        $this->load->view('include/org_header');
		$this->load->view('organiser/login');
        $this->load->view('include/org_footer');
    }
    public function loginValidate(){
        $this->form_validation->set_rules('user_name', 'user name', 'trim|required|min_length[4]|max_length[35]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('include/org_header');
			$this->load->view('organiser/login');
			$this->load->view('include/org_footer');	
		}
		else
		{    			
			$data = array( 				
				'user_name' => $this->input->post('user_name'), 
				'password' => $this->input->post('password')			
			);
			
			$bLogin = $this->organiser_model->login_organiser($data);
            
			if($bLogin == -1)
			{
				$data['error'] = 'Your account is awaiting approval!';
				$this->load->view('include/org_header');	
				$this->load->view('organiser/login',$data);
				$this->load->view('include/org_footer');
			}	
			if(!$bLogin)
			{
				//echo "wrong User name or Password"; //die();
				$data['error'] = 'User name or Password is incorrect!';
				$this->load->view('include/org_header');	
				$this->load->view('organiser/login',$data);
				$this->load->view('include/org_footer');
			}			
		}
    }
}
