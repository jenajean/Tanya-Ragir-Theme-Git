<?php
/* Template Name: Press Page */


?>

<?php get_header(); the_post(); ?>
<div class="page-wrap">
<div class="group main-content">
<!-- <div id="top-content"><h2>Press</h2></div> -->
<div id="tab_section_wrapper">
	<div id="tabs">
		<ul>
			<li id="center1" class="selected-tab">Recent Press</li>
			<li id="center2">1990-99</li>
			<li id="center3">1976-89</li>
		</ul>
	</div><!--end tabs-->
	<div id="tabbed_content">
		<div id='center1' class="center-press viewed"> 
		
						<?php echo do_shortcode('[portfolio_slideshow id=1556542305 pagerstyle=carousel carouselsize=5 navpos=disabled showdesc=true]');?>
					
					
		</div>
			
		<div id='center2' class="center-press"> 
				<?php echo do_shortcode('[portfolio_slideshow id=1556542305 pagerstyle=carousel]');?>
		
				
		</div>
		
		<div id='center3' class="center-press"> 
						<?php echo do_shortcode('[portfolio_slideshow id=1556542305 pagerstyle=carousel]');?>
		
		</div>
	</div> <!--end tabbed_content-->
</div><!--end tab_section_wrapper-->	
	
	
		<!-- MENU/NAV below-->

		<nav id='statement-nav'>
			<ul id='artist-menu-show'>
				<li class='mainList' id='artist'><a href='http://bugswag.com/statement/'>the Artist</a></li>
				<ul id='subArtist' class='dd'>
					<li class='dd'><a href='http://bugswag.com/statement/'>artist statement</a></li>
					<li class='dd'><a href='http://bugswag.com/bio/'>biography</a></li>
					<li class='dd'><a href='http://bugswag.com/press/' class='selected'>press</a></li>
					<li class='dd'><a href='http://bugswag.com/resume/'>resume</a></li>
					<li class='dd'><a href='http://bugswag.com/events/'>events</a></li>
					<li class='dd'><a href='http://bugswag.com/classes/'>classes</a></li>

				</ul>
					<br />
					<li class='mainList' id='work'><a href='http://bugswag.com/grids/'>Bodies of Work</a></li>
					<ul id='subWork' class='dd'>
	 				<li><a href='http://bugswag.com/grids/'>grids and totems</a></li>
					<li><a href='http://localhost:8888/tanyaragir.com/wall-sculptures/'>wall sculptures</a></li>
					<li><a href='http://localhost:8888/tanyaragir.com/Armor-and-pedestals/'>Armor Series & pedestals</a></li>
					<li><a href='http://localhost:8888/tanyaragir.com/saggar-and-wall-pieces/'>saggar-fired & wall pieces</a></li>
					<li><a href='http://localhost:8888/tanyaragir.com/lifesize-ceramic/'>lifesize ceramic</a></li>
					<li><a href='http://localhost:8888/tanyaragir.com/intimate-ceramic/'>intimate ceramic</a></li>
					<li><a href='http://localhost:8888/tanyaragir.com/classical-figurative/'>classical figurative</a></li>
					<li><a href='http://localhost:8888/tanyaragir.com/comissions/'>comissions</a></li>
				</ul>
				<br />
				<li class='mainList'><a href='tanyaragir.com/blog'>Studio Blog</a></li>
			</ul>
		</nav>
	</div> <!-- END MAIN CONTENT -->
	</div> <!-- END pagewrap -->	
	<!-- DIV BACKDROP & greater-wrapper ends in footer -->

		<?php get_footer(); ?>