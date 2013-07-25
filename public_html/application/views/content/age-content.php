<!-- =========================== CONTENT =========================== -->
<div class="container">
	<div class="sixteen contentcolumn columns alpha omega">
		<img src="/img/interior-topblur.png" width="100%" height="39" />
		<div class="twelve incontent columns">
			
			<h1><?php  $string 	= str_replace("-", " ", $key); echo ucwords($string);?></h1>
			
<!-- ================ BEGIN header paragraph and graphic for guide pages ==================== -->



			
<div class="guidehead">
			<?php if($key=="toddlers") {?>
				<p><img src="/img/age-toddlers.png" border="0" />The first years of your child’s life are filled with promise and potential. They also fill you with lots of questions and anxiety.</p>
			<?php }?>
			<?php if($key=="early-childhood") {?>
				<p><img src="/img/age-early-childhood.png" border="0" />Prepare yourself for lots of questions as your child learns to become more independent and develops their personality.</p>
			<?php }?>
			<?php if($key=="tweens") {?>
				<p><img src="/img/age-tweens.png" border="0" />How often do you hear, "I'm too old for this"? And how often do you think, "But you're too young for that"? It's a constant struggle – the desire for independence versus the need for boundaries.</p>
			<?php }?>
			<?php if($key=="adolescence-teens") {?>
				<p><img src="/img/age-adolescence-teens.png" border="0" />Teen years are unpredictable. However, you can play a significant role in shaping the decisions your teen makes by teaching through word and example.</p>
			<?php }?>
			
			
	</div>

			
	<!-- ================ END header paragraph and graphic for age pages ==================== -->		
			
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
		#echo "<pre>";print_r($result);
		if($result<>""){
		for($i=0;$i<=count($result);$i++){ 
				if($result[$i]->content_type=='Article'){ $art =1;}
				if($result[$i]->content_type=='Quick Tips'){$tips =1;}
				if($result[$i]->content_type=='Videos'){ $video =1;}
				if($result[$i]->content_type=='Questions and Answers'){ $qna =1;}
				
			if($result[$i]->content_type== $content_type) {
			
				$flag 					= 1;
				$title					= explode("/",$result[$i]->url);
				$title 					= str_replace("’", "", $title[3]);
	
				if($content_type=="Videos") {
				
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
			$url		= $result[$i]->url;
		
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
		<?php } 
		}  ?>				
		</div>
	<div class="page_navigation"></div>

<!-- =========================== THREE BOXES =========================== -->
	<div class="guide-button-container">
		<div class="guide-button-wrapper">
			<?php if($tips==1) { ?>
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(2)=="quicktips"?"selected":""; ?> columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-med-tip.png" width="64" height="59" />
					<p><a href="/age/quicktips/<?php echo $key;?>"><span>QUICK TIPS</span><br />
					Read All Quick Tips &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			<?php } ?>
			
			<?php if($art==1) { ?>	
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(2)=="articles"?"selected":""; ?> columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-med-articles.png" width="64" height="59" />
					<p><a href="/age/articles/<?php echo $key;?>"><span>ARTICLES</span><br />
					Search All Articles &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			<?php  } ?>
			<?php if($qna==1)  {  ?>
			
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(2)=="questions_and_answers"?"selected":""; ?> columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-med-q_and_a.png" width="64" height="59" />
					<p><a href="/age/questions_and_answers/<?php echo $key;?>"><span>Q &amp; A'S</span><br />
					Read All Q&amp;A&rsquo;s &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			<?php } ?>
			<?php if($video==1) { ?>	
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(2)=="videos"?"selected":""; ?> columns alpha omega">
			<div class="highlights">
				<img src="/img/icon-med-videos.png" width="64" height="59" />
				<p><a href="/age/videos/<?php echo $key;?>"><span>VIDEOS</span><br />
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
			<img src="/img/ad-boystown.jpg" width="100%"  />
			<a href="/national-hotline" class="btn-hotline"><span>Hotline</span></a><br clear="all">
			<div class="btpress-back">
				<a href="http://www.boystownpress.org/" class="btn-visitwebsite"><span>Visit Website</span></a>
			</div>
		</div>
	</div>
</div>
