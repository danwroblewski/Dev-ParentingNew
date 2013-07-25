<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Basic_Page extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	public function index()
	{
		$this->load->helper(array('url', 'text'));
		
		$this->load->model('Ws_Formater_Model');
		$this->data['list'] 		= $this->Ws_Formater_Model->get_list_all('basic_page');
		print_r($this->data['list']);
		$this->data['page_list'] 	= $this->load->view('content/basic-page-list', $this->data, TRUE);
		
		$this->set_wrapper_elements('html/basic-page');
	}
	
//--------------------------------------------------------------------
// Individual basic_ / file name = basic-content.php
//--------------------------------------------------------------------
	public function basic_content()
	{
		$this->load->helper('text');
		
		$this->load->model('Ws_Formater_Model');
		echo $nid							= $this->Ws_Formater_Model->_set_nid(2, 'basic_page');
		
		// If no id send to error page
		if($nid == '')
		{
			show_404('error', TRUE);
			exit;
		}
		
		$this->data['item'] 	      	= $this->Ws_Formater_Model->get_entry('basic_page', $nid);			//looking for service name
		
		$this->set_wrapper_elements('content/basic-page-content');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */