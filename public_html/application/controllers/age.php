<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Age extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'text'));		
		$this->load->model('Ws_Other_Formater_Model');
		$this->data['printemail'] 	= $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	public function index()
	{
		if($this->input->post(topic)!="") {
			$this->data['topic']=$this->input->post(topic);
		}
		if($this->input->post(age)!="") {
			$this->data['age']=$this->input->post(age);
		}
		$this->set_wrapper_elements('html/age',$this->data, TRUE);
	}
	
	###### For Browse by page ########
	public function article()
	{
		if($this->input->post(age)!="") {
			$this->articles();
		}
		elseif($this->input->post(topic)!="") {
			$this->data['topic']=$this->input->post(topic);
		}
		
	}
	########## For Articles #############
	
	public function articles()
	{
		if($this->input->post(age)!="") { $this->data['key']= strtolower(str_replace(" ", "-", $this->input->post(age))); }
		else {$this->data['key']	= $this->uri->segment(3); }
		$this->data['result'] 		= $this->Ws_Other_Formater_Model->get_age($this->data['key']);
		$this->data['heading'] 		= "Articles";
		$this->data['content_type'] = "Article";
		$this->data['url'] 			= "article";		
		$this->data['image'] 		= "icons-mini-article.png";
		$this->set_wrapper_elements('content/age-content');		
	}	
		
	public function quicktips()
	{
		if($this->input->post(age)!="") { $this->data['key']= strtolower(str_replace(" ", "-", $this->input->post(age))); }
		else {$this->data['key']	= $this->uri->segment(3); }
		$this->data['result'] 		= $this->Ws_Other_Formater_Model->get_age($this->data['key']);
		$this->data['heading'] 		= "Quick Tips";
		$this->data['content_type'] = "'Quick Tips";
		$this->data['image'] 		= "icons-mini-tip.png";
		$this->data['url'] 			= "quick-tips";	
		$this->set_wrapper_elements('content/age-content');		
	}
	
	public function questions_and_answers()
	{
		if($this->input->post(age)!="") { $this->data['key']= strtolower(str_replace(" ", "-", $this->input->post(age))); }
		else {$this->data['key']	= $this->uri->segment(3); }
		$this->data['result'] 		= $this->Ws_Other_Formater_Model->get_age($this->data['key']);
		$this->data['content_type'] = "Questions and Answers";

		$this->data['heading'] 		= "Questions And Answers";		
		$this->data['url'] 			= "questions-and-answers";	
		$this->data['image'] 		= "icons-mini-q_and_a.png";
		$this->set_wrapper_elements('content/age-content');		
	}
	
	public function videos()
	{
		if($this->input->post(age)!="") { $this->data['key']= strtolower(str_replace(" ", "-", $this->input->post(age))); }
		else {$this->data['key']	= $this->uri->segment(3); }
		$this->data['result'] 		= $this->Ws_Other_Formater_Model->get_age($this->data['key']);
		$this->data['heading'] 		= "Videos";
		$this->data['content_type'] = "Videos";
		$this->data['url'] 			= "videos";	
		$this->data['image'] 		= "icons-mini-video.png";
		$this->set_wrapper_elements('content/age-content');			
	}

}
