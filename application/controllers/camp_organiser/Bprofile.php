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
        
        $this->load->view('include/org_header');
		$this->load->view('organiser/business_profile');
        $this->load->view('include/org_footer');
	}
}