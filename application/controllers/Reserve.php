<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserve extends CI_Controller {

	public function index()
	{
        $this->load->view('include/header');
		$this->load->view('reserve');
        $this->load->view('include/footer');
	}
    public function save_reservation(){
        if(empty($this->input->post('org_id')) || empty($this->input->post('camp_id')) || empty($this->input->post('start_date')) || empty($this->input->post('accomodation_selected'))){
            echo "<script>
                    alert('Something went wrong, Please start your reservation process again'); 
                    window.location.href = '".base_url()."';
                </script>";
        } else {
            $insert_data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'number_code' => $this->input->post('number_code'),
                'phone' => $this->input->post('phone'),
                'persons' => $this->input->post('persons'),
                'msg' => $this->input->post('msg'),
                'accomodation_selected' => $this->input->post('accomodation_selected'),
                'preffered_currency' => $this->input->post('preffered_currency'),
                'start_date' => $this->input->post('start_date'),
                'org_id' => $this->input->post('org_id'),
                'camp_id' => $this->input->post('camp_id'),
                'request_time' => date('Y-m-d h:i:sa'),
            );
            
            $save = $this->My_model->insertRecord('reservations', $insert_data);
            if($save){
                echo "<script>
                    alert('Reservation request sent successfully! Browse through other camps too'); 
                    window.location.href = '".base_url()."';
                </script>";
            } else {
                echo "<script>
                    alert('Something went wrong, Please try again after sometime'); 
                    window.location.href = '".base_url()."';
                </script>";
            }
        }
    }
}
