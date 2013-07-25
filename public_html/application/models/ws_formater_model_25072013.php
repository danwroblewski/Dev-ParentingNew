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

class Ws_Formater_Model extends CI_Model {

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
        
        // Grab the data that we need for the urls and the json helper
		$this->config->load('parenting_config');
		$this->load->helper('json');
    }
    
    // ------------------------------------------------------------------------
    
    /**
     * get_list_all function.
     *
     * Grabs all of the data for the selected category and reformats to a list
     * array.
     * 
     * @access public
     * @param mixed $category
     * @return array
     */
    public function get_list_all($category)
	{	
		echo "reched";
		return $this->_build_json_list_all($category);
	}
    
    // ------------------------------------------------------------------------
    
    /**
     * get_list_section function.
     * 
     * Gets all of the items for a particular section and reformats to a list
     * array.
     * 
     * @access public
     * @param mixed $category
     * @param mixed $location
     * @return array
     */
    public function get_list_section($category, $location, $query_arrays)
	{	
		return $this->_build_json_list_location($category, $location, $query_arrays);
	}
	
	// ------------------------------------------------------------------------
    
    
    /**
     * get_category function.
     *
     * Selects a category and returns as an array.
     * 
     * @access public
     * @param mixed $category
     * @param mixed $type
     * @return array
     */
    public function get_category($category, $type)
	{	
		return $this->_get_category($category, $type);
	}
	
	// ------------------------------------------------------------------------

    /**
     * get_entry function.
     *
     * Returns a specific entry in formatable json object.
     * 
     * @access public
     * @param string $category
     * @param string $id
     * @return sting
     */
    public function get_entry($category, $id) 
    {
	//echo "<br>ok3".$category;
	//echo "<br>ok4".$id;
	    // cache the data
	    $this->load->driver('cache');
	    
	    // if the $id matches the config data get data from the cached file
	    if($this->cache->file->get($category. '_' . $id))
		{
			$str = $this->cache->file->get($category. '_' . $id);
		}
		// otherwise get data from drupal and cache it
		else
		{
			$this->load->library('curl');
			$str = json_decode($this->curl->simple_get($this->config->item('webservice_url') . '/api/node/' . $id . '.json'));
			
			// Cache data for 10 min on producton
			if(ENVIRONMENT === 'production')
			{
				$this->cache->file->save($category. '_' . $id, $str, 600);
	        }
			
			
		}
	  //  echo"<pre>";print_r($str);
	    return $str;
    }
    
    
    /**
     * get_entry function.
     *
     * Returns a specific entry in formatable json object.
     * 
     * @access public
     * @param string $category
     * @param string $id
     * @return sting
     */
    public function get_taxonomy($category, $id) 
    {
	    // cache the data
	    $this->load->driver('cache');
	    
	    // if the $id matches the config data get data from the cached file
	    if($this->cache->file->get($category. '_' . $id))
		{
			$str = $this->cache->file->get($category. '_' . $id);
		}
		// otherwise get data from drupal and cache it
		else
		{
			$this->load->library('curl');
			$str = json_decode($this->curl->simple_get($this->config->item('webservice_url') . '/api/taxonomy_term/' . $id . '.json'));
			
			// Cache data for 10 min on producton
			if(ENVIRONMENT === 'production')
			{
				$this->cache->file->save($category. '_' . $id, $str, 600);
	        }
			
			
		}
	    
	    return $str;
    }
	
	// ------------------------------------------------------------------------
    
    /**
	 * _set_news_item function.
	 *
	 * Not sure what this is for. Will need to make sure safe to remove before 
	 * doing so.
	 * 
	 * @access public
	 * @param string $segment
	 * @return string
	 */
	public function _set_news_item($segment)
	{
		return $this->uri->segment($segment, 0);
	}
	
	// ------------------------------------------------------------------------
	
	
	/**
	 * _set_nid function.
	 * 
	 * Grabs the id from the url so that we can pass it to the get_entry 
	 * method.
	 * 
	 * @access public
	 * @param string $segment
	 * @param string $catagory
	 * @return array
	 */
	public function _set_nid($segment, $category)
	{	
		echo "<br>ok3".$category;
		echo "<br>ok4".$segment;
		$segment 	 = ucwords($this->uri->segment($segment, 0));
		#$segment 	 = ucwords($this->uri->segment($segment, 0));
		//echo "<br>ok5".$segment;
		$array 		 = select_array($segment, $this->_build_json_list_all($category));
		//echo $array ;
		//echo "<pre>";print_r($array);
		
		//$nid	= $this->_build_json_list_all($category)->nid;
		//echo "<br>ok8".$nid;
	
		return $array->nid;
	}
	
	// ------------------------------------------------------------------------
    
    /**
     * _build_json_list_all function.
     *
     * Get a full list of the entries for any item from drupal. Once this is
     * returned we parse this data and format as needed for display.
     * 
     * @access private
     * @param string $category
     * @return sting
     */
    private function _build_json_list_all($category)
	{	
		echo "<br>ok5".$category;
		
		$this->load->driver('cache');
		
		if($this->cache->file->get($category . '_categories'))
		{
			$str = $this->cache->file->get($category . '_categories');
			
		}
		else
		{	
			$this->load->library('curl');
			
			$str = json_decode($this->curl->simple_get($this->config->item('webservice_url') . '/api/' . $category . '.json'));
			
			// Cache data for 10 min on producton
			if(ENVIRONMENT === 'production')
			{
				$this->cache->file->save($category . '_categories', $str, 600);
	        }
			//echo "<pre>";print_r($str);
		}
		echo "==>".$this->curl->simple_get($this->config->item('webservice_url') . '/api/' . $category . '.json');
		return $str;
	}
	
	// ------------------------------------------------------------------------
	
	/**
    * _build_json_list_location function.
    *
    * Grabs all the data for a certain location. This is needed for the sub
    * locations and the news or events each location has.
    *
    * @access private
    * @param string $category
    * @param string $location
    * @return string
    */
   private function _build_json_list_section($category, $section, $query_array)
   {
       $this->load->driver('cache');

       if(is_array($query_array))
       {
           foreach($query_array as $k => $v)
           {
               $query_string[] = $k . '=' . $v;
           }

           $query_string = implode('&', $query_string);
       }


       if($this->cache->file->get($category . '_' . $section))
       {
           $str = $this->cache->file->get($category . '_' . $section);
       }
       else
       {
           $this->load->library('curl');

           $str = json_decode($this->curl->simple_get($this->config->item('webservice_url') . '/api/' . $category . '.json?' . $query_string));

           // Cache data for 10 min on producton
           if(ENVIRONMENT === 'production')
           {
               //$this->cache->file->save($category . '_' . $section, $str, 600);
           }
       }
       return $str;
   }
	
	// ------------------------------------------------------------------------
    
   /**
     * _build_json_category function.
     *
     * The private function of get_category(). We need this to return a json
     * object to parce through.
     * 
     * @access private
     * @param mixed $category
     * @param mixed $type
     * @return array
     */
    private function _get_category($category, $type)
	{	
		$this->load->library('curl');
		
		return json_decode($this->curl->simple_get($this->config->item('webservice_url') . '/api/' . $type . '_' . $category . '.json'));
	}
		
}

/* End of file ws_formatter_model.php */
/* Location: ./application/models/ws_formatter_model.php */