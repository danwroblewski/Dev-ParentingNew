<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Web Services
 *
 *
 * @package		Web Services
 * @author		Envoy Inc.
 * @contact		admin@envoyinc.com
 * @copyright	Copyright (c) 2013 Envoy Inc.
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Web Services Data Aggrigator
 *
 * @package		Web Services
 * @author		Envoy Inc.
 */

// ------------------------------------------------------------------------

class Ws_Category_Model extends CI_Model {

    /**
     * __construct function.
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        // Grab the data that we need for the search terms and vocab ids
		$this->config->load('parenting_config');
		$this->load->library('curl');
    }
    
	/**
	 * get_category function.
	 *
	 * @access public
	 * @param mixed $vid
	 * @return array
	 */
	public function get_category($vid, $type) {
		
		$vid_query 	= '';
		
		if($vid	<> ""){	
		/*	$string 	= str_replace("-", " ", $vid);
			$vid 		= urlencode($string);	*/	
			$vid_query .= 'tid=' . $vid;
		}
		
		
		$str = json_decode($this->curl->simple_get($this->config->item('webservice_url') . '/api/'.$type.'.json?' . $vid_query));
		
		/* Cache that. We don't want to keep getting if we don't have to */
		
		return $str;
	}
	
	
   
		
}

/* End of file ws_search_model.php */
/* Location: ./application/models/ws_formatter_model.php */