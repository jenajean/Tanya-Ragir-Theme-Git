<?php
	/* Template Name: Intimate */
?>

<?php get_header(); the_post(); ?>
<div class="page-wrap-art wrap">
<div class='main-content'>	

	<!--  -->

		
	<div class='main-content-art-port'> 
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
			<li>
				<ul id='subArtist' class='dd'>
					<li class='dd'><a href='http://bugswag.com/statement/'>artist statement</a></li>
					<li class='dd'><a href='http://bugswag.com/bio/'>biography</a></li>
					<li class='dd'><a href='http://bugswag.com/press/'>press</a></li>
					<li class='dd'><a href='http://bugswag.com/resume/'>resume</a></li>
					<li class='dd'><a href='http://bugswag.com/events/'>events</a></li>
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
					<li><a href='http://bugswag.com/intimate/' class="selected">intimate ceramic</a></li>
					<li><a href='http://bugswag.com/lifesize/'>lifesize ceramic</a></li>
					<li><a href='http://bugswag.com/new_work/'>new work</a></li>
					<li><a href='http://bugswag.com/saggar_small/'>saggar-fired & wall pieces</a></li>
					<li><a href='http://bugswag.com/wall-sculptures/'>wall sculptures</a></li>					
					<li><a href='http://bugswag.com/drawings/'>drawings</a></li>				</ul>
			</li>
			<li><br /></li>

			<li class='mainList'><a target="_blank" href='http://www.tanyaragir.com/blog'>Studio Blog</a></li>
			<li class="mainList top-padding"><a href='http://bugswag.com/contact'>Contact</a></li>
		</ul>
	</nav>

			
</div> <!-- END MAIN CONTENT -->
</div> <!-- END BACKDROP -->	
	
	<?php get_footer(); ?>