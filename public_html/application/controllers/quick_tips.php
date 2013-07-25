<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quick_tips extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	public function index()
	{
		$this->load->helper(array('url', 'text'));
		
		$this->load->model('Ws_Formater_Model');
		$this->data['list'] 						= $this->Ws_Formater_Model->get_list_all('quick_tips');
		$this->data['quick_tips_list'] 				= $this->load->view('content/quick-tips-list', $this->data, TRUE);
		
		$this->set_wrapper_elements('html/quick-tips');
	}

	//--------------------------------------------------------------------
	// Individual Story / file name = list-interior.php
	// Follow articles and make a videos area too.
	//--------------------------------------------------------------------
	public function quick_tips_content()
	{
		$this->load->helper('text');		
		
		$this->load->model('Ws_Formater_Model');
		$nid							= $this->Ws_Formater_Model->_set_nid(2, 'quick_tips');
		
		// If no id send to error page
		if($nid == '')
		{
			show_404('error', TRUE);
			exit;
		}
		
		// Gather Content
		$this->data['item']				= $this->Ws_Formater_Model->get_entry('quick_tips', $nid);
		
		if(count($this->data['item']->field_quick_tip_taxonomy->und) > 0) {
			foreach($this->data['item']->field_quick_tip_taxonomy->und as $tid) {
				$tag 						= $this->Ws_Formater_Model->get_taxonomy('taxonomy', $tid->tid);
				$this->data['tags'][] 		= $tag->name;
			}
		}
		
		$this->data['og_image']			= @$this->data['quick_tips']->field_news_images->und[0]->filename;
		$this->data['og_description']	= word_limiter(strip_tags($this->data['quick_tips']->body->und[0]->value), 20);
		
		$this->set_wrapper_elements('content/quick-tips-content');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */