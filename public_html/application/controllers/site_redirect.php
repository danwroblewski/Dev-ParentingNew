<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_Redirect extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
    }
    
    public function index() {
	    $redirect_list = $this->config->item('site_redirects');
	    
	    foreach($redirect_list as $url => $redirect)
	    {
			if(strtolower($url) == strtolower($this->uri->uri_string()))
			{
				redirect($redirect, 'location', 301);
			}  
	    }
	    
    }

}
