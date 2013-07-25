<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'text'));		
		$this->load->model('Ws_Category_Model');
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	public function index()
	{
		$tag						= $this->uri->segment(2);
		$this->data['result'] 		= $this->Ws_Category_Model->get_category($tag,'category');
		
		$this->data['tag']			= $tag;
		$this->data['list'] 		= $this->load->view('content/category-list', $this->data, TRUE);
		$this->set_wrapper_elements('html/category');			
		
	}
	
	
	

}
