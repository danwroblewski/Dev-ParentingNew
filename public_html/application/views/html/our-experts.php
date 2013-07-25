<!-- =========================== CONTENT =========================== -->
<div class="container">
	<div class="sixteen contentcolumn columns alpha omega">
		<img src="/img/interior-topblur.png" width="100%" height="39" />
		<div class="twelve incontent columns paginated-content">
			<h1><?php echo $item->node_title; ?></h1>
			<?php print $printemail; ?>
			
			
			<div class="image alignright padleft padright"><?php echo $item->our_expert_profile_image; ?></div>
			
			<?php echo $item->Body;?>
			<?php 
				if($item->expert_article_tag<>"" || $item->expert_tag <> "") {
				
			 ?>
				
				<div class="twelve tags columns" style="margin:0;">
					<div align="center">
						<p style="margin:0;"><strong>Tags:</strong>
						
						<?php 
						if($item->expert_article_tag<>""){
							
							$tag		=	urldecode($item->expert_article_tag); 
							$tag 		= 	explode(",",$tag);
							if($tag<>""){
								for($i=0;$i<=count($tag);$i++){?>
								<a href="/category/<?php echo $tag[$i]; ?>" class="tags"><?php echo ucwords($tag[$i]); ?></a>
								<?php }
							 }
						
						?>
							
						<?php 
						}?>
						<?php 
						if($item->expert_tag<>""){
							
							$tag		=	urldecode($item->expert_tag);
							$tag 		= 	explode(",",$tag);
 
							if($tag<>""){
								for($i=0;$i<=count($tag);$i++){?>
								<a href="/category/<?php echo $tag[$i]; ?>" class="tags"><?php echo ucwords($tag[$i]); ?></a>
								<?php }
							 }
						
					
						}?>
						</p>
					</div> 
				</div>
				<img src="/img/printtray_blurtop.png" width="100%" />
				<? } ?>


			
		</div>
		
		<div class="four inyellowright columns">
			<img src="/img/ad-boystown.jpg" width="100%" />
			<a href="#" class="btn-hotline"><span>Hotline</span></a><br clear="all">
			<div class="btpress-back">
				<a href="#" class="btn-visitwebsite"><span>Visit Website</span></a>
			</div>
		</div>
	</div>
</div>
