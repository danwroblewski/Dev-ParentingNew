<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ask_An_Expert extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
	}
	
	public function index()
	{
		$this->set_wrapper_elements('html/ask-an-expert');
	}
	
	//--------------------------------------------------------------------
	// Laura Buddenberg
	//--------------------------------------------------------------------
		public function laura_buddenberg()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('our_experts', '962');
			$this->set_wrapper_elements('content/ask-an-expert-content');
		}
	
	//--------------------------------------------------------------------
	// Julia Cook
	//--------------------------------------------------------------------
		public function julia_cook()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('our_experts', '951');
			$this->set_wrapper_elements('content/ask-an-expert-content');
		}
		//--------------------------------------------------------------------
		// About Julia Cook
		//--------------------------------------------------------------------
			public function about_julia_cook()
			{
				$this->set_wrapper_elements('html/julia-cook/about');
			}
	
	//--------------------------------------------------------------------
	// Patrick Friman
	//--------------------------------------------------------------------
		public function patrick_friman()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('our_experts', '963');
			$this->set_wrapper_elements('content/ask-an-expert-content');
		}
	
	//--------------------------------------------------------------------
	// Coach Kush
	//--------------------------------------------------------------------
		public function coach_kush()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('our_experts', '966');
			$this->set_wrapper_elements('content/ask-an-expert-content');
		}
	
	//--------------------------------------------------------------------
	// Thomas Reimers
	//--------------------------------------------------------------------
		public function thomas_reimers()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('our_experts', '964');
			$this->set_wrapper_elements('content/ask-an-expert-content');
		}
		//--------------------------------------------------------------------
		// About Thomas Reimers
		//--------------------------------------------------------------------
			public function about_thomas_reimers()
			{
				$this->set_wrapper_elements('html/thomas-reimers/about');
			}
	
	//--------------------------------------------------------------------
	// Connie Schnoes
	//--------------------------------------------------------------------
		public function connie_schnoes()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('our_experts', '965');
			$this->set_wrapper_elements('content/ask-an-expert-content');
		}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */