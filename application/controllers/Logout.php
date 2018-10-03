<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
        foreach($_SESSION as $key => $val)
        {
            if ($key !== 'selected_currency')
            {
              unset($_SESSION[$key]);
            }
        }
        redirect("https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=".base_url());
	}
    
}
