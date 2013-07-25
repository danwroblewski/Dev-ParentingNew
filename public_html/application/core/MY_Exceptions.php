<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class MY_Exceptions extends CI_Exceptions {

	private $data = '';

    public function __construct()
	{
        parent::__construct();
        
    }
	
// --------------------------------------------------------------
#  Error landing page
// --------------------------------------------------------------
	public function show_404()
	{
        /*
// Check the url to make sure there is a controller for the
        // lowercase version.
        $server_url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        
        if ($server_url !== strtolower($server_url))
		{
			header('Location: http://' . strtolower($server_url), TRUE, 301);
		}
		// If nothing is found send 404 error
		else
		{
	        ob_start();
	        
	        $CI =& get_instance();
	        
			$CI->output->set_status_header('404');
	        // First, assign the CodeIgniter object to a variable
			$this->data['content'] = $CI->load->view('html/error', '', TRUE);
			
			$this->data['main_nav'] = $CI->load->view('includes/main-nav', '', TRUE);
	        $this->data['footer'] = $CI->load->view('includes/footer', '', TRUE);
			
			// Inject into this view
			$CI->load->view('html', $this->data);
			
			echo $CI->output->get_output();
			exit;
		}
*/
	}
}