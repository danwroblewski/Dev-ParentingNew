<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');





$route['default_controller'] = "home";
$route['404_override'] = '';


// ----------------------------------------------------------------------------------------------------------------------------
#  Common Sense Parenting
// ----------------------------------------------------------------------------------------------------------------------------
	$route['common-sense-parenting/classes/children-ages-6-16']	= 'common-sense-parenting/children_ages_six_sixteen';
	
	$route['common-sense-parenting/classes/(:any)'] 	= 'common-sense-parenting/$1';
	$route['common-sense-parenting/locations/(:any)']	= 'common-sense-parenting/$1';
	$route['common-sense-parenting/(:any)']				= 'common-sense-parenting/$1';


// ----------------------------------------------------------------------------------------------------------------------------
#  Competing With Character
// ----------------------------------------------------------------------------------------------------------------------------
	$route['competing-with-character/(:any)']			= 'competing-with-character/$1';


// ----------------------------------------------------------------------------------------------------------------------------
#  Our Experts
// ----------------------------------------------------------------------------------------------------------------------------
	$route['our-experts/julia-cook/about']		= 'our-experts/about_julia_cook';
	$route['our-experts/thomas-reimers/about']	= 'our-experts/about_thomas_reimers';
	

// ----------------------------------------------------------------------------------------------------------------------------
#  Articles / Questions and Answers
// ----------------------------------------------------------------------------------------------------------------------------
	$route['article/(:any)']				= 'article/article-content/$1';
	$route['questions-and-answers/(:any)']	= 'questions-and-answers/questions-and-answers-content/$1';


// ----------------------------------------------------------------------------------------------------------------------------
#  Basic Pages
// ----------------------------------------------------------------------------------------------------------------------------
	


// ----------------------------------------------------------------------------------------------------------------------------
#  SITE REDIRECT ROUTES
// ----------------------------------------------------------------------------------------------------------------------------
	$route['(?i)csp'] = 'site_redirect';
	$route['(?i)articles'] = 'site_redirect';


/* End of file routes.php */
/* Location: ./application/config/routes.php */