<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	public function index()
	{
		$this->load->helper(array('url', 'text'));
		
		$this->load->model('Ws_Formater_Model');
		$this->data['list'] = $this->Ws_Formater_Model->get_list_all('article');
		$this->data['article_list'] = $this->load->view('content/article-list', $this->data, TRUE);
		
		$this->set_wrapper_elements('html/article');
	}
	
//--------------------------------------------------------------------
// Individual Article / file name = article-content.php
//--------------------------------------------------------------------
	public function article_content()
	{
		$this->load->helper('text');
		
		$this->load->model('Ws_Formater_Model');
		$nid	= $this->Ws_Formater_Model->_set_nid(2, 'article');
		
		// If no id send to error page
		if($nid == '')
		{
			show_404('error', TRUE);
			exit;
		}
		
		// Gather Content
		$this->data['item'] 	      = $this->Ws_Formater_Model->get_entry('article', $nid);			//looking for service name
		
		foreach($this->data['item']->field_article_taxonomy->und as $tid) {
			$tag = $this->Ws_Formater_Model->get_taxonomy('taxonomy', $tid->tid);
			$this->data['tags'][] = $tag->name;
		}
		
		$this->data['og_image']       = @$this->data['news']->field_news_images->und[0]->filename;
		$this->data['og_description'] = word_limiter(strip_tags($this->data['news']->body->und[0]->value), 20);
		$this->set_wrapper_elements('content/article-content');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */