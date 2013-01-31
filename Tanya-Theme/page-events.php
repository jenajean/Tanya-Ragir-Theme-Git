<?php
	/* Template Name: Events */
?>

<?php get_header(); the_post(); ?>

<div class="page-wrap">
<div class="main-content group">	
		
	
	<div class="center" >
		<h1>Events</h1>
	<div id="centercenter">
		<h2>Upcoming Events:</h2>
		<div class="event-thumb">
			<img class="image" src="<?php echo get_post_meta($post->ID, "main-pic-4", true);?>" alt="" />	
			<div class="slides-link"><?php echo do_shortcode('[popup-slideshow id=1556542305 text="California Art Club Show"]');?>
			</div>
		</div>
	
		<div class="event-thumb">
			<img class="image" src="<?php echo get_post_meta($post->ID, "main-pic-3", true);?>" alt="" />	
			<div class="slides-link"><?php echo do_shortcode('[popup-slideshow id=1556542305 text="In Bloom Event"]');?>
			</div>
		</div>
		
		<div class="event-thumb">	
		</div>
	<br />	
	<h2>Past Events:</h2>
		<div class="event-thumb">
			<img class="image" src="<?php echo get_post_meta($post->ID, "main-pic-2", true);?>" alt="" />	
			<div class="slides-link"><?php echo do_shortcode('[popup-slideshow id=1556542305 text="Upward Bound House Fundraising Event"]');?>
			</div>
		</div>
	
		<div class="event-thumb">
			<img class="image" src="<?php echo get_post_meta($post->ID, "main-pic-1", true);?>" alt="" />	
			<div class="slides-link"><?php echo do_shortcode('[popup-slideshow id=1556542305 text="CAN NYC Show"]');?>
			</div>
		</div>
		<div class="event-thumb">	
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
					<li><a href='http://bugswag.com/grids/'>grids and totems</a></li>
					<li><a href='http://bugswag.com/wall-sculptures/'>wall sculptures</a></li>
					<li><a href='http://bugswag.com/pedestals/'>Armor Series & pedestals</a></li>
					<li><a href='http://bugswag.com/saggar_small/'>saggar-fired & wall pieces</a></li>
					<li><a href='http://bugswag.com/lifesize/'>lifesize ceramic</a></li>
					<li><a href='http://bugswag.com/intimate/'>intimate ceramic</a></li>
					<li><a href='http://bugswag.com/classical_figurative/'>classical figurative</a></li>
					<li><a href='http://bugswag.com/commissions/'>commissions</a></li>
				</ul>
			</li>
			<li><br /></li>

			<li class='mainList'><a href='tanyaragir.com/blog'>Studio Blog</a></li>
		</ul>
	</nav>
</div> <!-- END MAIN CONTENT -->
</div>	<!-- END DIV Pagewrap -->
	
	<!-- DIV backdrop ends in footer -->
	
	<?php get_footer(); ?>