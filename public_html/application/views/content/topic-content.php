<!-- =========================== CONTENT =========================== -->
<div class="container">
	<div class="sixteen contentcolumn columns alpha omega">
		<img src="/img/interior-topblur.png" width="100%" height="39" />
		<div class="twelve incontent columns">
			
			<h1><?php  $string 	= str_replace("-", " ", $key); echo ucwords($string) ;?></h1>
			
<!-- ================ BEGIN header paragraph and graphic for guide pages ==================== -->

<!-- Need to replace static image and paragraph with php guide-specific image and paragraph -->

			
			<div class="guidehead">
			<?php if($key=="parenting-skills") { ?>
				<p><img src="/img/topicpage-image-parenting-skills.png" border="0" />All parents feel like they've reached the end of their rope with their children at some point in their relationship. Boys Town's research-proven parenting techniques can help.</p>
			<?php }?>
			<?php if($key=="understanding-behavior") { ?>
				<p><img src="/img/topicpage-image-understanding.png" border="0" />All parents have wondered at one point or another, "What was my child thinking?" The first step to correct the behavior is to understand the behavior.</p>
			<?php }?>
			<?php if($key=="discipline") { ?>
				<p><img src="/img/topicpage-image-discipline.png" border="0" />There are many different ideas on how to effectively parent children. Boys Town's approach combines both positive and negative consequences.</p>
			<?php }?>
			<?php if($key=="child-development") {?>
				<p><img src="/img/topicpage-image-development.png" border="0" />Children are constantly growing and changing - and so must your parenting. Learn how to be a more effective parent at all ages.</p>
			<?php }?>
			
			
			
			<?php if($key=="school") {?>
				<p><img src="/img/topicpage-image-school.png" border="0" />School and all of its activities is the center of your child's life. Learn when you need to step in and when you should let your child figure things out on their own.</p>
			<?php }?>
			
			
			
			
			<?php if($key=="social-skills") { ?>
				<p><img src="/img/topicpage-image-social-skills.png" border="0" />The most important skills we can teach our children are social, such as introducing yourself and showing appreciation. They may be simple, but don't underestimate their power when used - or not used.</p>
			<?php }?>
			<?php if($key=="connecting-with-kids") {?>
				<p><img src="/img/topicpage-image-connecting.png" border="0" />As parents, you need to be involved in your child's life. Studies show that children with involved parents are more successful in life.</p>
			<?php }?>
			<?php if($key=="pediatric-health") { ?>
				<p><img src="/img/topicpage-image-pediatrics.png" border="0" /> Boys Town Pediatrics, in partnership with Alegent Health, is a select group of highly trained pediatricians committed to the health and well-being of children of all ages.</p>
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
						$video 		= 0;
						$qanda 		= 0;
						$acount		=0;
						$tcount		=0;
						$vcount		=0;
						$qcount		=0;
						if($result<>""){
							$flag 	=	1;
							for($i=0;$i<=count($result);$i++){ 
							if($result[$i]->content_type=='Article')
							{ 
							$art =1; 
							 $acount++;
							
							}
							if($result[$i]->content_type=='Quick Tips'){$tips =1;  $tcount++;}
							if($result[$i]->content_type=='Videos'){ $video =1;  $vcount++;}
							if($result[$i]->content_type=='Questions and Answers'){ $qanda =1; $qcount++;}
							
							$title	= explode("/",$result[$i]->url);
							$title 	= str_replace("’", "", $title[3]);
							if($result[$i]->content_type== $content_type) 
							{
						
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
					<p class="guide-item"> <a href="#" style="text-decoration:none;font-weight:normal; color:#015480;font-size:16px;line-height:22px" class="<?php echo $class; ?>" rel="<?php echo $rel; ?>" data-title="<?php echo $datatitle; ?>"><?php echo $result[$i]->node_title ."<br />"; ?></a>	</p>
				<?php } else {?>
						<p class="guide-item"><a href="../../<?php echo $url."/".$title;?>" class="searchresult" style="text-decoration:none;font-weight:normal;"><?php 	echo $result[$i]->node_title ."<br />";?></a></p>
						<?php } ?>
						
						
					<?php 
							} 
						}
					if($flag==0){ ?>
						<h2><?php echo "No Result"; ?></h2>
					<?php 
						} 
					} 
					
					?>
				
				</div>
				<div class="page_navigation"></div>


<!-- =========================== THREE BOXES =========================== -->
	<div class="guide-button-container">
	<div class="guide-button-wrapper">
			<?php if($tips==1) { ?>
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(2)=="quicktips"?"selected":""; ?> columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-med-tip.png" width="64" height="50" />
					<p><a href="/topic/quicktips/<?php echo $key;?>"><span>QUICK TIPS<br />(<?php echo $tcount;?>)</span><br />
					Read All Quick Tips &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			<?php } ?>
			
			<?php  if($art==1) { ?>	
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(2)=="articles"?"selected":""; ?> columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-med-articles.png" width="64" height="50" />
					<p><a href="/topic/articles/<?php echo $key;?>"><span>ARTICLES <br />(<?php echo $acount;?>)</span><br />
					Search Articles &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			<?php  } ?>
			<?php  if($qanda==1) { ?>
			
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(2)=="questions_and_answers"?"selected":""; ?> columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-med-q_and_a.png" width="64" height="50" />
					<p><a href="/topic/questions_and_answers/<?php echo $key;?>"><span>Q &amp; A'S<br />(<?php echo $qcount;?>)</span><br />
					Read All Q&amp;A&rsquo;s &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			<?php  } ?>
			<?php  if($video==1) { ?>	
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(2)=="videos"?"selected":""; ?> columns alpha omega">
			<div class="highlights">
				<img src="/img/icon-med-videos.png" width="64" height="50" />
				<p><a href="/topic/videos/<?php echo $key;?>"><span>VIDEOS<br />(<?php echo $vcount;?>)</span><br />
				Watch All Videos &rsaquo;&rsaquo;</a></p>
			</div>
			</div>
			<?php } ?>
	</div></div>		
			
			</div>	
			
			
			

			</div>
			
<?php print $printemail; ?>
				
	

			

		</div>
		<div class="four inyellowright columns">
			<a href="http://www.boystown.org/how-you-help"><img src="/img/ad-boystown.jpg" width="100%" /></a>
			<a href="http://www.boystown.org/hotline" class="btn-hotline"><span>Hotline</span></a><br clear="all">
			<div class="btpress-back">
				<a href="http://www.boystownpress.org/" class="btn-visitwebsite"><span>Visit Website</span></a>
			</div>
		</div>
	</div>
</div>
