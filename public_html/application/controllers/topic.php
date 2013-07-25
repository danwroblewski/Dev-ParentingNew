<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topic extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'text'));		
		$this->load->model('Ws_Other_Formater_Model');
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	public function index()
	{
		//echo "<pre>"	;	print_r($this->input->post(topic)); /topic/articles
		if($this->input->post(topic)!="") {
			$this->data['topic']=$this->input->post(topic);
		}
		if($this->input->post(age)!="") {
			$this->data['age']=$this->input->post(age);
		}
		
		$this->set_wrapper_elements('html/topic',$this->data, TRUE);
	}
###### For Browse by page ########
	public function article()
	{
		if($this->input->post(topic)!="") {
			$this->articles();
		}
		elseif($this->input->post(age)!="") {
			$this->data['age']=$this->input->post(age);
		}
		
	}
	
//--------------------------------------------------------------------
// Individual topic / file name = topic-content.php
//--------------------------------------------------------------------
	public function articles()
	{
		if($this->input->post(topic)!="") { $this->data['key']= strtolower(str_replace(" ", "-", $this->input->post(topic))); }
		else {$this->data['key']		 = $this->uri->segment(3); }
		if($this->input->post(age)!="") { $age=$this->input->post(age); }
		$type		 = 'article';
		$this->data['heading'] 		= "Articles";
		$this->data['content_type'] = "Article";
		$this->data['url'] 			= "article";		
		$this->data['image'] 		= "icons-mini-article.png";
		$this->data['result'] 	    = $this->Ws_Other_Formater_Model->get_topic($this->data['key'],$age);			//looking for article 	

		$this->set_wrapper_elements('content/topic-content');
	}
	
	public function quicktips()
	{
		if($this->input->post(topic)!="") { $this->data['key']= strtolower(str_replace(" ", "-", $this->input->post(topic))); }
		else {$this->data['key']		 = $this->uri->segment(3); }
		if($this->input->post(age)!="") { $age=$this->input->post(age); }
		$type = 'quick_tips';
		$this->data['result'] 	    = $this->Ws_Other_Formater_Model->get_topic($this->data['key'],$age);			//looking for quicktips
		$this->data['heading'] 		= "Quick Tips";
		$this->data['content_type'] = "Quick Tips";
		$this->data['image'] 		= "icons-mini-tip.png";
		$this->data['url'] 			= "quick-tips";	
		$this->set_wrapper_elements('content/topic-content');
		
	}
	
	public function questions_and_answers()
	{
		if($this->input->post(topic)!="") { $this->data['key']= strtolower(str_replace(" ", "-", $this->input->post(topic))); }
		else {$this->data['key']		 = $this->uri->segment(3); }
		if($this->input->post(age)!="") { $age=$this->input->post(age); }
		$type = 'ask_an_expert';
		$this->data['result'] 	    = $this->Ws_Other_Formater_Model->get_topic($this->data['key'],$age);			//looking for questions_and_answers 	

		$this->data['heading'] 		= "Questions and Answers";
		$this->data['content_type'] = "Questions and Answers";
		$this->data['image'] 		= "icons-mini-q_and_a.png";
		$this->data['url'] 			= "questions-and-answers";	
		$this->set_wrapper_elements('content/topic-content');
		
	}
	
	public function videos()
	{
		if($this->input->post(topic)!="") { $this->data['key']= strtolower(str_replace(" ", "-", $this->input->post(topic))); }
		else {$this->data['key']		 = $this->uri->segment(3); }
		if($this->input->post(age)!="") { $age=$this->input->post(age); }
		$type						= 'videos';
		$this->data['result'] 	    = $this->Ws_Other_Formater_Model->get_topic($this->data['key'],$age);			//looking for videos 
		#(count($this->data['result'])<>0) ?  $this->data['video']			= 1 :$this->data['video']			= 0;
		$this->data['heading'] 		= "Videos";
		$this->data['content_type'] = "Videos";
		$this->data['image'] 		= "icons-mini-tip.png";
		$this->data['url'] 			= "videos";	
		$this->set_wrapper_elements('content/topic-content');
		
	}
	

	
	
}

/* End of file topic.php */
/* Location: ./application/controllers/topic.php */