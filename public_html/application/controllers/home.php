<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{	
		$this->set_wrapper_elements('html/home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */