<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camp extends CI_Controller {

	public function index()
	{
        
	}
    public function view($campid=null){
        //$id = explode('-', $campid)[0];
        $this->load->view('include/header');
		$this->load->view('viewcamp');
        $this->load->view('include/footer');
    }
}
