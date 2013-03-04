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
			<?php echo do_shortcode('[portfolio_slideshow id="1556542305" pagerstyle=carousel pagerpos=top  navpos=disabled showtitles=true ]');?>
		
		</div>
			
		
	</div> <!--end tabbed_content-->
</div><!--end tab_section_wrapper-->	
	
	
		<!-- MENU/NAV below-->

	<nav id='statement-nav'>
		<ul id='artist-menu-show'>
			<li class='mainList' id='artist'><a href='http://bugswag.com/statement/'>the Artist</a></li>
			<li>
				<ul id='subArtist' class='dd'>
					<li class='dd'><a href='http://bugswag.com/statement/'>artist statement</a></li>
					<li class='dd'><a href='http://bugswag.com/bio/'>biography</a></li>
					<li class='dd'><a href='http://bugswag.com/press/' class="selected">press</a></li>
					<li class='dd'><a href='http://bugswag.com/resume/'>resume</a></li>
					<li class='dd'><a href='http://bugswag.com/events/'>events</a></li>
					<li class='dd'><a href='http://bugswag.com/classes/'>classes</a></li>
				</ul>
			</li>
				
			<li><br /></li>
			<li class='mainList' id='work'><a href='http://bugswag.com/grids/'>Bodies of Work</a></li>
			
			<li>
				<ul id='subWork' class='dd'>
					<li><a href='http://bugswag.com/new_work/'>new work</a></li>
					<li><a href='http://bugswag.com/grids/'>grids and totems</a></li>
					<li><a href='http://bugswag.com/wall-sculptures/'>wall sculptures</a></li>
					<li><a href='http://bugswag.com/pedestals/'>Armor Series & pedestals</a></li>
					<li><a href='http://bugswag.com/saggar_small/'>saggar-fired & wall pieces</a></li>
					<li><a href='http://bugswag.com/lifesize/'>lifesize ceramic</a></li>
					<li><a href='http://bugswag.com/intimate/'>intimate ceramic</a></li>
					<li><a href='http://bugswag.com/classical_figurative/'>classical figurative</a></li>
					<li><a href='http://bugswag.com/commissions/'>commissions</a></li>
					<li><a href='http://bugswag.com/drawings/'>drawings</a></li>
				</ul>
			</li>
			<li><br /></li>

			<li class='mainList'><a href='tanyaragir.com/blog'>Studio Blog</a></li>
			<li class="mainList top-padding"><a href='http://bugswag.com/contact'>Contact</a></li>
		</ul>
	</nav>
	</div> <!-- END MAIN CONTENT -->
	</div> <!-- END pagewrap -->	
	<!-- DIV BACKDROP & greater-wrapper ends in footer -->

		<?php get_footer(); ?>