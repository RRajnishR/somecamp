<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
    }

	public function index()
	{
        if( !$this->session->userdata('admin_id') )
			redirect('camp_admin/Admin/login','refresh'); 
        
        $data['users'] = $this->My_model->selectRecord('users', '*', '', '');
        $this->load->view('include/admin_header');
		$this->load->view('admin/users', $data);
        $this->load->view('include/admin_footer');
	}
    public function change_status($id, $status){
        $where = array('id' => $id);
        $status = array('status' => $status);
        $updt = $this->My_model->updateRecord('users', $status, $where);
        if($updt>0){
             echo "<script>
                    alert('Status Changed'); 
                    window.location.href = '".base_url('camp_admin/Users')."';
                </script>";
        }
    }
}
?>