<?php

function variable($var) 
{
	if($_POST)
	{
		return $_POST[$var];
	}
	else if($_GET)
	{
		return $_GET[$var];
	}
	else if($_COOKIE)
	{
		return $_COOKIE[$var];
	}
}

function vimeo_video_url($url)	
{
	
	$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec ($curl);
    curl_close ($curl);
    
    return $result;
}


/* id of video */
$album_id = variable('album-id');
$url = 'http://vimeo.com/api/v2/album/' . $album_id . '/videos.json';

$vimeo_album = json_decode(vimeo_video_url($url));

function build_list($list)
{
	$vid = '';
	
	$vid .= '<ul>';
	foreach($list as $video)
	{
		 $vid .= '<li class="video-thumbnail">';
		 $vid .= '<a href="#"  class="btn_vid vimeo" rel="' . $video->id . '" data-title="' . $video->title . '">';
		 $vid .= '<img src="' . $video->thumbnail_small . '" width="100" class="">';
		 $vid .= '<p>' . ucwords($video->title) . '</p>';
		 $vid .= '</a>';
		 $vid .= '</li>';
	}
	$vid .= '</ul>';
	
	return $vid;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<style rel="stylesheet">
	body{margin:0; padding:0;}
	iframe{ overflow:hidden; width:100%;}
	.vid{ 
		width: 100%; 
		height: 388px; 
		background: #3a3a3a; 
		margin: 0 auto; 
		border-bottom: 2px solid #fff; 
	}
	#videoholder {
		display:inline-block;
		margin: 0 auto;
	}
	.video-thumbnail {
		margin: 0;
		height: 133px;
		text-align: center;
		background: rgba(255, 255, 255, 0.2);

		/* background: rgba(0, 0, 0, 0.6);  */
		border:1px solid #fff; /* #515151; */
		padding:7px 3px 5px 3px;
		border-bottom: 0px;
		border-top: 0px;
		
	}
	.video-thumbnail:First-child {
		border-left:2px solid #fff; /* #515151; */
	}
	.video-thumbnail:Last-child {
		border-right:2px solid #fff; /* #515151; */
	}
	.video-thumbnail p {
		color: #e7e5b4;
		font-size:13px;
		font-family: helvetica;
		margin: 5px 0;
	}
	.video-thumbnail a {
		color: #e7e5b4;
		font-size:13px;
		font-family: helvetica;
		text-decoration:none;
		margin: 5px 0;
	}
	.video-thumbnail a:hover {
		color: #e7e5b4;
		font-size:13px;
		font-family: helvetica;
		text-decoration:underline;
	}
	.list { 
	margin: auto;
	text-align:center; 
	display: block; 
	width: 100%;
	height: 133px;
	background: -moz-linear-gradient(top,  rgba(81,81,81,0.98) 0%, rgba(81,81,81,0.99) 25%, rgba(0,0,0,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(81,81,81,0.98)), color-stop(25%,rgba(81,81,81,0.99)), color-stop(100%,rgba(0,0,0,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(81,81,81,0.98) 0%,rgba(81,81,81,0.99) 25%,rgba(0,0,0,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(81,81,81,0.98) 0%,rgba(81,81,81,0.99) 25%,rgba(0,0,0,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(81,81,81,0.98) 0%,rgba(81,81,81,0.99) 25%,rgba(0,0,0,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(81,81,81,0.98) 0%,rgba(81,81,81,0.99) 25%,rgba(0,0,0,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fa515151', endColorstr='#000000',GradientType=0 ); /* IE6-9 */

	}
</style>

<link rel="stylesheet" type="text/css" href="/css/jcarousel.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.jcarousel.min.js"></script>
<script>
	
$(document).ready(function() {
	
	$('#videoholder').jcarousel();
		
	$('.vid').html('<iframe src="/movie/vimeo-share.php?video=' + $('.list div:first a').attr('rel') + '&size=690,388&title=' + $(this).attr('data-title') + '" width="690" height="388" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
	
	$('.vimeo').click(function() {
		//$('.vid').html();
		$('.vid').html('<iframe src="/movie/vimeo-share.php?video=' + $(this).attr('rel') + '&size=690,388&title=' + $(this).attr('data-title') + '" width="690" height="388" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
		//pageTracker._trackEvent('Movie', 'click', $(this).attr('data-title'));
		return false;
	});
});
</script>
</head>
<body>

<div class="vid"></div>
<div class="list">
	<div id="videoholder">
	<?php echo build_list($vimeo_album); ?>
	</div>
</div>
</body>
</html>