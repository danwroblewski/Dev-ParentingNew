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

class Ws_Search_Model extends CI_Model {

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
	 * set_search_results function.
	 *
	 * This gathers all the data to send to the submit.
	 * In otherwords this is where the magic happens.
	 * 
	 * @access public
	 * @return void
	 */
	public function set_search_results()
	{
		$query = '';
		
		foreach($_POST as $k => $v)
		{
			if(!empty($v))
			{
				$q[$k] = $v;
			}
		}
		
		

		if(empty($q['search_query'])) {
			switch ($q['type']) {
				case 'article':
					redirect('/articles');
				break;
				case 'questions_and_answers':
					redirect('/questions_and_answers');
				break;
				case 'quick_tips':
					redirect('/quick_tips');
				break;
				case 'videos':
					redirect('/videos');
				break;
			}

		}
		
		$keyword_set = $this->_get_keywords($q);
		$content_types = $this->_set_content_types($keyword_set);
		
		// Need to seperate the input field so that we
		// can determine if there is valuable data
		if(is_array($content_types) && empty($q['type']))
		{
			$q = $this->_get_search_values($content_types, $keyword_set);
			
		}
		$query = $this->_build_search_query($q);
		
		return $this->_set_search_results($query);
	}
	
	/**
	 * _set_keywords function.
	 *
	 * We want the keywords for a vocabulary item.
	 * This item uses the vid set and gathers the
	 * terms to compile and send to the web service.
	 * 
	 * @access private
	 * @param mixed $vid
	 * @return void
	 */
	private function _set_keywords($vid) {
		
		$vid_query = '';
		
		if(is_array($vid)) {
			foreach($vid as $k => $v) {
				$vid_query .= 'vid[' . $k . ']=' . $v . '&';
			}
		}
		else {
			$vid_query .= 'vid=' . $vid;
		}
		
		#echo $vid_query;
	
		// Get the data for the $vid (vocabulary id)
		$str = json_decode($this->curl->simple_get($this->config->item('webservice_url') . '/api/vocabulary.json?' . $vid_query));
		
		/* Cache that shit. We don't want to keep getting if we don't have to */
		
		return $str;
	}
	
	
	/**
	 * _multiexplode function.
	 *
	 * I really don't know what this does
	 * I got it from php.net.
	 * 
	 * @access private
	 * @param array $delimiters
	 * @param string $string
	 * @return void
	 */
	private function _multiexplode ($delimiters, $string) {
	    
	    $ready = str_replace($delimiters, $delimiters[0], $string);
	    $launch = explode($delimiters[0], $ready);
	    return  $launch;
	}
	
	
	/**
	 * _set_content_types function.
	 * 
	 * I don't need $q here because I get it from _get_keywords
	 * This sets the content types that are set in the
	 * parenting config file.
	 * 
	 * @access private
	 * @param array $keyword_set
	 * @return array
	 */
	private function _set_content_types($keyword_set) {
		
		foreach($this->config->item('content_types') as $key => $alt) 
		{
			foreach($keyword_set as $k_words)
			{
				if(in_array($k_words, $alt))
				{
					$v_text[] = $key;
				}
			}
		}
		
		return $v_text;
	}
	
	
	/**
	 * _get_keywords function.
	 *
	 * We use the initial query ($q) to set all
	 * key words that we need to check against the
	 * drupal web service. This function allows us to
	 * remove the uneeded text from the query string.
	 * 
	 * @access private
	 * @param array $q
	 * @return array
	 */
	private function _get_keywords($q) {
		$keyword_set = $this->_multiexplode(array(' ', ', ', ',', '+'), $q['search_query']);
		$remove_words = array('an', 'and', 'on', 'the', 'about', 'containing', 'but', 'with');
		
		return array_diff($keyword_set, $remove_words);
	}
	
	
	/**
	 * _get_search_values function.
	 *
	 * This is used to get the search values and compile them
	 * into a recognizable array that the search web service
	 * can use.
	 * 
	 * @access private
	 * @param array $content_types
	 * @param array $keyword_set
	 * @return void
	 */
	private function _get_search_values($content_types, $keyword_set) {
		// remove all duplicates to reduce errors
		// and set $q['type']
		$result = array_unique($content_types);
		$q['type'] = implode(',',$result);
		
		// Get the vocabulary id for the keywords
		$vid_array = $this->_get_vids($result);
		
		// Match the vids to the keyword terms
		foreach($keyword_set as $term_compare) {
			foreach($this->_set_keywords($vid_array) as $term) {
				if(strstr(strtolower($term->taxonomy_term_data_name), strtolower($term_compare))) {
					$term_sets[] = $term->taxonomy_term_data_name;
				}
			}
		}
		
		// remove duplicates and create string
		$result_terms = array_unique($term_sets);
		$q['search_query'] = implode(',',$result_terms);
		
		/* TESTING DO NOT REMOVE */
		//echo $q['type'];
		#print_r($vid_array);
		#print_r($result_terms);
		#print_r($q);
		
		return $q;
	}
	
	/**
	 * _get_vids function.
	 *
	 * We need this to gather the vids for the
	 * vocabulary.
	 * 
	 * @access private
	 * @param array $keywords
	 * @return void
	 */
	private function _get_vids($keywords) {
		
		// Get the vocabulary id for the keywords
		foreach($this->config->item('vid') as $vid => $vocab) {
			if(in_array($vocab, $keywords))
			{
				$vid_array[] = $vid;
			}
		}
		
		return $vid_array;
	}
	
	/**
	 * _build_search_query function.
	 *
	 * This compiles the search query. That is all.
	 * 
	 * @access private
	 * @param mixed $q
	 * @return void
	 */
	private function _build_search_query($q) {
		
		// Compile the keywords and make url friendly
		$keywords_array = array($q['search_query'], $q['age'], $q['topic']);
		$keywords = implode(',', $keywords_array);
		$keywords = urlencode($keywords);
		
		// Make the types url friendly
		$types = urlencode($q['type']);
		
		// Compile it all up and send off.
		return (!empty($types)) ? $keywords . '%20type%3A' . $types : $keywords;
	}
	
	/**
	 * _set_search_results function.
	 *
	 * Gathers the results from all the
	 * compiling.
	 * 
	 * @access private
	 * @param mixed $query
	 * @return void
	 */
	private function _set_search_results($query) {
		return json_decode($this->curl->simple_get($this->config->item('webservice_url') . '/api/search_node/retrieve.json?keys=' . $query));
	}
		
}

/* End of file ws_search_model.php */
/* Location: ./application/models/ws_formatter_model.php */