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
$autoplay = (variable('autoplay') == 'true') ? '?autoplay=1' : '';
$title = ucwords(str_replace('_', ' ', variable('title')));

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
	.share {
		position: absolute;
		top:80px;
		left:0;
	}
	
	.share .fb {
		position: relative;
		top:0;
		left:-110px;
	}
	.share .t {
		position: relative;
		top:0;
		left:-110px;
	}
	.share .p {
		position: relative;
		top:0;
		left:-110px;
	}
	.share ul {
		margin: 0;
		padding: 0;
	}
	.share ul li {
		list-style: none;
	}
	.share .fb, .share .t, .share .p{
		width:135px;
		*height: 25px;
		padding: 5px;
		background: #dfdfdf;
		display: block;
		overflow: hidden;
		border-bottom: 1px solid #ccc;
	}
	
	.share .fb a, .share .t a, .share .p a {
		*float:left;
	}
	
	.share .p {
		border-bottom: 0px solid #ccc;
	}
	
	.share .fb img, .share .t img, .share .p img {
		float: right;
	}
	
	.share .t iframe, .share .p iframe {
		float: left;
		width:107px !important;
	}
	
	.share .fb span, .share .fb span a {
		float: left;
		display: block;
		width:100px !important;
		position: relative;
	}
	
	.share .fb a img {
		float: left;
		display: block;
	}
	
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
	
$(document).ready(function(){
		// hover functions
		$('.share li').mouseenter(function() {
		    $(this).animate({left: '0'},600);
		});
		$('.share li').mouseleave(function() {
		    $(this).animate({left: '-110px'},600);
		});
		
		$('#player').append('<iframe src="//player.vimeo.com/video/<?php echo $id; echo $autoplay; ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" frameborder="0" scrolling="no"></iframe>')
	});
</script>
</head>
<body>
<div class="share">
	<ul>
		<li class="fb"><a href="http://www.facebook.com/sharer.php?u=http://www.vimeo.com/<?php echo variable('video'); ?>&title=<?php echo $title; ?>" target="_blank"><img src="/img/fb-share.png" width="67" height="18" border="0" /></a><!-- <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fvimeo.com%2F<?php echo variable('video'); ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px; float:left;" allowTransparency="true"></iframe> -->
		
		<img src="images/24x24-facebook.png" /></li>
		<li class="t"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://vimeo.com/<?php echo variable('video'); ?>"  data-text="Watch <?php echo $title; ?> by @boystown"></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script><img src="images/24x24-twitter.png" /></li>

		<li class="p"><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fvimeo.com%2F<?php echo variable('video'); ?>&media=http%3A%2F%2Fboystownnew.envoydev.com%2Fmovie%2Fimages%2F<?php echo variable('video'); ?>.jpeg&description=Watch%20<?php echo $title; ?>%20-%20From%20Boys%20Town&is_video=true" class="pin-it-button" count-layout="horizontal" style="float:left"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a><img src="images/24x24-pinterest.png" /></li>
	</ul>
</div>
<div id="player">

</div>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
</body>
</html>