<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zexamples extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{	
		$this->set_wrapper_elements('html/delete-test-pages/contentexample');
	}
	
		public function interior()
		{	
			$this->set_wrapper_elements('html/delete-test-pages/interior');
		}
		
		public function qandas()
		{	
			$this->set_wrapper_elements('html/delete-test-pages/qandas');
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */