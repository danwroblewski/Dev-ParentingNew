<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	/**
	 * data
	 * 
	 * (default value: array())
	 * 
	 * @var array
	 * @access protected
	 */
	protected $data = array();
	
	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * set_wrapper_elements function.
	 * 
	 * @access protected
	 * @param mixed $path
	 * @return void
	 */
	protected function set_wrapper_elements($path) 
	{
		$this->data['main_url'] = str_replace('-', ' ', $this->uri->segment(1, 0));
		
		// Set our side nav items.
        $this->data['side_navigation_home'] = array('link' => $this->uri->segment(1, 0), 'title' => ucWords($this->data['main_url']));
        $this->data['secondary_url'] = str_replace('-', ' ', $this->uri->segment(2, 0));
        $this->data['tertiary_url'] = str_replace('-', ' ', $this->uri->segment(3, 0));
        $this->data['fourth_url'] = str_replace('-', ' ', $this->uri->segment(4, 0));
        
        // Here are the main wrapping items.
		$this->_main_nav();
		$this->_footer();
        
        // Set our side nav itself
		$this->_side_nav();
		
		// set content data here.
		$this->data['content'] = $this->load->view($path, $this->data, TRUE);
		
		// Send it all to the browser
		$this->_html();
	}
	
	/**
	 * html function.
	 * 
	 * Full html view. Pulls data into the html template
	 * 
	 * @access protected
	 * @return void
	 */
	private function _html()
	{	
		$this->load->view('html', $this->data);
	}
	
	
	/**
	 * _footer function.
	 *
	 * Pulls in the footer bits.
	 * 
	 * @access protected
	 * @return void
	 */
	private function _footer() 
	{
		$this->data['footer'] = $this->load->view('includes/footer', $this->data, TRUE);
	}
	
	/**
	 * _main_nav function.
	 *
	 * Pulls in the main menu items.
	 * 
	 * @access protected
	 * @return void
	 */
	private function _main_nav() 
	{
		$this->data['main_nav'] = $this->load->view('includes/main-nav', $this->data, TRUE);
	}
	
	/**
	 * _side_nav function.
	 * 
	 * @access private
	 * @return void
	 */
	private function _side_nav()
	{
		$this->data['side_nav'] = $this->load->view('includes/side-nav', $this->data, TRUE);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */