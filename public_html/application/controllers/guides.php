<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guides extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'text'));		
		$this->load->model('Ws_Other_Formater_Model');
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	public function index()
	{
	
		$this->set_wrapper_elements('html/guides');
	}
	
	
	public function articles()
	{
		($this->uri->segment(3)=='relationships-dating') ? $key ='relationships/dating': $key = $this->uri->segment(3);
		
		$this->data['result'] 		= $this->Ws_Other_Formater_Model->get_list($key,'guides');
		$this->data['heading'] 		= "Articles";
		$this->data['content_type'] = "Article";
		$this->data['url'] 			= "article";		
		$this->data['image'] 		= "icons-mini-article.png";
		$this->set_wrapper_elements('content/guides-content');
		
	}
	
		
	public function quicktips()
	{
		($this->uri->segment(3)=='relationships-dating') ? $key ='relationships/dating': $key = $this->uri->segment(3);
		$this->data['result'] 		= $this->Ws_Other_Formater_Model->get_list($key,'guides');
		$this->data['heading'] 		= "Quick Tips";
		$this->data['content_type'] = "Quick Tips";
		$this->data['image'] 		= "icons-mini-tip.png";
		$this->data['url'] 			= "quick-tips";	
		$this->set_wrapper_elements('content/guides-content');
		
	}

	
	public function questions_and_answers()
	{
		($this->uri->segment(3)=='relationships-dating') ? $guide ='relationships/dating': $guide = $this->uri->segment(3);
		switch($this->uri->segment(3))
		{
			case "communicating-with-teens": 
										$key	= 'communicate, teen';
										break;
			case "youth-sports": 
								$key	= 'athletic, sports';
								break;
			case "bullying":	
							$key	= 'bully, bullying';		
							break;					  
					
			case "relationships-dating":	
				 						$key	= 'dating, relationship';
										 break;					  
									
			case "potty-training":	
									 $key	= 'potty training, potty, toilet';
									 break;					  
			
			case "harmful-behaviors":
									 $key	= 'abuse, aggressive, anger, cutting, self-injury';		
									 break;					  
			
			case "media-and-parenting":	 
										$key	= 'technology, internet, media, web';		
										break;					  
			
			case "sleep-issues":	
									 $key	= 'bedtime, sleep, tired';		
								  	break;					  
			case "back-to-school":	
									 $key	= 'school';		
								  	break;	
		}
		
		$this->data['result1'] 		= $this->Ws_Other_Formater_Model->get_expert_other_tags($guide,$key);

		$this->data['heading'] 		= "Questions And Answers";
		#$this->data['content_type'] = "Questions and Answers";
		$this->data['url'] 			= "questions-and-answers";	
		$this->data['image'] 		= "icons-mini-q_and_a.png";
		$this->set_wrapper_elements('content/guides-content');
			
	}
	
	public function videos()
	{
		($this->uri->segment(3)=='relationships-dating') ? $key ='relationships/dating': $key = $this->uri->segment(3);
		$this->data['result'] 		= $this->Ws_Other_Formater_Model->get_list($key,'guides');
		$this->data['heading'] 		= "Videos";
		$this->data['content_type'] = "Videos";
		$this->data['url'] 			= "videos";	
		$this->data['image'] 		= "icons-mini-video.png";
		$this->set_wrapper_elements('content/guides-content');
			
	}

}
