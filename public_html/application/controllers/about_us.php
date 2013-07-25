<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_Us extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	public function index()
	{	
		$this->set_wrapper_elements('html/about-us');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */