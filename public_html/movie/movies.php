<?php 

$movie = strtolower($_GET['movie']);

switch($movie)
{
	case 'power2change':
		$id = '1785535192001';
	break;
	case 'beginnings':
		$id = '1743550602001';
	break;
	case 'jasonandalondra':
		$id = '1841039762001';
	break;
	case 'possible':
		$id = '1743558672001';
	break;
	case 'change':
		$id = '1743550636001';
	break;
	case 'success':
		$id = '1743559011001';
	break;
	case 'lily':
		$id = '666271049001';
	break;
	case 'valery':
		$id = '61449174001';
	break;
	case 'demarco':
		$id = '61456379001';
	break;
	case 'linda':
		$id = '61446175001';
	break;
	case 'shaw':
		$id = '1174452905001';
	break;
	case 'jim':
		$id = '1456386579001';
	break;
	case 'musgrove':
		$id = '1049099801001';
	break;
	case 'admissions':
		$id = '1569827136001';
	break;
	case 'virtual-tour':
		$id = '1571735092001';
	break;
	case 'ufc-movie':
		$id = '1630330580001';
	break;
	case 'tyler':
		$id = '1617846295001';
	break;
	case 'kelsey':
		$id = '1617846281001';
	break;
	case 'philipandpatti':
		$id = '62750630001';
	break;
	case 'wishpsa':
		$id = '180329486001';
	break;
	case 'nowpsa':
		$id = '180336747001';
	break;
	case 'parentsspeak':
		$id = '61455072001';
	break;
	case 'textingpsa':
		$id = '1663816091001';
	break;
	case 'stephencollins':
		$id = '1663797478001';
	break;
	case 'tony1':
		$id = '1822212782001';
	break;
	case 'tony2':
		$id = '1822508071001';
	break;
	case 'tony3':
		$id = '1822433448001';
	break;
	case 'ed1':
		$id = '1838706102001';
	break;
	case 'ed2':
		$id = '1838712059001';
	break;
	case 'ed3':
		$id = '1838754095001';
	break;
}
?>

<a class="close_video" href="#"></a>
<div style="font-family:'Verdana', Helvetica, Arial, san-serif; font-size:12px; color:#666; text-align:center; background:url('/sites/all/themes/boystowndotorg/images/ajax-loader.gif') 250px 200px no-repeat;">

<!-- Start of Brightcove Player -->

<div style="display:none">

</div>

<?php if($id == '1456386579001'): ?>
<div style="border:1px solid #333; padding:10px; position:relative;">
<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences_all.js"></script>

<object id="myExperience1456386579001" class="BrightcoveExperience">
  <param name="bgcolor" value="#FFFFFF" />
  <param name="width" value="480" />
  <param name="height" value="270" />
  <param name="playerID" value="1564021088001" />
  <param name="playerKey" value="AQ~~,AAAADXbYo6E~,Iz4plESR6bWZ-NRwV9GYkVpi1j0uX-7P" />
  <param name="isVid" value="true" />
  <param name="isUI" value="true" />
  <param name="dynamicStreaming" value="true" />
  
  <param name="@videoPlayer" value="1456386579001" />
</object>
	<div>
		<p style="text-align:left; margin:10px 10px 0 10px; width:370px; padding-right:5px; border-right:1px solid #333;">Jim&rsquo;s life wasn&rsquo;t easy to begin with, and when he became involved with gangs he was on a path to ruin. Then he found Boys Town, and a purpose in life, to help turn his life around.</p>
		<div style="position:absolute; left:420px; top: 300px; width: 80px; height: 27px; background:#97C6DA;">
			<ul class="video-icons">
			<li class="video-enews"><a href="https://secure.boystown.org/eNewsletter" title="Enews Sign-Up" alt="Enews Sign-Up">enews</a></li>
			<li class="video-fb"><a href="http://www.facebook.com/BoysTownMission" title="Like Us" alt="Like Us">facebook</a></li>
			</ul>
		</div>
		<div style="position:absolute; left:420px; top: 326px; width: 80px; height: 26px;">
		<ul class="video-icons">
			<li class="video-twitter"><a href="http://twitter.com/#!/BoysTownMission" title="Follow Us" alt="Follow Us">twitter</a></li>
			<li class="video-youtube"><a href="http://www.youtube.com/boystownusa" title="See More Videos" alt="See More Videos">YouTube</a></li>
			</ul>
		</div>
	</div>
</div>
<?php else: ?>
<!--
By use of this code snippet, I agree to the Brightcove Publisher T and C 
found at https://accounts.brightcove.com/en/terms-and-conditions/. 
-->
<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences_all.js"></script>
<object id="myExperience<?php echo $id; ?>" class="BrightcoveExperience">
  <param name="bgcolor" value="#FFFFFF" />
  <param name="width" value="520" />
  <param name="height" value="441" />
  <param name="playerID" value="57826124001" />
  <param name="playerKey" value="AQ~~,AAAADXbYo6E~,Iz4plESR6bUMEH9XqaezVwyFyzT-QwHE" />
  <param name="isVid" value="true" />
  <param name="dynamicStreaming" value="true" />
    
  <param name="@videoPlayer" value="<?php echo $id; ?>" />
</object>
<?php endif; ?>
<div id="video-overlay" style="display:none; background:url('/sites/all/themes/boystowndotorg/images/video-overlay.jpg') no-repeat; width:520px; height:119; border:none;">
	<a href="https://secure.boystown.org/donate/default.aspx" alt="Help save children and heal families. Donate today!"><img src="/sites/all/themes/boystowndotorg/images/pixel.gif" style="width:520px; height:119px; border:none;" /></a>
</div>
</div>

<!-- 
This script tag will cause the Brightcove Players defined above it to be created as soon
as the line is read by the browser. If you wish to have the player instantiated only after
the rest of the HTML is processed and the page load is complete, remove the line.
-->

<script type="text/javascript">

var player;
var videoPlayer; 

function onTemplateLoaded(experienceId) {
                player = brightcove.getExperience(experienceId);
                videoPlayer = player.getModule(APIModules.VIDEO_PLAYER);
                pauseState = false;
            }
            
function togglePause() {
                if (videoPlayer.isPlaying()) {
                    videoPlayer.pause(true);
                } else {
                    videoPlayer.pause(false);
                }
            }

$('.close_video').click(function() {
	$('#video_box').jqmHide();
	togglePause();
	return false;
});

$().ready(function() {
	setTimeout("$('#video-overlay').slideDown(300).fade(300)", 30000);
	$('.front #page a[href^="https://secure.boystown.org"]').click(function() {
		pageTracker._trackEvent('E-form', 'click', $(this).attr('href'));
	});	
});

</script>

<script type="text/javascript">brightcove.createExperiences();</script>

<!-- End of Brightcove Player -->