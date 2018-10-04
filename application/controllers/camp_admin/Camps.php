<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camps extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
    }

	public function index()
	{
        if( !$this->session->userdata('admin_id') )
			redirect('camp_admin/Admin/login','refresh'); 
        
        $data['camps'] = $this->My_model->selectRecord('camp', '*', '', '');
        $this->load->view('include/admin_header');
		$this->load->view('admin/camps', $data);
        $this->load->view('include/admin_footer');
	}
    public function view_camp($camp_id){
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
        $this->load->view('include/admin_header');
		$this->load->view('admin/this_camp', $data);
        $this->load->view('include/admin_footer');
    }
    public function change_status($id, $status){
        $where = array('camp_id' => $id);
        $status = array('status' => $status);
        $updt = $this->My_model->updateRecord('camp', $status, $where);
        if($updt>0){
             echo "<script>
                    alert('Status Changed'); 
                    window.location.href = '".base_url('camp_admin/Camps/view_camp/').$id."';
                </script>";
        } else {
            echo "<script>
                    alert('Something went wrong'); 
                    window.location.href = '".base_url('camp_admin/Camps/view_camp/').$id."';
                </script>";
        }
    }
}
?>