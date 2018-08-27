<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iprofile extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('organiser_model');
    }

	public function index()
	{
        if( !$this->session->userdata('org_id') )
			redirect('camp_organiser/Dashboard/login','refresh');
        
        $data['user'] = $this->My_model->selectRecord('organisers', '*', array('id' => $this->session->userdata('org_id')));
        $data['country'] = $this->My_model->selectRecord('countries', 'countries_id, countries_name','');
        //print_r($data['country']); die();
        
        $this->load->view('include/org_header');
		$this->load->view('organiser/individual_profile', $data);
        $this->load->view('include/org_footer');
	}
    
    public function update_basic_details(){
        if( !$this->session->userdata('org_id') )
			redirect('camp_organiser/Dashboard/login','refresh');
        
        $basic_details = array(
            'first_name' => $this->input->post('fname'),
            'last_name' => $this->input->post('lname'),
            'contact' => $this->input->post('contact'),
            'dob' => $this->input->post('dob'),
            'p_id' => $this->input->post('pid'),
            'p_scan' => $this->input->post('p_scan'),
        );
    }
}