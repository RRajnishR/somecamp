<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
        if(!$this->session->userdata('email'))
            redirect(base_url());
        
        $data['users'] = $this->My_model->selectRecord('users', '*', array('email' => $this->session->userdata('email')));
        $this->load->view('include/header');
		$this->load->view('user_profile', $data);
        $this->load->view('include/footer');
	}
    
    public function update_guardian(){
        $user_details = array();
        $message = "";
        $new_file_name="";
        if($_FILES['id_image']['name'])
        {
            $fileExtensions = ['jpeg','jpg','png', 'gif'];
            $fileName = $_FILES['id_image']['name'];
            $fileExtension =  pathinfo($fileName, PATHINFO_EXTENSION);
            if(!$_FILES['id_image']['error'])
            {
                if(in_array($fileExtension,$fileExtensions)){
                    $new_file_name = date('dmYHis').".".$fileExtension; //rename file
                    if($_FILES['id_image']['size'] > (1024000)) //can't be larger than 500kb
                    {
                        $valid_file = false;
                        $message = 'Oops! Your file\'s size is bigger than 500kb. Retry after compressing / resizing.';
                    } else{
                        $valid_file = true;
                    }

                    if($valid_file){
                        //move it to where we want it to be
                        if(move_uploaded_file($_FILES['id_image']['tmp_name'], 'assets/uploads/users/guardian_id/'.$new_file_name)){
                            $user_details = array(
                                'id_type' => $this->input->post('id_type'),
                                'id_of' => $this->input->post('id_of'),
                                'id_image' => $new_file_name,
                                'id_contact' => $this->input->post('id_contact')
                            );
                        } else {
                            $message = 'Upload failed, Try again later!!';
                        }
                    }
                } else {
                    $message="Sorry, we only accept images with extension jpg or png or gif.";
                }
            }
            else{
                $message = 'Ooops! error: '.$_FILES['id_image']['error']." occured, try again later.";
            }
        } else {
            $user_details = array(
                'id_type' => $this->input->post('id_type'),
                'id_of' => $this->input->post('id_of'),
                'id_contact' => $this->input->post('id_contact')       
            );
        }
        $done = $this->My_model->updateRecord('users', $user_details, array('email' => $this->session->userdata('email')));
        if($done == '1' || $done =='0'){
            $message = "Awesome, Your Guardian\'s details updated successfully";
            
        } 
        echo "<script>
                    alert('".$message."'); 
                    window.location.href = '".base_url('Profile')."';
                </script>";
    }
    
    public function update_profile(){
        $user_details = array();
        $message = "";
        $new_file_name="";
        if($_FILES['photo']['name'])
        {
            $fileExtensions = ['jpeg','jpg','png', 'gif'];
            $fileName = $_FILES['photo']['name'];
            $fileExtension =  pathinfo($fileName, PATHINFO_EXTENSION);
            if(!$_FILES['photo']['error'])
            {
                if(in_array($fileExtension,$fileExtensions)){
                    $new_file_name = date('dmYHis').".".$fileExtension; //rename file
                    if($_FILES['photo']['size'] > (500000)) //can't be larger than 500kb
                    {
                        $valid_file = false;
                        $message = 'Oops! Your file\'s size is bigger than 500kb. Retry after compressing / resizing.';
                    } else{
                        $valid_file = true;
                    }

                    if($valid_file){
                        //move it to where we want it to be
                        if(move_uploaded_file($_FILES['photo']['tmp_name'], 'assets/uploads/users/profile/'.$new_file_name)){
                            $user_details = array(
                                'first_name' => $this->input->post('first_name'),
                                'last_name' => $this->input->post('last_name'),
                                'photo' => $new_file_name,
                                'dob' => $this->input->post('dob'),
                                'gender' => $this->input->post('gender'),
                            );
                            $this->session->set_userdata('photo', $new_file_name);
                        } else {
                            $message = 'Upload failed, Try again later!!';
                        }
                    }
                } else {
                    $message="Sorry, we only accept images with extension jpg or png.";
                }
            }
            else{
                $message = 'Ooops! error: '.$_FILES['photo']['error']." occured, try again later.";
            }
        } else {
            $user_details = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'dob' => $this->input->post('dob'),
                'gender' => $this->input->post('gender'),       
            );
        }
        $done = $this->My_model->updateRecord('users', $user_details, array('email' => $this->session->userdata('email')));
        if($done == '1' || $done =='0'){
            $message = "Awesome, Your Profile updated successfully";
            
        } 
        echo "<script>
                    alert('".$message."'); 
                    window.location.href = '".base_url('Profile')."';
                </script>";
    }
    
    public function changePass(){
        $data['users'] = $this->My_model->selectRecord('users', array('id', 'password'), array('email' => $this->session->userdata('email')));
        $this->load->view('include/header');
		$this->load->view('change_pass', $data);
        $this->load->view('include/footer');
    }
    public function update_password(){
        $old = $this->input->post('old_pw');
        $new_pw = $this->input->post('new_pw');
        $renew_pw = $this->input->post('renew_pw');
        
        if($new_pw == $renew_pw){
            $check = $this->My_model->selectRecord('users', array('password'), array('email' => $this->session->userdata('email')));
            $pass = $check[0]->password;
            if($pass == md5($old)){
                $where = array('email' => $this->session->userdata('email'));
                $change = array('password' => md5($new_pw));
                $done = $this->My_model->updateRecord('users', $change, $where);
                if($done > 0){
                    echo "<script>
                    alert('Password Changed Successfully, Try again'); 
                    window.location.href = '".base_url('Profile/changePass')."';
                </script>";
                } else {
                    echo "<script>
                    alert('Something went wrong, Try again'); 
                    window.location.href = '".base_url('Profile/changePass')."';
                </script>";
                }
            } else {
                echo "<script>
                    alert('Wrong Password, Try again'); 
                    window.location.href = '".base_url('Profile/changePass')."';
                </script>"; 
            }
        } else {
           echo "<script>
                    alert('New Passwords doesn\'t match, Try again'); 
                    window.location.href = '".base_url('Profile/changePass')."';
                </script>"; 
        }
        
    }
}