<?php
	/* Template Name: Progress Shots */
?>

<?php get_header(); the_post(); ?>



<div class="page-wrap">
<div class="main-content group">	
		
	
	<div class="center group">
		<h1>Events</h1>
	<div id="centercenter group">
		
<!-- 
	FEARLESS SS
		<div class="event-thumb-wrapper group">
  <a class='slideshow-popup' href='http://bugswag.com/wp-content/plugins/portfolio-slideshow-pro/inc/popup/popup.php?id=1556543556&wh=625&ww=625&carouselsize=4'>
    <img src="/wp-content/uploads/2013/02/P1020741.jpeg" alt="test image"/>
  </a>
</div>
		
 -->
			<?php $recent = new WP_Query("page_id=1556542403"); while($recent->have_posts())
			: $recent->the_post();?>
			<?php the_content(); ?>
			<?php endwhile; ?>
 
	 <div class="recent-events group">
		 <h2>Recent Events</h2>
		 
		<div class="event-thumb-wrapper group">
			<p>McNabb Martin Contemporary Art<br />San Diego, CA - 2012</p>
			<a class='slideshow-popup' href='http://bugswag.com/wp-content/plugins/portfolio-slideshow-pro/inc/popup/popup.php?id=1556544624&wh=625&ww=625&carouselsize=4'>
				<img src="http://www.bugswag.com/Images/MMCA-Event.jpg" alt="McNabb Martin Gallery"/>
			</a>
		</div>

	
		<div class="event-thumb-wrapper group">
			<p>California Art Club<br />101st Annual Juried Show - 2012</p>
			<a class='slideshow-popup' href='http://bugswag.com/wp-content/plugins/portfolio-slideshow-pro/inc/popup/popup.php?id=1556543741&wh=625&ww=625&carouselsize=4'>
				<img src="http://www.bugswag.com/Images/CAC-thumb1.jpg" alt="California Art Club"/>
			</a>
		</div>
	
		<div class="event-thumb-wrapper group">
		 	<p>In Bloom<br />Garden Art Event - 2011</p>
			<a class='slideshow-popup' href='http://bugswag.com/wp-content/plugins/portfolio-slideshow-pro/inc/popup/popup.php?id=1556543165&wh=625&ww=625&carouselsize=4'>
				<img src="/wp-content/uploads/2013/02/In-Bloom-Opening-Night_flattened-300x295.jpg" alt="In Bloom"/>
			</a>
		 </div>
		 
	</div>
	
	<div class="past-events group">
	
		<h2>Past Events</h2>
		
		
		<div class="event-thumb-wrapper group" style="height:280px;">
			<p>Pierre Menard Gallery Show <br /> Cambridge, MA - 2010</p>
		  <a class='slideshow-popup' href='http://bugswag.com/wp-content/plugins/portfolio-slideshow-pro/inc/popup/popup.php?id=1556544574&wh=625&ww=625&carouselsize=4'>
			<img src="http://www.bugswag.com/Images/Menard-gallery-sign.jpg" alt="Pierre Menard Gallery"/>
		  </a>
		</div>
		
		<div class="event-thumb-wrapper group">
			<p>Upward Bound House <br /> Garden Concert Fundraiser - </p>
		  <a class="fancybox iframe" width="420" height="315" href="http://www.youtube.com/embed/X6yyshePyqI" frameborder="0" allowfullscreen>
			<img src="http://www.bugswag.com/Images/UBH.gif" alt="Upward Bound House"/>
		  </a>
		</div>
	
	
		<div class="event-thumb-wrapper group">
			<p>Contemporary Art Network<br /> New York City Gallery Show - </p>
		  <a class='slideshow-popup' href='http://bugswag.com/wp-content/plugins/portfolio-slideshow-pro/inc/popup/popup.php?id=1556544596&wh=625&ww=625&carouselsize=4'>
			<img src="http://www.bugswag.com/Images/CAN-logo.jpg" alt="Contemporary Art Network"/>
		  </a>
		</div>
	
	</div>
 

	</div> <!-- end center center -->	
	</div>
		
	
	<!-- MENU/NAV below-->
	<nav id='statement-nav'>
		<ul id='artist-menu-show'>
			<li class='mainList' id='artist'><a href='http://bugswag.com/statement/'>the Artist</a></li>
			<li>
				<ul id='subArtist' class='dd'>
					<li class='dd'><a href='http://bugswag.com/statement/'>artist statement</a></li>
					<li class='dd'><a href='http://bugswag.com/bio/'>biography</a></li>
					<li class='dd'><a href='http://bugswag.com/press/'>press</a></li>
					<li class='dd'><a href='http://bugswag.com/resume/'>resume</a></li>
					<li class='dd'><a href='http://bugswag.com/events/' class="selected">events</a></li>
					<li class='dd'><a href='http://bugswag.com/classes/'>classes</a></li>
				</ul>
			</li>
				
			<li><br /></li>
			<li class='mainList' id='work'><a href='http://bugswag.com/grids/'>Bodies of Work</a></li>
			
			<li>
				<ul id='subWork' class='dd'>
					<li><a href='http://bugswag.com/pedestals/'>armor series & pedestals</a></li>
					<li><a href='http://bugswag.com/classical_figurative/'>classical figurative</a></li>
					<li><a href='http://bugswag.com/commissions/'>commissions & public art</a></li>
					<li><a href='http://bugswag.com/grids/'>grids and totems</a></li>
					<li><a href='http://bugswag.com/intimate/'>intimate ceramic</a></li>
					<li><a href='http://bugswag.com/lifesize/'>lifesize ceramic</a></li>
					<li><a href='http://bugswag.com/new_work/'>new work</a></li>
					<li><a href='http://bugswag.com/saggar_small/'>saggar-fired & wall pieces</a></li>
					<li><a href='http://bugswag.com/wall-sculptures/'>wall sculptures</a></li>					
					<li><a href='http://bugswag.com/drawings/'>drawings</a></li>
				</ul>
			</li>
			<li><br /></li>
			<li class='mainList'><a href='http://bugswag.com/progress/'>Progress Shots</a></li>
			<li class='mainList'><a target="_blank" href='http://www.tanyaragir.com/blog'>Studio Blog</a></li>
			<li class="mainList top-padding"><a href='http://bugswag.com/contact'>Contact</a></li>
		</ul>
	</nav>
</div> <!-- END MAIN CONTENT -->
</div>	<!-- END DIV Pagewrap -->
	
	<!-- DIV backdrop ends in footer -->
	
	<?php get_footer(); ?>