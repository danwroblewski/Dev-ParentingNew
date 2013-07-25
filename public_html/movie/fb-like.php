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

/* id of video */
$id = variable('video');
$title = ucfirst(str_replace('_', ' ', variable('title')));

/* size of video */
$size = explode(',', variable('size'));
$width = $size[0];
$height = $size[1];

?>

<style rel="stylesheet">
	body{
	margin:0; 
	padding:0; 
	/* background: url('/sites/all/themes/boystowndotorg/campaign-images/bg_internal2.jpg') 0 0 no-repeat;  */
	position: relative;
	}
	#logo {
		float: left;
		display: inline-block;
		margin-right: 10px;
		border: 1px solid #c1c1c1;
	}
	
	.wrap {
		margin: 10px;
		border: #333;
		background: #FFFFD6;
		float: left;
		padding: 20px;
		font-family: "Verdana",Helvetica,Arial,san-serif;
		font-weight: bold;
		color: #005480;
		width:500px;
		height: 100px;
		
	}
	
	
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
</head>
<body>

<!-- <span id="logo" class="grid-4 alpha"><a href="/" rel="home"><img src="/sites/default/files/logo.png" alt="Home" title="Home" width="242" height="74" /></a></span> -->
<div class="wrap">
<img src="images/4280328_300.jpeg" alt="Home" title="Home" width="74" height="74" id="logo" />
<div style="float:left; display: inline-block;">
<p>Like <?php echo $title; ?> - From Boys Town </p>
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fvimeo.com%2F<?php echo variable('video'); ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px; float:left;" allowTransparency="true"></iframe>
</div>
</div>

</body>
</html>