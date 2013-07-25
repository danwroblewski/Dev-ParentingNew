<div class="twelve columns">
	
	<?php if(empty($result)) : ?>
		<h2 style="margin-top:0;">Your search yielded no results</h2>
		<ul>
			  <li>Check if your spelling is correct.</li>
			  <li>Remove quotes around phrases to search for each word individually. <em>bike shed</em> will often show more results than <em>&quot;bike shed&quot;</em>.</li>
			  <li>Consider loosening your query with <em>OR</em>. <em>bike OR shed</em> will often show more results than <em>bike shed</em>.</li>
		</ul>  
	<?php else: ?>		
				
		<ul class="listed-content content">
		<?php 
		
		for($i=0; $i<count($result); $i++){	
			$url_alias = explode("/",$result[$i]->views_url_alias_node_alias);
			
			if($url_alias[1] == "") $url_alias[1] = '#';
		?>
		<li>
			<h3><a href="/<?php echo $result[$i]->type.'/'.$url_alias[1]?>" class="searchresult"><?php echo ascii_to_entities($result[$i]->node_title); ?></a></h3>
			<p><?php echo word_limiter(ascii_to_entities(strip_tags($result[$i]->body)), 20); ?></p>
		</li>
		
		
		<?php } ?>
		</ul>
	<?php endif; ?>
</div>
