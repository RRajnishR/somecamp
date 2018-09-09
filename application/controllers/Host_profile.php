<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hostsignup extends CI_Controller {

	public function index(){
        $this->load->view('include/header');
		$this->load->view('host_profile.php');
        $this->load->view('include/footer');
	}
    
}
