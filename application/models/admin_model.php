<?php
class Admin_model extends CI_Model {

    function __construct()
    {        
        parent::__construct();
    }
	
	public function login_admin($data)
    {		
		$query = $this->db->get_where('admin_user', array('user_name' => $data['user_name'],'password' => md5($data['password'])) );
		$aResult = $query->result_array() ;
		//echo "<pre />"; print_r($aResult); die();
		//echo " >> ". $query->num_rows();die;
		if( $query->num_rows() > 0 && ( $aResult[0]['status'] != 0 ) )
		{						
			$aSess = array(							
					'admin_id' => $aResult[0]['id'],
					'admin_name'  => $aResult[0]['user_name'],
					'user_type'  => $aResult[0]['user_type']
					);
			$this->session->set_userdata($aSess);
			if( $aResult[0]['user_type'] == 3 )  // teacher
			{
				redirect('camp_admin/Admin/teacher');
			}
			else if( $aResult[0]['user_type'] == 2 )  // center admin
			{
				redirect('camp_admin/Admin');
			}
			else if( $aResult[0]['user_type'] == 4 )  // Operator
			{
				redirect('camp_admin/Admin');
			}			
			else
				redirect('camp_admin/Admin');           // super admin
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
	
	public function change_password($data)
    {		
		$where = array('id' => $this->session->userdata('admin_id'));
		//print_r($where); die(); 	
		$this->db->where($where);
        $result = $this->db->update('admin_user', $data);
        return ($result) ? TRUE : FALSE;
    }

	public function forgotPassword($stremail)
    {
		$where  =  array('user_name' => $stremail);
		$aRes   = $this->My_model->selectRecord('admin_user','*',$where,'','');
		
		//echo "<pre />";print_r($aRes)	; echo $aRes[0]->code ; die();
		$this->load->library('email');
		$to_email = $stremail;
		
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		
		$subject = 'Langecole Password change';
		$message = 'Dear User,<br /> <br />You recently requested password change. To reset your password, follow the link below: .<br /><br />
					'.base_url().'talgo/admin/recoveryPassword/' . $aRes[0]->code . '<br /><br /><br />
					<br /><br /><b>Thanks & Regards</b>, <br /> Langecole Team';
			
		$this->email->from('admin@langecole.com', 'langecole');
		$this->email->to($to_email); 
						
		$this->email->subject($subject);
		$this->email->message($message);	
		//$this->email->send();
										
		if($this->email->send())
		{	
			return 1;
		}
		else
		{
			return 2;			
		}       
    }
}
?>