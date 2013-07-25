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
$autoplay = variable('autoplay');
$title = ucfirst(variable('title'));

/* size of video */
$size = explode(',', variable('size'));
$width = $size[0];
$height = $size[1];

?>

<script>
	
$(document).ready(function(){
		$('.close_video').click(function() {
			$('#video_box').jqmHide();
			$('.vimeo-iframe').attr('src', '');
			return false;
		});
	});
</script>

<a class="close_video" href="#"></a>

<iframe class="vimeo-iframe" src="/movie/vimeo-share.php?video=<?php echo $id ?>&size=<?php echo $width ?>,<?php echo $height ?>&title=<?php echo $title ?>&autoplay=<?php echo $autoplay ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" frameborder="0" scrolling="no"></iframe>

<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
