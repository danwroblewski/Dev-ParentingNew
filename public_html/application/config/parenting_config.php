<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| WEB SERVICE CONFIG ITEMS
| -------------------------------------------------------------------
| This file contains four arrays of user agent data.  It is used by the
| User Agent Class to help identify browser, platform, robot, and
| mobile device data.  The array keys are used to identify the device
| and the array values are used to set the actual name of the item.
|
*/

if(ENVIRONMENT === 'development')
{
	$config['webservice_url'] = 'http://parentingnew.envoydev.com/content';
}
else
{
	$config['webservice_url'] = 'http://lb03.boystown.org/drupal/';
}

$config['content_types'] = array(
	/* CONTENT TYPE */															/* ALTERNATE SPELLINGS */
	'article'									=>								array('articles', 
																					  'article',
																					  'advice'),
	'ask_an_expert'								=>								array('ask experts', 
																					  'ask an expert', 
																					  'ask expert', 
																					  'ask some experts', 
																					  'question and answer', 
																					  'q and a',
																					  'q & a',
																					  'expert',
																					  'ask',
																					  'advice',
																					  'why',
																					  'questions'),
	'guide'										=>								array('guides',
																					  'guide'),
	'video'										=>								array('videos',
																					  'videos',
																					  'film'),
	'quick_tips'								=>								array('tips',
																					  'quick tip',
																					  'quick tips',
																					  'tip'),
	'books'										=>								array('books',
																					  'book',
																					  'text')
																					  
);

$config['vid'] = array(
	/* CONTENT TYPE */															/* ALTERNATE SPELLINGS */
	'9'											=>								'article',
	'14'										=>								'ask_an_expert',
	'10'										=>								'guide',
	/*
	'video'										=>								array('videos',
																					  'videos'
																					  'film'),
	'quick tips'								=>								array('tips',
																					  'quick tip',
																					  'quick tips',
																					  'tip'),
																					  */
	'16'										=>								'books'
);