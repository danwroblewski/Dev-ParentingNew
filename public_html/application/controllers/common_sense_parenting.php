<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_sense_parenting extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->config->load('site_side_navigation');
		// Add all this to the side navigation to make it work
		$this->data['side_navigation']		= $this->config->item('side_navigation_csp');
		$this->data['printemail'] 			= $this->load->view('includes/print-email-share', '', TRUE);
		$this->data['secondary_url']		= str_replace('-', ' ', $this->uri->segment(3, 0));
		$this->data['tertiary_url']			= str_replace('-', ' ', $this->uri->segment(4, 0));
		$this->data['fourth_url']			= str_replace('-', ' ', $this->uri->segment(5, 0));
		
        $this->data['side_nav']             = $this->load->view('includes/side-nav', $this->data, TRUE);
	}
	
	public function index()
	{
		$this->load->model('Ws_Formater_Model');
		
		$this->data['item'] = $this->Ws_Formater_Model->get_entry('common_sense_parenting', '952');
		$this->set_wrapper_elements('content/common-sense-parenting');
	}
	
	//--------------------------------------------------------------------
	// Classes
	//--------------------------------------------------------------------
		public function classes()
		{
			$this->load->model('Ws_Formater_Model');
		
		$this->data['item'] = $this->Ws_Formater_Model->get_entry('common_sense_parenting', '953');
		$this->set_wrapper_elements('content/common-sense-parenting-content');
		}
		//--------------------------------------------------------------------
		// Toddlers-and-preschoolers
		//--------------------------------------------------------------------
			public function toddlers_and_preschoolers()
			{
				$this->load->model('Ws_Formater_Model');
		
		$this->data['item'] = $this->Ws_Formater_Model->get_entry('common_sense_parenting', '954');
		$this->set_wrapper_elements('content/common-sense-parenting-content');
			}
		//--------------------------------------------------------------------
		// Children-ages-6-16
		//--------------------------------------------------------------------
			public function children_ages_six_sixteen()
			{
				$this->load->model('Ws_Formater_Model');
		
				$this->data['item'] = $this->Ws_Formater_Model->get_entry('common_sense_parenting', '955');
				$this->set_wrapper_elements('content/common-sense-parenting-content');
			}
		//--------------------------------------------------------------------
		// La-crianza-practics-de-los-hijos
		//--------------------------------------------------------------------
			public function la_crianza_practics_de_los_hijos()
			{
				$this->load->model('Ws_Formater_Model');
		
				$this->data['item'] = $this->Ws_Formater_Model->get_entry('common_sense_parenting', '956');
				$this->set_wrapper_elements('content/common-sense-parenting-content');
			}
	
	
	//--------------------------------------------------------------------
	// Research Proven
	//--------------------------------------------------------------------
		public function research_proven()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('common_sense_parenting', '957');
			$this->set_wrapper_elements('content/common-sense-parenting-content');
		}
		
	//--------------------------------------------------------------------
	// Parent Testimonials
	//--------------------------------------------------------------------
		public function parent_testimonials()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('common_sense_parenting', '958');
			$this->set_wrapper_elements('content/common-sense-parenting-content');
		}
		
	//--------------------------------------------------------------------
	// Locations
	//--------------------------------------------------------------------
		public function locations()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('common_sense_parenting', '959');
			$this->set_wrapper_elements('content/common-sense-parenting-content');
		}
		//--------------------------------------------------------------------
		// Agencies-companies-and-organizations
		//--------------------------------------------------------------------
			public function agencies_companies_and_organizations()
			{
				$this->load->model('Ws_Formater_Model');
		
				$this->data['item'] = $this->Ws_Formater_Model->get_entry('common_sense_parenting', '960');
				$this->set_wrapper_elements('content/common-sense-parenting-content');
			}
			
	
	//--------------------------------------------------------------------
	// Resources
	//--------------------------------------------------------------------
		public function resources()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('common_sense_parenting', '961');
			$this->set_wrapper_elements('content/common-sense-parenting-content');
		}
	
	//--------------------------------------------------------------------
	// Bring Common Sense Parenting To Your Community
	//--------------------------------------------------------------------
		public function bring_common_sense_parenting_to_your_community()
		{
			$this->load->model('Ws_Formater_Model');
		
			$this->data['item'] = $this->Ws_Formater_Model->get_entry('common_sense_parenting', '967');
			$this->set_wrapper_elements('content/common-sense-parenting-content');
		}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */