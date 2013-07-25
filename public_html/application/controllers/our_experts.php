<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Our_experts extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'text'));
		$this->load->model('Ws_Other_Formater_Model');
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	public function index()
	{

		$this->data['items'] 	     = $this->Ws_Other_Formater_Model->get_list($this->uri->segment(3), 'our_experts');
		#echo "<pre>";print_r($this->data['items']);
		for( $i=0; $i< count($this->data['items']);$i++){
			
			
			$alias					= "content/".$this->uri->segment(2);
			if($this->data['items'][$i]->views_url_alias_node_alias	== $alias){
				$this->data['item']	= $this->data['items'][$i];
			}
		#echo "arti:".	print_r($this->data['item']->expert_article_tag);
		if($this->data['item']->expert_article_tag->und<>"")
		{
			foreach($this->data['item']->expert_article_tag->und as $tid)
			 {
				$tag 									= $this->Ws_Formater_Model->get_taxonomy('taxonomy', $tid->tid);
				$this->data['tags'][] 					= $tag->name;
			}
		}		
			
					
		}
		
		
		//echo "<pre>";print_r($this->data['item']); exit;
		
		$this->set_wrapper_elements('html/our-experts');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */