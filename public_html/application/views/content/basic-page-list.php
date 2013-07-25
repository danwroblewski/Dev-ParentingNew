
<div class="twelve columns">	
	<div style="float:left; width:100%;">
		<h3>Refine your search:</h3>
			<form method="post" action="/search/results" class="search-bar" style="margin:0 0 0 20px;">
			<select name="type">
				<option value=""<?php echo (empty($_POST['type']) || !isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>&lt;Any&gt;</option>
				<option value="article"<?php echo ($_POST['type'] == 'article' && isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>Articles</option>
				<option value="ask_an_expert"<?php echo ($_POST['type'] == 'ask_an_expert' && isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>Ask An Expert</option>
				<option value="article"<?php echo ($_POST['type'] == 'quick_tips' && isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>Quick Tips</option>
				<option value="ask_an_expert"<?php echo ($_POST['type'] == 'videos' && isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>Videos</option>
				
			</select>
			<select name="age">
				<option value=""<?php echo (empty($_POST['age']) || !isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Browse by Age</option>
				<option value="Toddlers"<?php echo ($_POST['age'] == 'Toddlers' && isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Toddlers</option>
				<option value="Early Childhood"<?php echo ($_POST['age'] == 'Early Childhood' && isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Early Childhood</option>
				<option value="Tweens"<?php echo ($_POST['age'] == 'Tweens' && isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Tweens</option>
				<option value="Adolescence/Teens"<?php echo ($_POST['age'] == 'Adolescence/Teens' && isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Adolescence/Teens</option>
			</select>
			
			<input type="hidden" name="search_query" value="<?php echo $_POST['search_query']; ?>">
			
			<input value="Refine" type="submit" />
			</form>
		</div>
		<ul class="listed-content content">
			<?php foreach($list as $item):
				//$url_alias 		= explode("/",$item->views_url_alias_node_alias);
				
				$url_alias 		= explode("/",$item->url);//New PHP - url
				$url			= $this->uri->segment(1).'/'.$url_alias[3];		
			?>
			<li>
				<h3><a href="/<?php echo $url; ?>"><?php echo $item->node_title; ?></a></h3>
				<?php echo word_limiter(ascii_to_entities(strip_tags($item->body->summary, 35))); ?>
				<p>&nbsp;</p>
			</li>
			<?php endforeach; ?>
		</ul>
</div>

