<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Questions_and_answers extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	public function index()
	{
		$this->load->helper(array('url', 'text'));
		
		$this->load->model('Ws_Formater_Model');
		$this->data['list'] 						= $this->Ws_Formater_Model->get_list_all('questions_and_answers');
		$this->data['questions_and_answers_list'] 	= $this->load->view('content/questions-and-answers-list', $this->data, TRUE);
		
		$this->set_wrapper_elements('html/questions-and-answers');
	}

	//--------------------------------------------------------------------
	// Individual Story / file name = list-interior.php
	// Follow articles and make a videos area too.
	//--------------------------------------------------------------------
	public function questions_and_answers_content()
	{
		$this->load->helper('text');		
		
		$this->load->model('Ws_Formater_Model');
		$nid										= $this->Ws_Formater_Model->_set_nid(2, 'questions_and_answers');
		
		// If no id send to error page
		if($nid == '')
		{
			show_404('error', TRUE);
			exit;
		}
		
		// Gather Content
		$this->data['item']							= $this->Ws_Formater_Model->get_entry('questions_and_answers', $nid);
		
		if($this->data['item']->field_ask_expert_taxonomy->und<>""){
		foreach($this->data['item']->field_ask_expert_taxonomy->und as $tid) {
			$tag 									= $this->Ws_Formater_Model->get_taxonomy('taxonomy', $tid->tid);
			$this->data['tags'][] = $tag->name;
		}}
		
		
		$this->data['og_image']						= @$this->data['questions_and_answers']->field_news_images->und[0]->filename;
		$this->data['og_description']				= word_limiter(strip_tags($this->data['questions_and_answers']->body->und[0]->value), 20);
		
		$this->set_wrapper_elements('content/questions-and-answers-content');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */