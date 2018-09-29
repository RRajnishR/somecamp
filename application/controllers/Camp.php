<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camp extends CI_Controller {

	public function index()
	{
        
	}
    public function view($campid=null){
        $this_camp = explode('-', $campid)[0];
        $today = date('Y-m-d');
        $data['camp_data'] = $this->My_model->selectRecord('camp', '*', array('camp_id'=>$this_camp));
        $data['start_dates'] = $this->My_model->selectRecord('camp_start_dates', '*', array('start_date >= "'.$today.'"'=>NULL));
        $data['pics'] = $this->My_model->selectRecord('camp_images', '*', array('camp_id'=>$this_camp, 'del_status'=>'0'));
        $acc = $data['camp_data'][0]->accomodation;
        $data['organiser'] = $this->My_model->selectRecord('organisers', array('id', 'b_name', 'b_desc', 'b_photo', 'image'), array('id'=>$data['camp_data'][0]->organiser_id));
        $data['camp_acc'] = $this->My_model->selectRecord('camp_accomodation', '*', array('id IN ('.$acc.')' => NULL));
        //$this->My_model->printQuery(); die();
        $this->load->view('include/header');
		$this->load->view('viewcamp', $data);
        $this->load->view('include/footer');
    }
}
