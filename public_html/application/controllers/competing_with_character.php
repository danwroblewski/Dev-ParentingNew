<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Competing_with_character extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->config->load('site_side_navigation');
		// Add all this shit to the side navigation to make it work
		$this->data['side_navigation']		= $this->config->item('side_navigation_competing');
		$this->data['printemail'] = $this->load->view('includes/print-email-share', '', TRUE);
		$this->data['secondary_url']		= str_replace('-', ' ', $this->uri->segment(3, 0));
		$this->data['tertiary_url']			= str_replace('-', ' ', $this->uri->segment(4, 0));
		$this->data['fourth_url']			= str_replace('-', ' ', $this->uri->segment(5, 0));
		
        $this->data['side_nav']             = $this->load->view('includes/side-nav', $this->data, TRUE);
	}
	
	public function index()
	{
		$this->load->model('Ws_Formater_Model');
		
		$this->data['item'] = $this->Ws_Formater_Model->get_entry('competing_with_character', '968');
		$this->set_wrapper_elements('content/competing-with-character');
	}
	
	//--------------------------------------------------------------------
	// Supporting Materials
	//--------------------------------------------------------------------
		public function supporting_materials()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('competing_with_character', '970');
			$this->set_wrapper_elements('content/competing-with-character-content');
		}
	
	//--------------------------------------------------------------------
	// The Book
	//--------------------------------------------------------------------
		public function the_book()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('competing_with_character', '969');
			$this->set_wrapper_elements('content/competing-with-character-content');
		}
	
	//--------------------------------------------------------------------
	// Coach Kush in Action
	//--------------------------------------------------------------------
		public function videos()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('competing_with_character', '979');
			$this->set_wrapper_elements('content/competing-with-character-content');
		}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */