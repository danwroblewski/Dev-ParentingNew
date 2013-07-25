<div id="navigationcontainer" class="one-third column">
	<?php if(!isset($blog_side_list)) :?>
	<div id="navigation-back">
	    <div class="secondary">
	        <div id="locationshead">
	             <a href="<?php print $side_navigation_home['link']; ?>"><div class="locationsheader">
	              <h4><?php print $side_navigation_home['title']; ?></h4>
	            </div></a>
	
	            <div class="locations-button">
	                <a href="<?php print $side_navigation_home['link']; ?>" class="locations-home"><span><?php print $side_navigation_home['title']; ?></span></a>
	            </div>
	            <div class="btn-moreless">
	            </div>
	            <br clear="all">
	        </div>
			
	        <ul class="menu">
	            <?php foreach($side_navigation as $title => $link): ?>
	            
	            <?php if(is_array($link)): ?>
	
	            <li>
	                <a href="<?php print $link[0]; ?>" <?php print (url_title($secondary_url, '', TRUE) == url_title(str_replace('-', '', $title), '', TRUE)) ? ' class="on"' : ''; ?>><?php print $title; ?></a>
	
	                <ul class="tertiary<?php print (url_title($secondary_url) == url_title(strtolower($title))) ? ' show' : ' hide'; ?>">
	                    <?php foreach($link[1] as $second_title => $second_link): ?>
	                    
	                    <?php if(is_array($second_link)): ?>
	
	                    	<li><a href="<?php print $second_link[0]; ?>" <?php print (url_title($tertiary_url, '', TRUE) == url_title(str_replace('-', '', $second_title), '', TRUE)) ? ' class="on"' : ''; ?>><?php print $second_title; ?></a>
	
	                        	<ul class="fourth<?php print (url_title($tertiary_url) == url_title(strtolower($second_title))) ? ' show' : ' hide'; ?>">
	                        	
	                            <?php foreach($second_link[1] as $third_title => $third_link): ?>
	
	                            	<li><a href="<?php print $third_link; ?>" <?php print (url_title($fourth_url, '', TRUE) == url_title(str_replace('-', '', $third_title), '', TRUE)) ? ' class="on"' : ''; ?>><?php print $third_title; ?></a></li>
	                            <?php endforeach; ?>
	                           
	                        	</ul>
	                    	</li>
	                            
	                    <?php else: ?>
	                            <li><a href="<?php print $second_link; ?>" <?php print (url_title($tertiary_url, '', TRUE) == url_title(str_replace('-', '', $second_title), '', TRUE)) ? ' class="on"' : ''; ?>><?php print $second_title; ?></a></li>
	                           
	                            <?php endif; ?>
	                          <?php endforeach; ?>
	                        </ul>
	                    </li>
	                    
	                    <?php else: ?>
	
	                    <li><a href="<?php print $link; ?>" <?php print (url_title($secondary_url, '', TRUE) == url_title(str_replace('-', '', $title), '', TRUE)) ? ' class="on"' : ''; ?>><?php print $title; ?></a></li><?php endif; ?><?php endforeach; ?>
	                </ul>
	            </li>
	        </ul>
	        <?php if(isset($social)): ?><?php echo $social; ?><?php endif; ?>
	    </div>
	</div><br clear="all">
	<?php endif; ?>
	
     	
    <?php if(isset($news_contact)): ?> <?php echo $news_contact; ?> <?php endif; ?>	
    <?php if(isset($blog_side_list)): ?> <?php echo $blog_side_list; ?> <?php endif; ?>
    <?php /* if(isset($news_location_sidebar_events) && !@$hide_event_list): */ ?> <?php /* echo $news_location_sidebar_events; */ ?> <?php /* endif; */ ?>
	<?php if(isset($about_side)): ?> <?php echo $about_side; ?> <?php endif; ?>
	<?php if(isset($career_side)): ?> <?php echo $career_side; ?> <?php endif; ?>
	<?php if(isset($ne_hotline_side)): ?> <?php echo $ne_hotline_side; ?> <?php endif; ?>
	<?php if(isset($foster_family_services)): ?> <?php echo $foster_family_services; ?> <?php endif; ?>
	
	
	
	<?php /*if(!isset($career_side)) :?>
	<div id="donate-interior-left">
	    <div align="center">
	        <!-- <a href="<?php echo (isset($location_donate_redirect) && $location_donate_redirect === TRUE) ? '/' . $this->uri->segment(2) . '/donate/redirect' : 'https://secure.boystown.org/Donate/' ; ?>" class="donate-left-btn"><span>Donate</span></a> -->
	        <a href="https://secure.boystown.org/Donate/" class="donate-left-btn"><span>Donate</span></a>
	    </div>
	</div>
	<?php endif; */?>

</div>



<!--
<div class="navigationcontainer one-third column">
	<div class="secondary">
		<h1>Common Sense Parenting</h1>
		<ul class="first">
			<li>
				<a href="/common-sense-parenting/classes">Classes</a>
				<ul class="second">
					<li><a href="/common-sense-parenting/classes/toddlers-and-preschoolers">Toddlers and Preschoolers</a></li>
					<li><a href="/common-sense-parenting/classes/children-ages-6-16">Children Ages 6-16</a></li>
					<li><a href="/common-sense-parenting/classes/la-crianza-practics-de-los-hijos">La Crianza Practics De Los Hijos</a></li>
				</ul>
			</li>
			
			<li><a href="/common-sense-parenting/research-proven">Research Proven</a></li>
			<li><a href="/common-sense-parenting/parent-testimonials">Parent Testimonials</a></li>
			
			<li>
				<a href="/common-sense-parenting/locations">Locations</a>
				<ul class="second">
					<li><a href="/common-sense-parenting/locations/agencies-companies-and-organizations">Agencies Companies and Organizations</a></li>
				</ul>
			</li>
			
			<li><a href="/common-sense-parenting/resources">Resources</a></li>
			<li><a href="https://secure.parenting.org/contactus-csp/">Contact-Us</a></li>
		</ul>
	</div>
</div>
-->