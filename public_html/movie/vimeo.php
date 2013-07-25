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

/* size of video */
$size = explode(',', variable('size'));
$width = $size[0];
$height = $size[1];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<style rel="stylesheet">
	body{margin:0; padding:0;}
	iframe{ overflow:hidden; }
</style>
</head>
<body>
<iframe src="//player.vimeo.com/video/<?php echo $id ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" frameborder="0" scrolling="no"></iframe>
</body>
</html>