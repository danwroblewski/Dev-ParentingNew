<div class="twelve columns">

	<?php if(empty($list)) : ?>
		<h2 style="margin-top:0;">Oops!</h2>
		<h3 style="font-weight: normal;">Your search yielded no results.</h3>
		<p>Our search tool is based on keywords, try to limit your search to one or two words. Once you receive results you can then narrow further by age and content type to help you find the most relevant information.</p>
		<p>We have also pulled popular content into our <a href="/guides" title="Guides">guides</a> sections and recommend you check it out as well.</p>
		<?php else:?>
		
		
		<div style="float:left; width:100%;">
		<h3 style="font-weight: normal;">Refine your search:</h3>

<!-- <div id="refinesearch"> -->
			<form method="post" action="/search/results" class="search-bar" style="margin:0 0 0 20px;">
			
			
			
			<select name="type">
				<option value=""<?php echo (empty($_POST['type']) || !isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>&lt;Any&gt;</option>
				<option value="article"<?php echo ($_POST['type'] == 'article' && isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>Articles</option>
				<option value="ask_an_expert"<?php echo ($_POST['type'] == 'ask_an_expert' && isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>Ask An Expert</option>
				<option value="quick_tips"<?php echo ($_POST['type'] == 'quick_tips' && isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>Quick Tips</option>
				<option value="videos"<?php echo ($_POST['type'] == 'videos' && isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>Videos</option>
			</select>
			<select name="age">
				<option value=""<?php echo (empty($_POST['age']) || !isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Browse by Age</option>
				<option value="Toddlers"<?php echo ($_POST['age'] == 'Toddlers' && isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Toddlers</option>
				<option value="Early Childhood"<?php echo ($_POST['age'] == 'Early Childhood' && isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Early Childhood</option>
				<option value="Tweens"<?php echo ($_POST['age'] == 'Tweens' && isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Tweens</option>
				<option value="Adolescence Teens"<?php echo ($_POST['age'] == 'Adolescence Teens' && isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Adolescence/Teens</option>
			</select>
			
			
			
			<input type="hidden" name="search_query" value="<?php echo $_POST['search_query']; ?>">
			
			<input value="Refine" type="submit" />
			</form>
	<!-- </div> -->
		<div style="clear:both;"></div>
		<h2 style="margin-top:0;">Search Results <?php echo $list_of_keywords; ?></h2>	
			
		</div>
		
		
		<div class="columnsearch">
		<ul class="listed-content content new">
		<?php 
		#echo "<pre>";print_r($list);<ul class="listed-content content">
		foreach($list as $item):
	
			if($item->node_type=='videos')	
			{ 
				if($item->video_url<>"")
				{
					if(stristr($item->video_url,"vimeo")==TRUE)
					 { 
						$vimeo 		= explode("/",$item->video_url);
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
			}
			
		//$url	= "";
		#echo "type==>".$item->node_type;
			switch($item->node_type) {
						case "article" :{
											$url		= "article";
											$icon_css	= "columnsearch-art";
										}
										break;
						case "page" : 
										
										$url			= "basic-page";
										break;				
				
						case "common_sense_parenting" :
										$url			= "common-sense-parenting";
										break;
						case "experts" : 
										$url			= "our-experts";
										break;
						case "ask_an_expert" : {
										$url			= "questions-and-answers";
										$icon_css		= "columnsearch-qanda";
										}
										break;
						case "quick_tips" :{
										$url			= "quick-tips";
										$icon_css		= "columnsearch-tips";
										}
										break;
						case "videos" : 
										$url			= "videos";
										break;
						case "competing_with_character" : 
										$url			= "competing-with-character";
										break;				
										
				
				
			}
			
			//echo "url=>". $url; 
			$url_alias = explode("/",$item->url);
		?>
		<?php 
		if($item->node_type=='videos'){
		?>
			<li class="columnsearch-video"> 
				<h3><a href="#" class="<?php echo $class; ?>" rel="<?php echo $rel; ?>" data-title="<?php echo $datatitle; ?>"><?php echo ascii_to_entities($item->node_title); ?></a></h3>
				<p><?php echo word_limiter(ascii_to_entities(strip_tags($item->Body)), 20); ?></p>				
			</li>
		<?php } else { ?>
			<li class="<?php echo $icon_css; ?>">
			<h3>
			<?php /* if($item->node_type=='page'){?><a href="#" class="searchresult"> <?php } else { */?>
			<a href="/<?php echo $url . '/' . $url_alias[3]; ?>" class="searchresult"><?php echo ascii_to_entities($item->node_title); ?></a></h3>
			<p>
			<?php 
				if(count($item->Body)<>0) { echo word_limiter(ascii_to_entities(strip_tags($item->Body)), 20);} else if(count($item->tips_body)<>0){ echo word_limiter(ascii_to_entities(strip_tags($item->tips_body)), 20); }
				if(count($item->Body)==0 && count($item->tips_body)==0 ) { echo "";}
			?></p>
			</li>
		
		<?php }?>
		<?php endforeach; ?>
		</ul>
		</div>
		
	<?php endif; ?>

</div>
