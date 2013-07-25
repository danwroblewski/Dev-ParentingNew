<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<html lang="en">
<!--<![endif]-->

<head>

    <meta charset="utf-8">

    <title>Parenting<?php echo ($this->uri->segment(1, 0)) ? ' | ' . str_replace('Aaa', 'AAA', ucwords(str_replace('-', ' ', $this->uri->segment(1, 0)))) : '';?><?php echo ($this->uri->segment(2, 0)) ? ' | ' . ucwords(str_replace('-', ' ', $this->uri->segment(2, 0))) : '';?><?php echo ($this->uri->segment(3, 0)) ? ' | ' . ucwords(str_replace('-', ' ', $this->uri->segment(3, 0))) : '';?><?php echo ($this->uri->segment(4, 0)) ? ' | ' . ucwords(str_replace('-', ' ', $this->uri->segment(4, 0))) : '';?><?php echo ($this->uri->segment(5, 0)) ? ' | ' . ucwords(str_replace('-', ' ', $this->uri->segment(5, 0))) : '';?></title>

    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    
<!--================ CSS ================== -->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/skeleton.css">
    <link rel="stylesheet" href="/css/layout.css">
	<link rel="stylesheet" href="/css/colorbox.css" type="text/css">
    <link rel="stylesheet" href="/css/layout-in.css">
    <link rel="stylesheet" href="/css/fontface.css">
    <!--[if lt IE 9]>
    	<link rel="stylesheet" href="/css/ie.css" type="text/css">	
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if gte IE 8]>
    	<link rel="stylesheet" href="/css/ie.css" type="text/css">	
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
<!--================ JAVASCRIPT ================== -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
    <script src="/js/jquery.colorbox.min.js"></script>
    <script src="/js/jquery.pajinate.min.js"></script>
    <script src="/js/jquery.cycle.all.js"></script>
    <script src="/js/parenting.js"></script>
    <script src="/js/resetforms.js"></script>


<!--================ FAVICONS ================== -->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">


<!-- ================ Google Analytics ==================== -->

<script type="text/javascript" src="http://parentingnew.envoydev.com/content/sites/all/modules/google_analytics/googleanalytics.js?mqgmib"></script>


	
<!--================ SOCIAL BUTTONS ================== -->
	<script type="text/javascript">var switchTo5x=false;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "ur-e98f39c-7cf6-f688-60b0-d6d2223961e4", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body class="<?php echo (isset($home) && $home === TRUE) ? 'home' : 'interior' ?>"> <!-- WE HAVE TO SWITCH THIS AND REMOVE THE INTERIOR CLASS ON THE HOME PAGE -->
	<?php if(isset($pixel) && $pixel === TRUE) : ?>
	<!--
	<script type="text/javascript">
	adroll_adv_id = "F4U3FA5XTRCUHCGGWSYZS5";
	adroll_pix_id = "YXUEA64S6ND5XGAQLMWXBC";
	(function () {
	var oldonload = window.onload;
	window.onload = function(){
	   __adroll_loaded=true;
	   var scr = document.createElement("script");
	   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
	   scr.setAttribute('async', 'true');
	   scr.type = "text/javascript";
	   scr.src = host + "/j/roundtrip.js";
	   ((document.getElementsByTagName('head') || [null])[0] ||
	    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
	   if(oldonload){oldonload()}};
	}());
	</script>
	-->
	
	<?php endif; ?>
	<!-- ================ PRIMARY PAGE LAYOUT ================== -->
	
	    <?php echo $main_nav; ?>
	    
	    <?php echo $content; ?>
	    
	    <?php echo $footer; ?>
	    
	<!-- ================ END DOCUMENT ================== -->
</body>
</html>