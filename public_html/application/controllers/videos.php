<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Videos extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['printemail'] 				= $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	public function index()
	{
		$this->load->helper(array('url', 'text'));
		
		$this->load->model('Ws_Formater_Model');
		$this->data['list'] 					= $this->Ws_Formater_Model->get_list_all('videos');
		$this->data['video_list'] 				= $this->load->view('content/videos-list', $this->data, TRUE);
		
		$this->set_wrapper_elements('html/videos');
	}

	//--------------------------------------------------------------------
	// Individual Story / file name = list-interior.php
	// Follow articles and make a videos area too.
	//--------------------------------------------------------------------
	public function videos_content()
	{
		//echo "-->".$this->uri->segment(2);
		
		$this->load->helper('text');
		
		$this->load->model('Ws_Formater_Model');
		
		//$nid								= $this->uri->segment(2);
		 $nid								= $this->Ws_Formater_Model->_set_nid(2, 'videos');
		
		// If no id send to error page
		if($nid == '')
		{
			show_404('error', TRUE);
			exit;
		}
		
		// Gather Content
		$this->data['item']					= $this->Ws_Formater_Model->get_entry('videos', $nid);
		
		foreach($this->data['item']->field_video_tags->und as $tid) {
			$tag 							= $this->Ws_Formater_Model->get_taxonomy('taxonomy', $tid->tid);
			$this->data['tags'][] 			= $tag->name;
		}
		
		$this->data['og_image']				= @$this->data['videos']->field_news_images->und[0]->filename;
		$this->data['og_description']		= word_limiter(strip_tags($this->data['videos']->body->und[0]->value), 20);
		
		$this->set_wrapper_elements('content/video-content');
		#$this->set_wrapper_elements('content/home-banner');
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */