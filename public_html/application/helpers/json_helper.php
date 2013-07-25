<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Web Service JSON Helper
 *
 *
 * @package		Web Service
 * @author		Envoy Inc.
 * @contact		admin@envoyinc.com
 * @copyright	Copyright (c) 2013 Envoy Inc.
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Web Service JSON Helper
 *
 * @package		Web Service
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Envoy Inc.
 */

// ------------------------------------------------------------------------
	
/**
 * select_array function.
 * 
 * @access public
 * @param string $url
 * @param array $list
 * @return array
 */	
if ( ! function_exists('select_array'))
{	
	function select_array($url, $list)
	{
		//echo "<br>HELP 1 =>".$url;
		//echo "<br>HELP 2 =>".$list;
		//echo "<pre>";print_r($list);
		//echo "<br>ok5".$segment;
		// Load the url helper to format the urls
		// for matching.
		$CI =& get_instance();
		$CI->load->helper('url');
		
		foreach($list as $v)
		{
			// Find the url alias and remove content/
			// from the front.
			$url_alias 			= explode("/",$v->views_url_alias_node_alias);
			if(url_title($url_alias[1]) == ""){
				$url_new 		= explode("/",$v->url);
				$url_alias[1]	= $url_new[3];
				//echo "<pre>";print_r($url);
			}
			//echo url_title($url_alias[1]);
			if(url_title($url_alias[1]) == strtolower(url_title($url)))
			{
				$array = $v;
			}
		}
		
		return $array;
	}
}

/* End of file json_helper.php */
/* Location: ./application/helpers/json_helper.php */