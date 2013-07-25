<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Basic_page extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	//--------------------------------------------------------------------
	// National Hotline
	//--------------------------------------------------------------------
		public function national_hotline()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('basic_page', '971');
			$this->set_wrapper_elements('content/basic-page-content');
		}
	
	//--------------------------------------------------------------------
	// ADHD
	//--------------------------------------------------------------------
		public function adhd()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('basic_page', '972');
			$this->set_wrapper_elements('content/basic-page-content');
		}
	
	//--------------------------------------------------------------------
	// PSA Videos
	//--------------------------------------------------------------------
		public function psa_videos()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('basic_page', '973');
			$this->set_wrapper_elements('content/basic-page-content');
		}
		
	//--------------------------------------------------------------------
	// What Every Parent Needs to Know About “No”
	//--------------------------------------------------------------------
		public function what_every_parent_needs_to_know_about_no()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('basic_page', '974');
			$this->set_wrapper_elements('content/basic-page-content');
		}
	
	//--------------------------------------------------------------------
	// Banish Bullying
	//--------------------------------------------------------------------
		public function banish_bullying()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('basic_page', '975');
			$this->set_wrapper_elements('content/basic-page-content');
		}
	
	//--------------------------------------------------------------------
	// Webcasts
	//--------------------------------------------------------------------
		public function webcasts()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('basic_page', '976');
			$this->set_wrapper_elements('content/basic-page-content');
		}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */