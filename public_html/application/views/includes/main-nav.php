 <div id="bt-parent-bar">
		<div align="center">
			<div id="btbar" class="columns sixteen">
				<div class="btbar-left">
					<a href="http://www.boystown.org" class="btnbtbar-bt" target="_self"><span>Parenting</span></a><a href="/" class="btnbtbar-parent on"><span>Parenting</span></a>
				</div>
				<div class="btbar-right">
					<a href="https://secure.boystown.org/Donate/" class="btnbtbar-donate"><span>DONATE NOW</span></a>
				</div>
			</div>
		</div>
		<div id="bt-parent-bar-fade"></div>
	</div>


<!-- =========================== UTILITY AND SEARCH BAR =========================== -->
	<div class="container">
		<div class="six columns">
			<div id="loggo">
				<span id="logo"><a href="/"><img src="/img/parenting-logo-bt.gif" alt="Parenting Logo" title="Home" width="310" height="91" ></a></span>
			</div>
		</div>
		<div class="ten navigation columns">
			<div id="utilitynav">
				<a href="https://secure.parenting.org/newsletter/" class="btn-enewssignup"><span>Enews Sign Up</span></a>
				<a href="http://www.facebook.com/parenting.org" class="btn-facebook" target="_blank"><span>Facebook</span></a>
			</div>
			<br clear="all">
			<div id="mainnavmobile-dos">
					<div align="center">
						<div id="mainnavmobilecontain">
							<a href="https://secure.parenting.org/ask-an-expert/" class="askaquestion-dos"><span>Ask A Question</span></a><a href="/guides" class="guides-dos"><span>Guides</span></a>
						</div>
					</div>
				</div>
			<!--
<div id="global-nav">
				
				<ul id="mainnavmobile">
					
					<li id="askaquestion"><a href="https://secure.parenting.org/ask-an-expert/"><span>Ask A Question</span></a></li>
					<li id="guides"><a href="/guides"><span>Guides</span></a></li>
					<li id="blog"><a href="#">Blog</a></li>
				</ul>
			</div>
-->
		</div>
	</div>


<!-- =========================== GLOBAL NAVIGATION =========================== -->
<div class="container">
<!-- <div class="socialbar"><a href="#" class="social-newsletter"><span>Newsletter Sign Up</span></a><a href="#" class="social-facebook"><span>Like us</span></a><a href="#" class="social-twitter"><span>Follow Us</span></a></div> -->
	<div id="navbar">
		<div id="socialsearchbox">
			<form method="post" action="/search/results" class="search-bar">
				<div class="search-drop-type" id="search-all-container">
					<select name="type" class="styled">
						<option value=""<?php echo (empty($_POST['type']) || !isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>Search All</option>
						<option value="article"<?php echo ($_POST['type'] == 'article' && isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>Articles</option>
						<option value="ask_an_expert"<?php echo ($_POST['type'] == 'ask_an_expert' && isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>Q &amp; A's</option>
						<option value="videos"<?php echo ($_POST['type'] == 'videos' && isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>Videos</option>
						<option value="quick_tips"<?php echo ($_POST['type'] == 'quick_tips' && isset($_POST['type'])) ? ' selected="selected"' : '' ; ?>>Quick Tips</option>
					</select>
				</div>
				<input id="" type="text" name="search_query" value="<?php echo $_POST['search_query']; ?>" />
				<input value="Search" type="submit" class="form-submit" />
			</form>
		<!-- </div> -->
		
		<form method="post" action="/search/results/" class="search-bar" id="frmbrowseby">
			<div id="searchbrowseby">
				<div class="browse-holder" align="center">
					<img src="/img/search-browseby-sm.png" border="0" />
					<div class="searchbrowsebyoverlaycontain">
						<div class="searchbrowsebyoverlaytwo">
							<div class="searchdrop-type" id="browse-by-age-container">
								<select name="age" class="styled">
									<option value=""<?php echo (empty($_POST['age']) || !isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Browse by Age</option>
									<option value="Toddlers"<?php echo ($_POST['age'] == 'Toddlers' && isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Toddlers</option>
									<option value="Early Childhood"<?php echo ($_POST['age'] == 'Early Childhood' && isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Early Childhood</option>
									<option value="Tweens"<?php echo ($_POST['age'] == 'Tweens' && isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Tweens</option>
									<option value="Adolescence Teens"<?php echo ($_POST['age'] == 'Adolescence Teens' && isset($_POST['age'])) ? ' selected="selected"' : '' ; ?>>Adolescence/Teens</option>
								</select>
							</div>
						
							<br clear="all">
							<div class="searchdrop-type" id="browse-by-topic-container">
								<select name="topic" class="styled">
									<option value=""<?php echo (empty($_POST['topic']) || !isset($_POST['topic'])) ? ' selected="selected"' : '' ; ?>>Browse by Topic</option>
									<option value="Parenting Skills"<?php echo ($_POST['topic'] == 'Parenting Skills' && isset($_POST['topic'])) ? ' selected="selected"' : '' ; ?>>Parenting Skills</option>
									<option value="Understanding Behavior"<?php echo ($_POST['topic'] == 'Understanding Behavior' && isset($_POST['topic'])) ? ' selected="selected"' : '' ; ?>>Understanding Behavior</option>
									<option value="Discipline"<?php echo ($_POST['topic'] == 'Discipline' && isset($_POST['topic'])) ? ' selected="selected"' : '' ; ?>>Discipline</option>
									<option value="Child Development"<?php echo ($_POST['topic'] == 'Child Development' && isset($_POST['topic'])) ? ' selected="selected"' : '' ; ?>>Child Development</option>
									<option value="Social Skills"<?php echo ($_POST['topic'] == 'Social Skills' && isset($_POST['topic'])) ? ' selected="selected"' : '' ; ?>>Social Skills</option>
									<option value="Connecting With Kids"<?php echo ($_POST['topic'] == 'Connecting With Kids' && isset($_POST['topic'])) ? ' selected="selected"' : '' ; ?>>Connecting With Kids</option>
									<option value="Pediatric Health"<?php echo ($_POST['topic'] == 'Pediatric Health' && isset($_POST['topic'])) ? ' selected="selected"' : '' ; ?>>Pediatric Health</option>
								</select>
								
							</div>
							<input value="Browse" type="submit" class="form-browse" />
						</div>
						
					</div><!-- end searchbrowsebyoverlaycontain -->
				</div>
				<!-- end browse-holder -->
			</div>
			</div>
		</form>
	</div>
</div>
