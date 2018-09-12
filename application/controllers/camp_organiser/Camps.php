<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camps extends CI_Controller {
    
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
		$this->load->view('organiser/camp_management');
        $this->load->view('include/org_footer');
	}
    public function new_camp(){
        if( !$this->session->userdata('org_id') )
			redirect('camp_organiser/Dashboard/login','refresh'); 
        
        $data['countries'] = $this->My_model->selectRecord('countries', '*', '');
        $data['languages'] = $this->My_model->selectRecord('langs', '*', '');
        $data['camp_type'] = $this->My_model->selectRecord('camp_type', '*', '');
        $data['camp_for'] = $this->My_model->selectRecord('camp_for', '*', '');
        $data['food_type'] = $this->My_model->selectRecord('food_type', '*', '');
        $data['meals'] = $this->My_model->selectRecord('meals', '*', '');
        $data['drink_type'] = $this->My_model->selectRecord('drink_type', '*', '');
        
        $this->load->view('include/org_header');
		$this->load->view('organiser/camp_basic_details', $data);
        $this->load->view('include/org_footer');
    }
}