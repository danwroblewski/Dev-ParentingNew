<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guides extends MY_Controller {

	public function __construct()
	{//echo "cnstruct";
		
		parent::__construct();
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
		//index();
	}
	
	public function index()
	{	//echo "index";
		$this->load->helper(array('url', 'text'));
		$this->load->model('Ws_Formater_Model');
		$this->data['list'] 		= $this->Ws_Formater_Model->get_list_all('guides');
		//$this->data['guides_list'] 	= $this->load->view('content/guides-list', $this->data, TRUE);
		//$this->set_wrapper_elements('html/guides-list');	
		$this->set_wrapper_elements('html/guides');			
	}
	
	//--------------------------------------------------------------------
	// Individual guide / file name = guides-content.php
	//--------------------------------------------------------------------
	public function guides_content()
	{
		$this->load->helper('text');
		//echo "<br>ok1";
		
		$this->load->model('Ws_Formater_Model');
		
		//echo "<br>ok2";
		$nid	= $this->Ws_Formater_Model->_set_nid(2, 'guides');
		//echo "<br>ok3---".$nid;
		// If no id send to error page
		if($nid == '')
		{
			show_404('error', TRUE);
			exit;
		}
		//echo "<br>ok9---".$nid;exit;
		// Gather Content
		
		$this->data['item'] 	      	= $this->Ws_Formater_Model->get_entry('guides', $nid);			//looking for service name
		$this->data['list'] 			= $this->Ws_Formater_Model->get_list_all('guides');
		foreach($this->data['item']->field_article_taxonomy->und as $tid) {
			$tag 						= $this->Ws_Formater_Model->get_taxonomy('taxonomy', $tid->tid);
			$this->data['tags'][] 		= $tag->name;
		}
		
		$this->data['og_image']       = @$this->data['news']->field_news_images->und[0]->filename;
		$this->data['og_description'] = word_limiter(strip_tags($this->data['news']->body->und[0]->value), 20);
		$this->set_wrapper_elements('content/guides-content');
	}
	

}
