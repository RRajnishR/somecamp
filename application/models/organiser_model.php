<?php
class Organiser_model extends CI_Model {

    function __construct()
    {        
        parent::__construct();
    }
	
	public function login_organiser($data)
    {		
		$query = $this->db->get_where('organisers', array('email' => $data['user_name'],'pass' => md5($data['password'])) );
		$aResult = $query->result_array() ;
		if( $query->num_rows() > 0 && ( $aResult[0]['status'] != 0 ) )
		{						
			$aSess = array(							
					'org_id' => $aResult[0]['id'],
					'fname'  => $aResult[0]['first_name'],
					'lname'  => $aResult[0]['last_name'],
                    'email'  => $aResult[0]['email'],
                    'acc_type'  => $aResult[0]['acc_type'],
                    'b_photo'  => $aResult[0]['b_photo'],
                    'image' => $aResult[0]['user_name'],
					);
			$this->session->set_userdata($aSess);
            redirect('camp_organiser/Dashboard'); 
		}
		else if( $query->num_rows() > 0 && ( $aResult[0]['status'] == 0 ) )
		{
			return '-1';
		}
		else
		{
		    return false;
		}		
    }
    public function retrieve_business_users(){
        
    }
}
?>