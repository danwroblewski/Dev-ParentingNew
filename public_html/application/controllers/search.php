<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('ws_search_model');
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('ws_other_formater_model');
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	/**
	 * search_submit function.
	 * 
	 * @access public
	 * @return void
	 */
	public function results() {

		($this->input->post('type')<>"") ? $type = $this->input->post('type'): $type = "";
		($this->input->post('age')<>"") ? $age = $this->input->post('age'): $age = "";
		($this->input->post('search_query')<>"") ? $key = $this->input->post('search_query'): $key = "";
		//echo "type->".$type;		echo "age->".$age;
		//$key							= $age;
		$this->data['list'] 			= $this->ws_other_formater_model->get_search($key, $type,$age);
		$this->data['search_list'] 		= $this->load->view('content/search-list', $this->data, TRUE);
		#$this->data['list_of_keywords'] = @implode(', ', $this->input->post());
		(count($this->data['list'])<>0) ? $this->data['page']=1:$this->data['page']=0;
		$this->set_wrapper_elements('html/search-results');
		
	}
}

/* End of file search.php */
/* Location: ./application/controllers/search.php */