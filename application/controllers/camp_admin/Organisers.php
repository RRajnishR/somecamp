<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisers extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
    }

	public function index()
	{
        if( !$this->session->userdata('admin_id') )
			redirect('camp_admin/Admin/login','refresh'); 
        
        $data['organisers'] = $this->My_model->selectRecord('organisers', array('id', 'first_name', 'last_name', 'email', 'b_name', 'b_website', 'is_owner', 'status'), '', '');
        $this->load->view('include/admin_header');
		$this->load->view('admin/organisers', $data);
        $this->load->view('include/admin_footer');
	}
    
    public function view_org($org_id){
        $data['user'] = $this->My_model->selectRecord('organisers', '*', array('id' => $org_id), '');
        $data['country'] = $this->My_model->selectRecord('countries', 'countries_id, countries_name','');
        $this->load->view('include/admin_header');
		$this->load->view('admin/this_organiser', $data);
        $this->load->view('include/admin_footer');
    }
    
    public function change_status($id, $status){
        $where = array('id' => $id);
        $status = array('status' => $status);
        $updt = $this->My_model->updateRecord('organisers', $status, $where);
        if($updt>0){
             echo "<script>
                    alert('Status Changed'); 
                    window.location.href = '".base_url('camp_admin/Organisers/view_org/').$id."';
                </script>";
        }
    }
}
?>