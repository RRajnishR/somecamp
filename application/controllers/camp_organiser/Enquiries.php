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
        $data['enquiries'] = $this->My_model->selectRecord('enquiry', '*', array('org_id' => $this->session->userdata('org_id')));
        
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
    public function reply($enq_id){
        if( !$this->session->userdata('org_id') )
			redirect('camp_organiser/Dashboard/login','refresh'); 
        
        $data['enq_id'] = $enq_id;
        $data['enq_history'] = $this->My_model->selectRecord('enq_history', '*', array('enq_id' => $enq_id));
        $this->load->view('include/org_header');
		$this->load->view('organiser/enquiry_his', $data);
        $this->load->view('include/org_footer');
    }
    public function continue_enq($enq_id){
        $insert_data = array(
            'replied_by' => 'Org',
            'reply' => $this->db->escape($this->input->post('reply_to_camp')),
            'replier_id' => $this->session->userdata('org_id'),
            'reply_time' => date("Y-m-d h:i:sa"),
            'view_stat' => 0,
            'enq_id' => $enq_id
        );
        
        $save = $this->My_model->insertRecord('enq_history', $insert_data);
        if($save){
            echo "<script>
                    alert('Reply Sent!'); 
                    window.location.href = '".base_url()."camp_organiser/Enquiries/reply/".$enq_id."';
                </script>";
        } else {
            echo "<script>
                    alert('Something went wrong, Try again later.'); 
                    window.location.href = '".base_url()."camp_organiser/Enquiries/reply/".$enq_id."';
                </script>";
        }
    }
}