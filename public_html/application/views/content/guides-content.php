<!-- =========================== CONTENT =========================== -->
<div class="container">
	<div class="sixteen contentcolumn columns alpha omega">
		<img src="/img/interior-topblur.png" width="100%" height="39" />
		<div class="twelve incontent columns">
			
			<h1><?php  $string 	= str_replace("-", " ", $this->uri->segment(3)); echo ucwords($string);?></h1>
			
<!-- ================ BEGIN header paragraph and graphic for guide pages ==================== -->



			
<div class="guidehead">
			<?php if($this->uri->segment(3)=="media-and-parenting") {?>
				<p><img src="/img/guidepage-image-media.png" border="0" />We live in an information age — and our kids are the ultimate receivers. Make sure your family is the headline in your home.</p>
			<?php }?>
			<?php if($this->uri->segment(3)=="youth-sports") {?>
				<p><img src="/img/guidepage-image-sports.png" border="0" />In your child’s soccer game, do you find yourself cursing the poor referee? Does your child yell at teammates when a ball is dropped? Put the fun back in youth sports.</p>
			<?php }?>
			<?php if($this->uri->segment(3)=="sleep-issues") {?>
				<p><img src="/img/guidepage-image-sleep.png" border="0" />Your child may not be an infant anymore, but sleeping through the night can still be a struggle. Boys Town’s research-proven parenting techniques can help give you the advice and tips you need for a good night’s rest.</p>
			<?php }?>
			<?php if($this->uri->segment(3)=="bullying") {?>
				<p><img src="/img/guidepage-image-bullying.png" border="0" />Bullying is more common than anyone would like to admit. Learn how to protect your child and recognize when your child is the bully.</p>
			<?php }?>
			<?php if($this->uri->segment(3)=="relationships-dating") {?>
				<p><img src="/img/guidepage-image-dating.png" border="0" />Peer relationships are critical to your child’s growth. Just be sure they can recognize when a relationship is unhealthy.</p>
			<?php }?>
			<?php if($this->uri->segment(3)=="potty-training") {?>
				<p><img src="/img/guidepage-image-pottytrain.png" border="0" />Potty training is difficult for both the child and the parent. Boys Town’s research-proven tips on timing, techniques and advice to help you both succeed.</p>
			<?php }?>
			<?php if($this->uri->segment(3)=="communicating-with-teens") {?>
				<p><img src="/img/guidepage-image-communication.png" border="0" />Many days you may feel like you’re talking to a brick wall – if you even get to talk with your teen at all. If you arm yourself well, you can break down any barrier.</p>
			<?php }?>
			<?php if($this->uri->segment(3)=="harmful-behaviors") {?>
				<p><img src="/img/guidepage-image-behaviors.png" border="0" />Are you afraid your child has an eating disorder or is smoking marijuana? How can you tell? And what can you do to stop it? Boys Town’s research-proven parenting techniques can help.</p>
			<?php }?>
			
			<?php if($this->uri->segment(3)=="back-to-school") {?>
				<p><img src="/img/guidepage-image-backtoschool.png" border="0" />School and all of its activities is the center of your child's life. Learn when you need to step in and when you should let your child figure things out on their own.</p>
			<?php }?>
			
	</div>

			
<!-- ================ END header paragraph and graphic for guide pages ==================== -->		
			
			<div class="content guidedetail-content">
			
			
			<h1><img src="/img/<?php echo $image;?>" height="50" style="margin-bottom:-10px" align="middle"  /> <?php echo $heading;?></h1>
			<!--<img src="/img/printtray_blurtop.png" width="100%" />-->
			<div class="twelve guidenav paginated-guidedetail-content">
				<div class="content">
		<?php 
			
				$flag		= 0;
				$art		= 0;
				$tips		= 0;
				$video		= 0;
			//	echo "<pre>" ; print_r($result);
				if($result<>""){
				for($i=0;$i<=count($result);$i++){ 
					if($result[$i]->content_type=='Article'){ $art =1;}
					if($result[$i]->content_type=='Quick Tips'){$tips =1;}
					if($result[$i]->content_type=='Videos'){ 
						$video =1;
						
					}
					
					if($result[$i]->content_type== $content_type) {
						$flag 	=	1;
						$title	= explode("/",$result[$i]->url);
						$title 	= str_replace("’", "", $title[3]);
			?>
						<?php if($content_type=="Videos") {
						
						if($result[$i]->video_url<>""){
							if(stristr($result[$i]->video_url,"vimeo")==TRUE) { 
								$vimeo 		= explode("/",$result[$i]->video_url);
								$class		= "vimeo"; 
								$rel		= $vimeo[3];
								$datatitle	= "Overview";
							} else 
							{ 
								$class		= ""; 
								$rel		= ""; 
								$datatitle	= "";
							} 					
						}
							
						?>
				<p class="guide-item"> <a href="#"  style="text-decoration:none;font-weight:normal; color:#015480;font-size:16px;line-height:22px" class="<?php echo $class; ?>" rel="<?php echo $rel; ?>" data-title="<?php echo $datatitle; ?>"><?php echo $result[$i]->node_title ."<br />"; ?></a>	</p>
				<?php } else {?>
						<p class="guide-item"><a href="../../<?php echo $url."/".$title;?>" class="searchresult" style="text-decoration:none;font-weight:normal;"><?php 	echo $result[$i]->node_title ."<br />";?></a></p>
						<?php } ?>
						<?php 
					}
				} 
			if($flag==0){ ?>
				<h2><?php echo "No Result"; ?></h2>
			<?php } }  ?>

