<?php
	/* Template Name: Intimate */
?>

<?php get_header(); the_post(); ?>
<div id="page-wrap-art">
<div id='main-content'>	

	<!--  -->

		
	<div id='main-content-art-port'> 
				<?php $recent = new WP_Query("page_id=1556542585"); while($recent->have_posts())
				: $recent->the_post();?>
				       <!-- <h3><?php the_title(); ?></h3> -->
				       <?php the_content(); ?>
				<?php endwhile; ?>

			
		</div> 
		
		<!-- <div id="caption"><h3></h3></div> -->
		

	<!-- MENU/NAV below-->
	<nav id='grids'>
			<ul id='work-menu-show'>
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
				<li><a class='selected' href='http://bugswag.com/intimate/'>intimate ceramic</a></li>
				<li><a href='http://bugswag.com/classical_figurative/'>classical figurative</a></li>
				<li><a href='http://bugswag.com/commissions/'>commissions</a></li>
			</ul>
			<br />
			<li class='mainList'><a href='tanyaragir.com/blog'>Studio Blog</a></li>
		</ul>
	</nav>

			
</div> <!-- END MAIN CONTENT -->
</div> <!-- END BACKDROP -->	
	
	<?php get_footer(); ?>