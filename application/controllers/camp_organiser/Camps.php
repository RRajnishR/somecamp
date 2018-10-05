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
            'things_to_do' => $this->input->post('things_to_do'),
            'price' => $this->input->post('price'), 
            'created' => date('Y-m-d H:i:s'),
            'organiser_id' => $this->session->userdata('org_id'),
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
                    window.location.href = '".base_url('camp_organiser/Camps')."';
                </script>";
        }
    }
    public function update_camp(){
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
            'things_to_do' => $this->input->post('things_to_do'),
            'price' => $this->input->post('price')
        );
        $update = $this->My_model->updateRecord('camp', $camp_data, array('camp_id' => $this->input->post('camp_id')));
        if($update>0){
            echo "<script>
                    alert('Camp updated successfully, Now add other details'); 
                    window.location.href = '".base_url('camp_organiser/Camps')."';
                </script>";
        } else{
             echo "<script>
                    alert('Something went wrong'); 
                    window.location.href = '".base_url('camp_organiser/Camps')."';
                </script>";
        }
    }
    public function deletecamp($camp_id){
        $where = array('camp_id' => $camp_id);
        $del = $this->My_model->deleteRecordPerm('camp',$where);
        if($del){
            echo "<script>
                    alert('Camp Deleted'); 
                    window.location.href = '".base_url('camp_organiser/Camps')."';
                </script>";
        }
    }
    public function editCamp($camp_id){
        $data['countries'] = $this->My_model->selectRecord('countries', '*', '');
        $data['languages'] = $this->My_model->selectRecord('langs', '*', '');
        $data['camp_type'] = $this->My_model->selectRecord('camp_type', '*', '');
        $data['camp_for'] = $this->My_model->selectRecord('camp_for', '*', '');
        $data['food_type'] = $this->My_model->selectRecord('food_type', '*', '');
        $data['meals'] = $this->My_model->selectRecord('meals', '*', '');
        $data['drink_type'] = $this->My_model->selectRecord('drink_type', '*', '');
        $data['facilities'] = $this->My_model->selectRecord('facilities', '*', '');
        $data['camp'] = $this->My_model->selectRecord('camp', '*', array('camp_id' => $camp_id));
        $data['camp_id'] = $camp_id;
        $this->load->view('include/org_header');
		$this->load->view('organiser/camp_edit', $data);
        $this->load->view('include/org_footer');
    }
    public function video($camp_id){
        $data['camp'] = $this->My_model->selectRecord('camp', '*', array('camp_id' => $camp_id));
        $data['camp_id'] = $camp_id;
        $this->load->view('include/org_header');
		$this->load->view('organiser/upload_video_link', $data);
        $this->load->view('include/org_footer');
    }
    public function update_video(){
        //making the video embeddable
        $vlink = str_replace('watch?v=','embed/', $this->input->post('video_link'));
        $where = array('camp_id' => $this->input->post('camp_id'));
        $change = array('video_link' => $vlink);
        $updt = $this->My_model->updateRecord('camp', $change, $where);
        if($updt>0){
            echo "<script>
                    alert('Video link updated successfully'); 
                    window.location.href = '".base_url('camp_organiser/Camps/video/').$this->input->post('camp_id')."';
                </script>";
        }
    }
    public function images($camp_id){
        $data['camp_id'] = $camp_id;
        $data['images'] = $this->My_model->selectRecord('camp_images', '*', array('camp_id' => $camp_id, 'del_status'=> '0'));
        $data['error'] = '';
        $this->load->view('include/org_header');
		$this->load->view('organiser/upload_camp_images', $data);
        $this->load->view('include/org_footer');
    }
    
    public function deleteimage ($image_id, $camp_id){
        $where = array('id' => $image_id);
        $change = array('del_status' => '1');
        $updt = $this->My_model->updateRecord('camp_images', $change, $where);
        if($updt>0){
            echo "<script>
                    alert('Image delete successfully'); 
                    window.location.href = '".base_url('camp_organiser/Camps/images/').$camp_id."';
                </script>";
        }
    }
    
    public function uploadImage(){
        $basic_details = array();
        $message = "";
        $new_file_name="";
        $camp_id = $this->input->post('camp_id');
        if($_FILES['camp_image']['name'])
        {
            $fileExtensions = ['jpeg','jpg','png'];
            $fileName = $_FILES['camp_image']['name'];
            $fileExtension =  pathinfo($fileName, PATHINFO_EXTENSION);
            //if no errors...
            if(!$_FILES['camp_image']['error'])
            {
                if(in_array($fileExtension,$fileExtensions)){
                    //now is the time to modify the future file name and validate the file
                    $new_file_name = date('dmYHis').str_replace(" ", "", basename($_FILES["camp_image"]["name"])); //rename file
                    if($_FILES['camp_image']['size'] > (1024000)) //can't be larger than 1 MB
                    {
                        $valid_file = false;
                        $message = 'Oops! Your file\'s size is bigger than 1 MB. Retry after compressing / resizing.';
                    } else{
                        $valid_file = true;
                    }

                    //if the file has passed the test
                    if($valid_file){
                        //move it to where we want it to be
                        if(move_uploaded_file($_FILES['camp_image']['tmp_name'], 'assets/uploads/organisers/camp_images/'.$new_file_name)){
                            $basic_details = array(
                                'name' => $new_file_name,
                                'camp_id' => $camp_id,
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
                $message = 'Ooops! error: '.$_FILES['camp_image']['error']." occured, try again later.";
            }
        } 
        $done = $this->My_model->insertRecord('camp_images', $basic_details);
        if($done){
            $message = "Awesome, Image uploaded successfully";
            
        } 
        echo "<script>
                    alert('".$message."'); 
                    window.location.href = '".base_url('camp_organiser/Camps/images/').$camp_id."';
                </script>";
    }
    public function addAccomodation(){
        $data['accomodations'] = $this->My_model->selectRecord('camp_accomodation', '*', array('org_id' => $this->session->userdata('org_id')));
        $this->load->view('include/org_header');
		$this->load->view('organiser/accomodation_details', $data);
        $this->load->view('include/org_footer');
    }
    public function save_acc(){
        $save_data = array(
            'acc_name' => $this->input->post('acc_name'),
            'no_room'  => $this->input->post('room_num'),
            'person_num' => $this->input->post('num_person'),
            'sharing' => $this->input->post('sharing'),
            'price' => $this->input->post('price'),
            'org_id' => $this->session->userdata('org_id'),
        );
        $insert = $this->My_model->insertRecord('camp_accomodation', $save_data);
        if($insert){
            echo "<script>
                    alert('Accomodation Created successfully'); 
                    window.location.href = '".base_url('camp_organiser/Camps/addAccomodation')."';
                </script>";
        } else{
             echo "<script>
                    alert('Something went wrong'); 
                    window.location.href = '".base_url('camp_organiser/Camps/addAccomodation')."';
                </script>";
        }
    }
    public function update_acc($id){
        $update_data = array(
            'acc_name' => $this->input->post('acc_name'),
            'no_room'  => $this->input->post('room_num'),
            'person_num' => $this->input->post('num_person'),
            'sharing' => $this->input->post('sharing'),
            'price' => $this->input->post('price'),
            'org_id' => $this->session->userdata('org_id'),
        );
        $updt = $this->My_model->updateRecord('camp_accomodation', $update_data, array('id' => $id));
        if($updt>0){
            echo "<script>
                    alert('Accomodation detail updates successfully'); 
                    window.location.href = '".base_url('camp_organiser/Camps/addAccomodation')."';
                </script>";
        } else {
           echo "<script>
                    alert('Something went wrong, try again Later'); 
                    window.location.href = '".base_url('camp_organiser/Camps/addAccomodation')."';
                </script>"; 
        }
    }
    public function addStartdate($camp_id){
        $data['camp_id'] = $camp_id;
        $data['all_date'] = $this->My_model->selectRecord('camp_start_dates', '*', array('camp_id' => $camp_id));
        $this->load->view('include/org_header');
		$this->load->view('organiser/camp_dates', $data);
        $this->load->view('include/org_footer');
    }
    public function save_date($camp_id){
        
        $date = $this->input->post('sdate');
        if(!empty($date)){
            $check_date = $this->My_model->selectRecord('camp_start_dates', '*', array('start_date' => $date, 'camp_id'=>$camp_id));
            if($check_date){
                echo "<script>
                    alert('Duplicate start dates are not allowed!'); 
                    window.location.href = '".base_url('camp_organiser/Camps/addStartdate/').$camp_id."';
                    </script>";
            } else {
                if (new DateTime() > new DateTime($date)) {
                     echo "<script>
                            alert('Please select a valid and future date.'); 
                            window.location.href = '".base_url('camp_organiser/Camps/addStartdate/').$camp_id."';
                        </script>";
                    } else {

                        $add_data = array(
                            'start_date' =>$date,
                            'camp_id' => $camp_id
                        );

                        $insert = $this->My_model->insertRecord('camp_start_dates', $add_data);
                        if($insert){
                            echo "<script>
                                    alert('New Start Date added successfully'); 
                                    window.location.href = '".base_url('camp_organiser/Camps/addStartdate/').$camp_id."';
                                </script>";
                        } else{
                             echo "<script>
                                    alert('Something went wrong'); 
                                    window.location.href = '".base_url('camp_organiser/Camps/addStartdate/').$camp_id."';
                                </script>";
                        }
                    }   
            }
        } else {
             echo "<script>
                        alert('Error! Can not save blank date'); 
                        window.location.href = '".base_url('camp_organiser/Camps/addStartdate/').$camp_id."';
                    </script>";
        }
    }
    public function del_start_date($id){
        $where = array('id' => $this->input->post('date_id'));
        $del = $this->My_model->deleteRecordPerm('camp_start_dates',$where);
        if($del){
            echo "<script>
                    alert('Date Deleted'); 
                    window.location.href = '".base_url('camp_organiser/Camps/addStartdate/').$id."';
                </script>";
        }
    }
    public function camp_accomodation($camp_id){
        $data['camp_id'] = $camp_id;
        $data['camp'] = $this->My_model->selectRecord('camp', '*', array('camp_id' => $camp_id));
        $data['camp_by_organiser'] = $this->My_model->selectRecord('camp_accomodation', '*', array('org_id' => $this->session->userdata('org_id')));
        $this->load->view('include/org_header');
		$this->load->view('organiser/accomodation', $data);
        $this->load->view('include/org_footer');
    }
    public function camp_acc($camp_id){
        $acc = "";
        if($this->input->post('acc')){
           $acc = implode(',',$this->input->post('acc'));
        }
        
        $update_data = array(
            'accomodation' => $acc
        );
        
        $updt = $this->My_model->updateRecord('camp', $update_data, array('camp_id' => $camp_id));
        if($updt>0){
            echo "<script>
                    alert('Accomodation detail for this camp updated successfully'); 
                    window.location.href = '".base_url('camp_organiser/Camps')."';
                </script>";
        } else {
           echo "<script>
                    alert('Something went wrong, try again Later'); 
                    window.location.href = '".base_url('camp_organiser/Camps/camp_accomodation/').$camp_id."';
                </script>"; 
        }
    }
}