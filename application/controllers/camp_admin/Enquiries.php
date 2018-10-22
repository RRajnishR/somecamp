<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiries extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
    }

	public function index()
	{
        if( !$this->session->userdata('admin_id') )
			redirect('camp_admin/Admin/login','refresh'); 
        
        $data['enquiries'] = $this->My_model->selectRecord('enquiry', '*', '', '');
        $this->load->view('include/admin_header');
		$this->load->view('admin/enquiries', $data);
        $this->load->view('include/admin_footer');
	}
    public function view($enqid){
        $data['enquiries'] = $this->My_model->selectRecord('enquiry', '*', array('id' => $enqid), '');
        $data['enq_history'] = $this->My_model->selectRecord('enq_history', '*', array('enq_id' => $enqid));
        $data['enq_id'] = $enqid;
        $this->load->view('include/admin_header');
		$this->load->view('admin/enquiry_view', $data);
        $this->load->view('include/admin_footer');
    }
    public function forward($enqid){
        $where = array('id' => $enqid);
        $change = array('forward_to_org' => '2');
        $updt = $this->My_model->updateRecord('enquiry', $change, $where);
        if($updt>0){
             echo "<script>
                    alert('Forwarded to Organiser'); 
                    window.location.href = '".base_url('camp_admin/Enquiries/view/').$enqid."';
                </script>";
        } else {
            echo "<script>
                    alert('Something went wrong'); 
                    window.location.href = '".base_url('camp_admin/Enquiries/view/1').$enqid."';
                </script>";
        }
    }
    public function send_save_reply($eid){
        $reply = $this->input->post('reply');
        if(!$reply==""){
            $where = array('id' => $eid);
            $change = array('reply' => $reply, 'replied_by' => $this->session->userdata('admin_name'));
            $updt = $this->My_model->updateRecord('enquiry', $change, $where);
            if($updt>0){
                 //send Mail
                
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
    public function continue_enq($enq_id){
        $insert_data = array(
            'replied_by' => 'Admin',
            'reply' => $this->db->escape($this->input->post('reply_to_camp')),
            'replier_id' => $this->session->userdata('admin_id'),
            'reply_time' => date("Y-m-d h:i:sa"),
            'view_stat' => 0,
            'enq_id' => $enq_id
        );
        
        $save = $this->My_model->insertRecord('enq_history', $insert_data);
        if($save){
            echo "<script>
                    alert('Reply Sent!'); 
                    window.location.href = '".base_url()."camp_admin/Enquiries/view/".$enq_id."';
                </script>";
        } else {
            echo "<script>
                    alert('Something went wrong, Try again later.'); 
                    window.location.href = '".base_url()."camp_admin/Enquiries/view/".$enq_id."';
                </script>";
        }
    }
}
?>