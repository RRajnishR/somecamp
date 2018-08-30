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
        
        $basic_details = array();
        $message = "";
        $new_file_name="";
        if($_FILES['p_scan']['name'])
        {
            $fileExtensions = ['jpeg','jpg','png'];
            $fileName = $_FILES['p_scan']['name'];
            $fileExtension =  pathinfo($fileName, PATHINFO_EXTENSION);
            //if no errors...
            if(!$_FILES['p_scan']['error'])
            {
                if(in_array($fileExtension,$fileExtensions)){
                    //now is the time to modify the future file name and validate the file
                    $new_file_name = date('dmYHis').str_replace(" ", "", basename($_FILES["p_scan"]["name"])); //rename file
                    if($_FILES['p_scan']['size'] > (1024000)) //can't be larger than 1 MB
                    {
                        $valid_file = false;
                        $message = 'Oops! Your file\'s size is bigger than 1 MB. Retry after compressing / resizing.';
                    } else{
                        $valid_file = true;
                    }

                    //if the file has passed the test
                    if($valid_file){
                        //move it to where we want it to be
                        if(move_uploaded_file($_FILES['p_scan']['tmp_name'], 'assets/uploads/organisers/id_image/'.$new_file_name)){
                            $basic_details = array(
                                'first_name' => $this->input->post('fname'),
                                'last_name' => $this->input->post('lname'),
                                'contact' => $this->input->post('contact'),
                                'dob' => $this->input->post('dob'),
                                'p_id' => $this->input->post('pid'),
                                'p_scan' => $new_file_name,
                            );
                            
                        } else {
                            $message = 'Upload failed, Try again later!!';
                        }
                    }
                } else {
                    $message="Sorry, we only accept images with extension jpg or png.";
                }
            }
            //if there is an error...
            else{
                $message = 'Ooops! error: '.$_FILES['image']['error']." occured, try again later.";
            }
        } else {
            $basic_details = array(
                    'first_name' => $this->input->post('fname'),
                    'last_name' => $this->input->post('lname'),
                    'contact' => $this->input->post('contact'),
                    'dob' => $this->input->post('dob'),
                    'p_id' => $this->input->post('pid'),
                );
        }
        $done = $this->My_model->updateRecord('organisers', $basic_details, array('id' => $this->session->userdata('org_id')));
        if($done == '1' || $done =='0'){
            $message = "Awesome, basic details updated successfully";
            
        } 
        echo "<script>
                    alert('".$message."'); 
                    window.location.href = '".base_url('camp_organiser/Iprofile')."';
                </script>";
    }
    public function update_address(){
        $add_details = array(
            'add_street' => $this->input->post('hnum'),
            'add_city'   => $this->input->post('city'),
            'add_postal' => $this->input->post('zip'),
            'add_state'  => $this->input->post('state'),
            'add_country'=> $this->input->post('country')
        );
        $done = $this->My_model->updateRecord('organisers', $add_details, array('id' => $this->session->userdata('org_id')));
        if($done == '1' || $done =='0'){
            $message = "Awesome, Address details updated successfully";
        } else {
            $message = "Oops, there is something wrong with our servers, please try again later!";
        }
         echo "<script>
                    alert('".$message."'); 
                    window.location.href = '".base_url('camp_organiser/Iprofile')."';
                </script>";
    }
    public function update_business(){
        
    }
}