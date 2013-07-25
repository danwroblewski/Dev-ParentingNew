
<!-- =========================== CONTENT =========================== -->
<div class="container">
	<div class="sixteen contentcolumn columns alpha omega">
		<img src="/img/interior-topblur.png" width="100%" height="39" />
		<div class="twelve incontent columns">
			
			<h1><?php echo $item->title; ?></h1>
			
			<?php print $printemail; ?>
			
			<div class="content">
			<?php echo $item->body->und[0]->value;?>
			<p>

			</div>
			
			<img src="/img/printtray_blurtop.png" width="100%" />
				<div class="twelve contentnav columns">
					<div class="contentnavleft"><a href="/videos" class="btn-back-videos"><span>Back</span></a></div>  
					<div class="contentnavright"><a href="https://secure.parenting.org/ask-an-expert/" class="btn-askaquestion"><span>Ask A Question</span></a></div>  
				</div>
				
				<img src="/img/printtray_blurbot.png" width="100%">
				
				<div class="twelve tags columns" style="margin:0;">
					<div align="center">
						<p style="margin:0;"><strong>Tags:</strong><?php foreach($tags as $tag): 

						$tag		=	urldecode($tag); 
						
						?>
							<a href="/category/<?php echo $tag; ?>" class="tags"><?php echo ucwords($tag); ?></a>
						<?php endforeach; ?></p>
					</div> 
				</div>
			<img src="/img/printtray_blurtop.png" width="100%" />

			
<!-- =========================== THREE BOXES =========================== 
			<div class="four highlight-box-home columns omega">
				<div class="highlights">
					<img src="/img/icon-checkmark.png" width="89" height="89" />
					<p><a href="/quick-tips"><span>QUICK TIPS</span><br />
					Read All Quick Tips &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			
			<div class="four highlight-box-home columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-articles.png" width="89" height="89" />
					<p><a href="/article"><span>ARTICLES</span><br />
					Search Articles &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			
			<div class="four highlight-box-home columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-questionmark.png" width="89" height="89" />
					<p><a href="/questions-and-answers"><span>Q &amp; A'S</span><br />
					Read All Q&amp;A&rsquo;s &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			
		</div>-->
		
				<!-- =========================== FOUR BOXES =========================== 	-->
		
<div class="guide-button-container">
	<div class="guide-button-wrapper">
			<?php #if($tips==1) { ?>
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(1)=="quick-tips"?"selected":""; ?> columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-med-tip.png" height="59" width="64" />
					<p><a href="/quick-tips/<?php echo $this->uri->segment(3);?>"><span>QUICK TIPS</span><br />
					Read All Quick Tips &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			<?php #} ?>
			
			<?php # if($art==1) { ?>	
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(1)=="article"?"selected":""; ?> columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-med-articles.png" width="64" height="59" />
					<p><a href="/article/<?php echo $this->uri->segment(3);?>"><span>ARTICLES</span><br />
					Search All Articles &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			<?php # } ?>
			<?php #if($this->uri->segment(3)<>"back-to-school") {  ?>
			
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(1)=="questions-and-answers"?"selected":""; ?> columns alpha omega">
				<div class="highlights">
					<img src="/img/icon-med-q_and_a.png" width="64" height="59" />
					<p><a href="/questions-and-answers/<?php echo $this->uri->segment(3);?>"><span>Q &amp; A'S</span><br />
					Read All Q&amp;A&rsquo;s &rsaquo;&rsaquo;</a></p>
				</div>
			</div>
			<?php #} ?>
			<?php #if($video==1) { ?>	
			<div class="new highlight-box-home-med <?php echo $this->uri->segment(1)=="videos"?"selected":""; ?> columns alpha omega">
			<div class="highlights">
				<img src="/img/icon-med-videos.png" width="64" height="59" />
				<p><a href="/videos/<?php echo $this->uri->segment(3);?>"><span>VIDEOS</span><br />
				Watch All Videos &rsaquo;&rsaquo;</a></p>
			</div>
			</div>
			<?php #} ?>
		</div>
	</div>
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
