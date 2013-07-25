<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] 									= "home";
$route['404_override'] 											= '';


// ----------------------------------------------------------------------------------------------------------------------------
#  Common Sense Parenting
// ----------------------------------------------------------------------------------------------------------------------------
	$route['common-sense-parenting/classes/children-ages-6-16']	= 'common-sense-parenting/children_ages_six_sixteen';
	
	$route['common-sense-parenting/classes/(:any)'] 			= 'common-sense-parenting/$1';
	$route['common-sense-parenting/locations/(:any)']			= 'common-sense-parenting/$1';
	$route['common-sense-parenting/(:any)']						= 'common-sense-parenting/$1';

// ----------------------------------------------------------------------------------------------------------------------------
#  Competing With Character
// ----------------------------------------------------------------------------------------------------------------------------
	$route['competing-with-character/(:any)']					= 'competing-with-character/$1';


// ----------------------------------------------------------------------------------------------------------------------------
#  Our Experts
// ----------------------------------------------------------------------------------------------------------------------------
	
	$route['our-experts/(:any)']								= 'our-experts/index';
	#$route['questions-and-answers/(:any)']						= 'questions-and-answers/questions-and-answers-content/$1';

// ----------------------------------------------------------------------------------------------------------------------------
#  Articles / Questions and Answers /Guides/ Videos/ Quick-tips/ Age
// ----------------------------------------------------------------------------------------------------------------------------
	$route['article/(:any)']									= 'article/article-content/$1';
	$route['questions-and-answers/(:any)']						= 'questions-and-answers/questions-and-answers-content/$1';

	$route['guides']											= 'guides/index';
	$route['category/(:any)']									= 'category/index';
	
	$route['videos']											= 'videos/index';
	$route['videos/(:any)']										= 'videos/videos-content/$1';
		
	$route['quick-tips']										= 'quick-tips/index';
	$route['quick-tips/(:any)']									= 'quick-tips/quick-tips-content/$1';
	
	$route['basic-page/(:any)']									= 'basic_page/basic-page-content/$1';
	$route['basic-page']										= 'basic_page/index';
	
	$route['age']												= 'age/index';
// ----------------------------------------------------------------------------------------------------------------------------
#  SITE REDIRECT ROUTES
// ----------------------------------------------------------------------------------------------------------------------------
	$route['(?i)csp'] 											= 'site_redirect';
	$route['(?i)articles'] 										= 'site_redirect';
	$route['(?i)guides'] 										= 'site_redirect';

/* End of file routes.php */
/* Location: ./application/config/routes.php */