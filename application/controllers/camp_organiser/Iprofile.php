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
        if($this->session->userdata('acc_type') == '2')
            redirect('camp_organiser/Dashboard/','refresh');
        
        $data['user'] = $this->My_model->selectRecord('organisers', '*', array('id' => $this->session->userdata('org_id')));
        $data['country'] = $this->My_model->selectRecord('countries', 'countries_id, countries_name','');
        
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
                $message = 'Ooops! error: '.$_FILES['p_scan']['error']." occured, try again later.";
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
        if( !$this->session->userdata('org_id') )
			redirect('camp_organiser/Dashboard/login','refresh');
        
        $business_details = array();
        $message = "";
        $new_file_name="";
        if($_FILES['b_cert_scan']['name'])
        {
            $fileExtensions = ['jpeg','jpg','png'];
            $fileName = $_FILES['b_cert_scan']['name'];
            $fileExtension =  pathinfo($fileName, PATHINFO_EXTENSION);
            //if no errors...
            if(!$_FILES['b_cert_scan']['error'])
            {
                if(in_array($fileExtension,$fileExtensions)){
                    $new_file_name = $this->session->userdata('org_id')."_".date('dmYHis').".".$fileExtension; //rename file
                    if($_FILES['b_cert_scan']['size'] > (1024000)) //can't be larger than 1 MB
                    {
                        $valid_file = false;
                        $message = 'Oops! Your file\'s size is bigger than 1 MB. Retry after compressing / resizing.';
                    } else{
                        $valid_file = true;
                    }

                    if($valid_file){
                        //move it to where we want it to be
                        if(move_uploaded_file($_FILES['b_cert_scan']['tmp_name'], 'assets/uploads/organisers/b_certs/'.$new_file_name)){
                            $business_details = array(
                                'b_name' => $this->input->post('bname'),
                                'b_desc' => $this->input->post('bdesc'),
                                'b_website' => $this->input->post('bweb'),
                                'b_social' => $this->input->post('bsocial'),
                                'b_cert_id' => $this->input->post('bcertid'),
                                'b_cert_body' => $this->input->post('certbody'),
                                'b_cert_scan' => $new_file_name
                            );
                            
                        } else {
                            $message = 'Upload failed, Try again later!!';
                        }
                    }
                } else {
                    $message="Sorry, we only accept images with extension jpg or png.";
                }
            }
            else{
                $message = 'Ooops! error: '.$_FILES['b_cert_scan']['error']." occured, try again later.";
            }
        } else {
            $business_details = array(
                'b_name' => $this->input->post('bname'),
                'b_desc' => $this->input->post('bdesc'),
                'b_website' => $this->input->post('bweb'),
                'b_social' => $this->input->post('bsocial'),
                'b_cert_id' => $this->input->post('bcertid'),
                'b_cert_body' => $this->input->post('certbody'),       
            );
        }
        $done = $this->My_model->updateRecord('organisers', $business_details, array('id' => $this->session->userdata('org_id')));
        if($done == '1' || $done =='0'){
            $message = "Awesome, Your business details updated successfully";
            
        } 
        echo "<script>
                    alert('".$message."'); 
                    window.location.href = '".base_url('camp_organiser/Iprofile')."';
                </script>";
    }
    function getExtension($str) 
	{
		$i = strrpos($str,".");
		if (!$i) { return ""; } 
		$l = strlen($str) - $i;
		$ext = substr($str,$i+1,$l);
		return $ext;
	}
	
	/*
	**  compress image
	*/
	
	function compressImage($ext,$uploadedfile,$path,$actual_image_name,$newwidth)
	{
		if($ext=="jpg" || $ext=="jpeg" )
		{
		$src = imagecreatefromjpeg($uploadedfile);
		}
		else if($ext=="png")
		{
		$src = imagecreatefrompng($uploadedfile);
		}
		else if($ext=="gif")
		{
		$src = imagecreatefromgif($uploadedfile);
		}
		else
		{
		$src = imagecreatefrombmp($uploadedfile);
		}
																		
		list($width,$height)=getimagesize($uploadedfile);
		$newheight=($height/$width)*$newwidth;
		$tmp=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		$filename = $path.$newwidth.'_'.$actual_image_name;
		imagejpeg($tmp,$filename,100);
		imagedestroy($tmp);
		$img_filename = $newwidth.'_'.$actual_image_name;
		return $img_filename;
	}
    public function uploadImage(){
        $empPath = 'assets/uploads/organisers/pro_image/';
        $path =  FCPATH.$empPath;
        $actual_image_name="";
        $valid_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
        if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
        {
            $imagename = $_FILES['photoimg']['name'];
            $size = $_FILES['photoimg']['size'];

            if(strlen($imagename))
            {
                $ext = strtolower($this->getExtension($imagename));
                if(in_array($ext,$valid_formats))
                {
                    if($size<(1024*1024))
                    {
                        $actual_image_name = time().'.'.$ext ; //.substr(str_replace(" ", "_", $imagename), 5);
                        $uploadedfile = $_FILES['photoimg']['tmp_name'];

                        $widthArray = array(80,80);
                        foreach($widthArray as $newwidth)
                        {
                            $filename=$this->compressImage($ext,$uploadedfile,$path,$actual_image_name,$newwidth);
                            $where   = array('id' => $this->session->userdata('org_id'));
                            $data    = array('image' => $filename);
                            $bStatus = $this->My_model->updateRecord('organisers',$data,$where);
                            //header("Location:".base_url('camp_organiser/Iprofile/'));
                            $this->session->set_userdata('image', $filename);
                            echo "<script>
                                    alert('Profile Image changed successfully'); 
                                    window.location.href = '".base_url('camp_organiser/Iprofile')."';
                                </script>";
                        }	
                    }
                    else
                        echo "<script>
                                    alert('Image size too big, Try images of size less than 1 MB'); 
                                    window.location.href = '".base_url('camp_organiser/Iprofile')."';
                                </script>";					
                }
                else
                    echo "<script>
                            alert(''); 
                            window.location.href = '".base_url('camp_organiser/Iprofile')."';
                        </script>";	
            }
            else
                echo "Please select image..!";
            exit;
        }	
    }
    public function uploadFeaturedImage(){
        $message = "";
        $new_file_name="";
        if($_FILES['bphoto']['name'])
        {
            $fileExtensions = ['jpeg','jpg','png'];
            $fileName = $_FILES['bphoto']['name'];
            $fileExtension =  pathinfo($fileName, PATHINFO_EXTENSION);
            //if no errors...
            if(!$_FILES['bphoto']['error'])
            {
                if(in_array($fileExtension,$fileExtensions)){
                    $new_file_name = $this->session->userdata('org_id')."_".date('dmYHis').".".$fileExtension; //rename file
                    if($_FILES['bphoto']['size'] > (1536000)) //can't be larger than 1.5 MB
                    {
                        $valid_file = false;
                        $message = 'Oops! Your file\'s size is bigger than 1 MB. Retry after compressing / resizing.';
                    } else{
                        $valid_file = true;
                    }

                    if($valid_file){
                        //move it to where we want it to be
                        if(move_uploaded_file($_FILES['bphoto']['tmp_name'], 'assets/uploads/organisers/featured/'.$new_file_name)){
                            $where   = array('id' => $this->session->userdata('org_id'));
                            $data    = array('b_photo' => $new_file_name);
                            $bStatus = $this->My_model->updateRecord('organisers',$data,$where);
                            $message = "Awesome, Your business image was uploaded successfully";
                        } else {
                            $message = 'Upload failed, Try again later!!';
                        }
                    }
                } else {
                    $message="Sorry, we only accept images with extension jpg or png.";
                }
            }
            else{
                $message = 'Ooops! error: '.$_FILES['bphoto']['error']." occured, try again later.";
            }
        } else {
            $message = "";
        }
        echo "<script>
                    alert('".$message."'); 
                    window.location.href = '".base_url('camp_organiser/Iprofile')."';
                </script>";
    }
}