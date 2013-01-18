<?php

	/* Template Name: Home Page */

?>

<?php get_header(); the_post(); ?>


<div class='page-wrap'>
<div class='main-content'>	
	
	<div class='center'>
			<?php $recent = new WP_Query("page_id=4"); while($recent->have_posts())
			: $recent->the_post();?>
			<h3></h3>
			</br>
			<p><?php the_content(); ?></p>
			<?php endwhile; ?>
	
	</div> <!-- END CENTER id=1556542235-->
	


<!-- MENU/NAV -->
	<nav id='statement-nav'>
			<ul id='artist-menu-show'>
				<li class='mainList' id='artist'><a href='http://bugswag.com/statement/'>the Artist</a></li>
					<ul id='subArtist' class='dd'>
						<li class='dd'><a href='http://bugswag.com/statement/'>artist statement</a></li>
						<li class='dd'><a href='http://bugswag.com/bio/'>biography</a></li>
						<li class='dd'><a href='http://bugswag.com/press/'>press</a></li>
						<li class='dd'><a href='http://bugswag.com/resume/'>resume</a></li>
						<li class='dd'><a href='http://bugswag.com/events/'>events</a></li>
						<li class='dd'><a href='http://bugswag.com/classes/'>classes</a></li>
					</ul>
				<br />
								<li class='mainList' id='work'><a href='http://bugswag.com/grids/'>Bodies of Work</a></li>
				<ul id='subWork' style="display:block;" class='dd'>
 				<li><a href='http://bugswag.com/grids/'>grids and totems</a></li>
				<li><a href='http://bugswag.com/wall-sculptures/'>wall sculptures</a></li>
				<li><a href='http://bugswag.com/pedestals/'>Armor Series & pedestals</a></li>
				<li><a href='http://bugswag.com/saggar_small/'>saggar-fired & wall pieces</a></li>
				<li><a href='http://bugswag.com/lifesize/'>lifesize ceramic</a></li>
				<li><a href='http://bugswag.com/intimate/'>intimate ceramic</a></li>
				<li><a href='http://bugswag.com/classical_figurative/'>classical figurative</a></li>
				<li><a href='http://bugswag.com/commissions/'>commissions</a></li>
			</ul>
			<br />
			<li class='mainList'><a href='tanyaragir.com/blog'>Studio Blog</a></li>
		</ul>
	</nav>
	</div> <!-- END MAIN CONTENT -->
	</div> <!-- END PAGE WRAP -->
<!-- backdrop cloesd in footer -->

<?php get_footer(); ?>
