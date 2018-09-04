<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bprofile extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('organiser_model');
    }

	public function index()
	{
        if( !$this->session->userdata('org_id') )
			redirect('camp_organiser/Dashboard/login','refresh'); 
        if($this->session->userdata('acc_type') == '1')
            redirect('camp_organiser/Dashboard/','refresh');
        
        $data['user'] = $this->My_model->selectRecord('organisers', '*', array('id' => $this->session->userdata('org_id')));
        $data['country'] = $this->My_model->selectRecord('countries', 'countries_id, countries_name','');
        
        $this->load->view('include/org_header');
		$this->load->view('organiser/business_profile', $data);
        $this->load->view('include/org_footer');
	}
    public function 
}