<?php 
	$qanda	=	0;
	#echo "<pre>" ; print_r($result1);
	if($result1<>""){
		$qanda	= 1;
		$flag2	= 0;
		$teen	= 0;
		$com	= 0;
		if($this->uri->segment(3)=="media-and-parenting"){	$art =1;  }
		if($this->uri->segment(3)=="youth-sports") {$art =1;  $video =1; }
		if($this->uri->segment(3)=="sleep-issues") {$art =1; $tips =1; }
		if($this->uri->segment(3)=="bullying") { $art =1; $tips =1; $video =1;}
		if($this->uri->segment(3)=="relationships-dating") { $art =1; }
		if($this->uri->segment(3)=="potty-training") { $art =1;  $video =1; }
		if($this->uri->segment(3)=="communicating-with-teens") {  $art =1;  $video =1;}
		if($this->uri->segment(3)=="harmful-behaviors") {$art =1; $tips =1;  }
		if($this->uri->segment(3)=="back-to-school") {$art =1; $tips =1; $video =1; }
		
		for($i=0;$i<=count($result1);$i++){ 
			
			if($this->uri->segment(3)=="communicating-with-teens")
			{
				if(stristr($result1[$i]->ask_expert_tags, 'teen')==TRUE) { $teen=1;} else { $teen=0;}
				if(stristr($result1[$i]->ask_expert_tags, 'communicate')==TRUE) {$com=1;}  else {$com=0;}
				$flag2 	=	1;
				$title	= explode("/",$result1[$i]->url);
				$title 	= str_replace("’", "", $title[3]);
			
			
				if($teen==1&&$com==1){ 
				?>
					<p class="guide-item"><a href="../../<?php echo $url."/".$title;?>" class="searchresult" style="text-decoration:none;font-weight:normal;"><?php 	echo $result1[$i]->node_title ."<br />";?></a></p>
				<?php 
				}
			
		
		if($flag2==0){ ?>
		<h2><?php echo "No Result"; ?></h2>
		<?php } }
		 else {?>
		
		<?php 
			$flag2 	=	1;
			$title	= explode("/",$result1[$i]->url);
			$title 	= str_replace("’", "", $title[3]);
			?>
			<p class="guide-item"><a href="../../<?php echo $url."/".$title;?>" class="searchresult" style="text-decoration:none;font-weight:normal;"><?php 	echo $result1[$i]->node_title ."<br />";?></a></p>
			<?php 
		
	} 
if($flag2==0){ ?>
	<h2><?php echo "No Result"; ?></h2>
<?php } } }  
?>
				
				</div>
				<div class="page_navigation"></div>

<!-- =========================== THREE BOXES =========================== -->
<div class="guide-button-container">
	<div class="guide-button-wrapper">
			<?php if($tips==1) { ?>
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(2)=="quicktips"?"selected":""; ?> columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-med-tip.png" width="64" height="59" />
					<p><a href="/guides/quicktips/<?php echo $this->uri->segment(3);?>"><span>QUICK TIPS</span><br />
					Read All Quick Tips &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			<?php } ?>
			
			<?php if($art==1) { ?>	
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(2)=="articles"?"selected":""; ?> columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-med-articles.png" width="64" height="59" />
					<p><a href="/guides/articles/<?php echo $this->uri->segment(3);?>"><span>ARTICLES</span><br />
					Search All Articles &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			<?php  } ?>
			<?php #if($this->uri->segment(3)<>"back-to-school") {  ?>
			
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(2)=="questions_and_answers"?"selected":""; ?> columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-med-q_and_a.png" width="64" height="59" />
					<p><a href="/guides/questions_and_answers/<?php echo $this->uri->segment(3);?>"><span>Q &amp; A'S</span><br />
					Read All Q&amp;A&rsquo;s &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			<?php #} ?>
			<?php if($video==1) { ?>	
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(2)=="videos"?"selected":""; ?> columns alpha omega">
			<div class="highlights">
				<img src="/img/icon-med-videos.png" width="64" height="59" />
				<p><a href="/guides/videos/<?php echo $this->uri->segment(3);?>"><span>VIDEOS</span><br />
				Watch All Videos &rsaquo;&rsaquo;</a></p>
			</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>	
			

			</div>
			
<?php print $printemail; ?>
				
	

			

		</div>
		<div class="four inyellowright columns">
			<a href="http://boystown.org/how-you-help"><img src="/img/ad-boystown.jpg" width="100%"  /></a>
			<a href="http://www.boystown.org/hotline" class="btn-hotline"><span>Hotline</span></a><br clear="all">
			<div class="btpress-back">
				<a href="http://www.boystownpress.org/" class="btn-visitwebsite"><span>Visit Website</span></a>
			</div>
		</div>
	</div>
</div>
