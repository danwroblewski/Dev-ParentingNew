<div class="twelve columns">

	<?php if(empty($list)) : ?>
		<h2 style="margin-top:0;">Oops!</h2>
		<h3 style="font-weight: normal;">Your search yielded no results.</h3>
		<p>Our search tool is based on keywords, try to limit your search to one or two words. Once you receive results you can then narrow further by age and content type to help you find the most relevant information.</p>
		<p>We have also pulled popular content into our <a href="/guides" title="Guides">guides</a> sections and recommend you check it out as well.</p>
	<?php else: ?>
		
		
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
		
		
		
			<ul class="listed-content content">
		<?php 
		
		/*
	
		foreach($list as $item):
		
			if($item->node->type=='videos')	
			{ 
				if($item->node->field_video_id->und[0]->value<>"")
				{
					if(stristr($item->node->field_video_id->und[0]->value,"vimeo")==TRUE)
					 { 
						$vimeo 		= explode("/",$item->node->field_video_id->und[0]->value);
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
			$url_alias = explode("/",$item->link);
			*/
		
		#echo "<pre>";print_r($list);
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
			
		
			switch($item->node_type) {
						case "article" : 
										$url		= "article";
										
										break;
				
						case "common_sense_parenting" :
										$url		= "common-sense-parenting";
										
										break;
						case "experts" : 
										$url		= "our-experts";
										break;
						case "ask_an_expert" : 
										$url		= "questions-and-answers";
									
										break;
						case "quick_tips" :
										$url		= "quick-tips";
										
										break;
						case "videos" : 
										$url		= "videos";
										break;
						case "competing_with_character" : 
										$url		= "competing-with-character";
										break;				
										
				
				
			}
			
			//echo "url=>". $url; 
			$url_alias = explode("/",$item->url);
		?>
		<?php 
		if($item->node->type=='videos'){
		?>
			<li> 
				<h3><a href="#" class="<?php echo $class; ?>" rel="<?php echo $rel; ?>" data-title="<?php echo $datatitle; ?>"><?php echo ascii_to_entities($item->title); ?></a></h3>
				<p><?php echo word_limiter(ascii_to_entities(strip_tags($item->node->body->und[0]->value)), 20); ?></p>				
			</li>
		<?php } else {?>
			<li>
			<h3><a href="/<?php echo url_title(strtolower($item->type)) . '/' . $url_alias[5]; ?>" class="searchresult"><?php echo ascii_to_entities($item->title); ?></a></h3>
			<p><?php echo word_limiter(ascii_to_entities(strip_tags($item->node->body->und[0]->value)), 20); ?></p>
			</li>
		
		<?php }?>
		<?php endforeach; ?>
		</ul>
		
		
		
	<?php endif; ?>

</div>
