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
        $data['camps'] = $this->My_model->selectRecord('camp', '*', array('organiser_id' => $this->session->userdata('org_id')));
        $this->load->view('include/org_header');
		$this->load->view('organiser/camp_management', $data);
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
        $data['facilities'] = $this->My_model->selectRecord('facilities', '*', '');
        
        $this->load->view('include/org_header');
		$this->load->view('organiser/camp_basic_details', $data);
        $this->load->view('include/org_footer');
    }
    public function save_camp(){
        //var_dump($this->input->post('drink_list')); die();
        $inc_meal = 0;
        if(!$this->input->post('included_food')){
            $inc_meal = 1;
        }
        $inc_drnk = 0;
        if(!$this->input->post('included_drinks')){
            $inc_drnk = 1;
        }
        $langs = "";
        if($this->input->post('langs')){
            $langs = implode(',', $this->input->post('langs'));
        }
        $camp_type = "";
        if($this->input->post('ctype')){
           $camp_type = implode(',',$this->input->post('ctype'));
        }
        $camp_for = "";
        if($this->input->post('camp_for')){
           $camp_for = implode(',',$this->input->post('camp_for'));
        }
        $meal_list = "";
        if($this->input->post('meal_list')){
           $meal_list = implode(',',$this->input->post('meal_list'));
        }
        $ftype = "";
        if($this->input->post('ftype')){
           $ftype = implode(',',$this->input->post('ftype'));
        }
        $drink_list = "";
        if($this->input->post('drink_list')){
           $drink_list = implode(',',$this->input->post('drink_list'));
        }
        $facilities = "";
        if($this->input->post('facilities')){
           $facilities = implode(',',$this->input->post('facilities'));
        }
        $camp_data = array(
            'country_id' => $this->input->post('countryid'),
            'main_lang' => $this->input->post('langid'),
            'other_lang' => $langs,
            'address' => $this->input->post('camp_address'),
            'lot_long' => $this->input->post('latlong'),
            'duration' => $this->input->post('duration'),
            'facilities' => $facilities,
            'camp_type' => $camp_type,
            'camp_for' => $camp_for,
            'title' => $this->input->post('title'),
            'intro' => $this->input->post('intro'),
            'currency' => $this->input->post('currency'),
            'near_airport' => $this->input->post('airport_name'),
            'pickup_service' => $this->input->post('pickup_option'),
            'pickup_cost' => $this->input->post('pick_with_cost'),
            'camp_direction' => $this->input->post('camp_direction'),
            'inc_meal' => $inc_meal,
            'meal_list' => $meal_list,
            'food_type' => $ftype,
            'inc_drink' => $inc_drnk,
            'drink_list' => $drink_list,
            'itinerary' => $this->input->post('program'),
            'included' => $this->input->post('included'),
            'noincluded' => $this->input->post('notincluded'),
            'things_to_do' => $this->input->post('things_to_do')
        );
        $insert = $this->My_model->insertRecord('camp', $camp_data);
        if($insert){
            echo "<script>
                    alert('Camp created successfully, Now add other details'); 
                    window.location.href = '".base_url('camp_organiser/Camps')."';
                </script>";
        } else{
             echo "<script>
                    alert('Something went wrong'); 
                    //window.location.href = '".base_url('camp_organiser/Camps')."';
                </script>";
        }
    }
}