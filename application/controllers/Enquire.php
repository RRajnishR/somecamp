<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquire extends CI_Controller {

	public function index()
	{
        $this->load->view('include/header');
		$this->load->view('enquire');
        $this->load->view('include/footer');
	}
    
    public function save_enquiry(){
        if(empty($this->input->post('org_id')) || empty($this->input->post('camp_id'))){
            echo "<script>
                    alert('Something went wrong, Please try after sometime'); 
                    window.location.href = '".base_url()."';
                </script>";
        } else {
            $insert_data = array(
                'fname' => $this->input->post('fname'),
                'email' => $this->input->post('email'),
                'msg' => $this->input->post('msg'),
                'accomodation_selected' => $this->input->post('accomodation_selected'),
                'preffered_currency' => $this->input->post('preffered_currency'),
                'start_date' => $this->input->post('start_date'),
                'org_id' => $this->input->post('org_id'),
                'camp_id' => $this->input->post('camp_id'),
                'enquiry_time' => date('Y-m-d h:i:sa'),
            );
            //Now use the last inserted id, message, to and from. Insert into a new table.
            //use that messages to create a chat history.
            
            $save = $this->My_model->insertRecord('enquiry', $insert_data);
            if($save){
                echo "<script>
                    alert('Enquiry sent successfully! Meanwhile Browse through other camps too'); 
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
