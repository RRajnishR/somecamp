<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	public function index()
	{
        $this->load->view('include/header');
		$this->load->view('blogs');
        $this->load->view('include/footer');  
	}
}
