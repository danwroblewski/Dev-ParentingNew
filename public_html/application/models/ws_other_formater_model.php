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

class Ws_Other_Formater_Model extends CI_Model {

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
	 * get_guide function.
	 *
	 * @access public
	 * @param mixed $vid
	 * @return array
	 */
	public function get_list($vid, $type) {
		
		$vid_query 	= '';
		
		if($vid<>""){
			$string 	= str_replace("-", " ", $vid);
			$vid 		= urlencode($string);
			if($type=='guides'){
				$vid_query .= 'guide_name=' . $vid;
			}
			
		}
	
		#echo $this->config->item('webservice_url') . '/api/'.$type.'.json?' . $vid_query;
		$str = json_decode($this->curl->simple_get($this->config->item('webservice_url') . '/api/'.$type.'.json?' . $vid_query));
		
		/* Cache that shit. We don't want to keep getting if we don't have to */
		
		return $str;
	}
	
	public function get_expert_other_tags($key,$tag){
		$key_query 	= '';
		
		if($key<>""){
			$string 	= str_replace("-", " ", $key);
			$key 		= urlencode($string);
			$key_query .= 'guide_name=' . $key;
			
		}
		if($tag<>""){
			$tag		=  urlencode($tag);
			$key_query .= '&ask_expert_tags=' . $tag;
		}
		
		//echo $this->config->item('webservice_url') . '/api/questions_and_answers.json?' . $key_query; exit;
		
		$str = json_decode($this->curl->simple_get($this->config->item('webservice_url') . '/api/questions_and_answers.json?' . $key_query));
		
		/* Cache that shit. We don't want to keep getting if we don't have to */
		#echo "<pre>" ; print_r($str);
		return $str;
	}
	
	
	/**
	 * get_topic function.
	 *
	 * @access public
	 * @param mixed $vid
	 * @return array
	 */
	public function get_topic($key, $age=NULL,$type=NULL) {
		
		$topic_query 	= '';
		
		if($key<>""){
			
			$string 	= str_replace("-", " ", $key);
			$key		= urlencode($string);
			$topic_query .= 'topic_filter=' . $key;
			
			
		}
		
		if($age<>""){
			
			$string 	= str_replace("-", " ", $age);
			$age		= urlencode($string);
			$topic_query .= '&main_filter=' . $age;
			
			
		}
		
		if($type<>""){
			$type		=  urlencode($type);
			$topic_query .= '&type=' . $type;
		}
		else {
			$topic_query .= '&type=All';
		}
		#echo $this->config->item('webservice_url') . '/api/topic.json?' . $topic_query; exit;
		$str = json_decode($this->curl->simple_get($this->config->item('webservice_url') . '/api/topic.json?' . $topic_query));
		
		/* Cache that shit. We don't want to keep getting if we don't have to */
		
		return $str;
	}
	
	
	/**
	 * get_age function.
	 *
	 * @access public
	 * @param mixed $vid
	 * @return array
	 */
	public function get_age($key, $type=NULL) {
		
		$age_query 	= '';
		
		if($key<>""){
			
			$string 	= str_replace("-", " ", $key);
			$key		= urlencode($string);
			$age_query .= 'tid=' . $key;
			
			
		}
		if($type<>""){
			$type		=  urlencode($type);
			$age_query .= '&type=' . $type;
		}
		else {
			$age_query .= '&type=All';
		}
		#echo $this->config->item('webservice_url') . '/api/topic.json?' . $topic_query; exit;
		$str = json_decode($this->curl->simple_get($this->config->item('webservice_url') . '/api/age.json?' . $age_query));
		
		/* Cache that shit. We don't want to keep getting if we don't have to */
		
		return $str;
	}
	
	
		/**
	 * get_search function.
	 *
	 * @access public
	 * @param mixed $vid
	 * @return array
	 */
	public function get_search($key, $type=NULL,$age=NULL) {
		
		$search_query 	= '';
		
		if($key<>""){
			$key			= explode(" ",$key);
			$remove_words 	= array('about','after','all','also','an','and','another','any','are','as','at','be','because','been','before','being','between','both','but','by','came','can','come','could','did','do','each','for','from','get','got','has','had','he','have','her','here','him','himself','his','how','if','in','into','is','it','like','make','many','me','might','more','most','much','must','my','never','now','of','on','only','or','other','our','out','over','said','same','see','should','since','some','still','such','take','than','that','the','their','them','then','there','these','which','while','who','with','would','you','your','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','$','1','2','3','4','5','6','7','8','9','0','_');
			$result			= array_diff($key, $remove_words);
			$key			= implode(' ',$result);
			$string 		= str_replace("-", " ", $key);
			$key			= urlencode($string);
			if($age==""){
			
				$search_query .= 'title=' . $key.'&body_value='.$key.'&field_expert_answer_value='.$key.'&field_quick_tips_body_value='.$key.'&taxonomy='.$key;
			}
			else {
				$string1 	= str_replace("-", " ", $age);
				$age		= urlencode($string1);
				if($type=="ask_an_expert"){
					if($age=="Adolescence+Teens"){ $age="teen";}
					$search_query .= 'title=' . $key.'&body_value='.$key.'&field_expert_answer_value='.$key.'&field_quick_tips_body_value='.$key.'&tid_qna='.$age; 
				}
				if($type=="article"){
					$search_query .= 'title=' . $key.'&body_value='.$key.'&field_expert_answer_value='.$key.'&field_quick_tips_body_value='.$key.'&tid_art='.$age; 
				}
				if($type=="videos"){
					$search_query .= 'title=' . $key.'&body_value='.$key.'&field_expert_answer_value='.$key.'&field_quick_tips_body_value='.$key.'&taxonomy='.$key.'&tid_art='.$age; 
				}
			}
		
			
		}
		if($type<>""){
		
			$type		=  urlencode($type);
			$search_query .= '&type=' . $type;
		}
		else {
			$search_query .= '&type=All';
		}
		#echo $this->config->item('webservice_url') . '/api/searchnew.json?' . $search_query; 
		$str = json_decode($this->curl->simple_get($this->config->item('webservice_url') . '/api/searchnew.json?' . $search_query));
		
		/* Cache that shit. We don't want to keep getting if we don't have to */
		
		return $str;
	}
	

}

/* Location: ./application/models/ws_other_formatter_model.php */