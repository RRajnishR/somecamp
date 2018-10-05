<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiries extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('organiser_model');
    }

	public function index()
	{
        if( !$this->session->userdata('org_id') )
			redirect('camp_organiser/Dashboard/login','refresh'); 
        $data['enquiries'] = $this->My_model->selectRecord('enquiry', '*', array('org_id' => $this->session->userdata('org_id'), 'forward_to_org' => '2'));
        
        $this->load->view('include/org_header');
		$this->load->view('organiser/enquiry', $data);
        $this->load->view('include/org_footer');
	}
    public function send_save_reply($eid){
        $reply = $this->input->post('reply');
        if(!$reply==""){
            $where = array('id' => $eid);
            $change = array('reply' => $reply, 'replied_by' => $this->session->userdata('org_id'));
            $updt = $this->My_model->updateRecord('enquiry', $change, $where);
            if($updt>0){
                
            } else {
                echo "<script>
                        alert('Something went wrong'); 
                        window.location.href = '".base_url('camp_admin/Enquiries/view/1').$enqid."';
                    </script>";
            }
        } else {
             echo "<script>
                    alert('Reply Can not be sent blank'); 
                    window.location.href = '".base_url('camp_admin/Enquiries/view/1').$enqid."';
                </script>";
        }
    }
}