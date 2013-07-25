<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newsletter_confirmation extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	public function index()
	{	
		$this->set_wrapper_elements('html/newsletter-confirmation');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */