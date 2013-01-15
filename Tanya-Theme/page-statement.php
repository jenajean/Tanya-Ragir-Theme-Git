<?php
	/* Template Name: Statement*/
?>

<?php get_header(); the_post(); ?>

<div id="page-wrap">
<div id='main-content'  class="group">	
		
	
	<div id="center">
		<img src="<?php echo get_post_meta($post->ID, "main-pic", true);?>" alt='picture of tanya ragir sculpting' />	
		<?php $recent = new WP_Query("page_id=237"); while($recent->have_posts())
		: $recent->the_post();?>
		<h3><?php the_title(); ?></h3></br>
		<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
		
	
	<!-- MENU/NAV below-->
	<nav id='statement-nav'>
				<ul id='artist-menu-show'>
					<li class='mainList' id='artist'><a href='http://bugswag.com/statement/'>the Artist</a></li>
					<ul id='subArtist' class='dd'>
						<li class='dd'><a href='http://bugswag.com/statement/' class='selected'>artist statement</a></li>
						<li class='dd'><a href='http://bugswag.com/bio/'>biography</a></li>
						<li class='dd'><a href='http://bugswag.com/press/'>press</a></li>
						<li class='dd'><a href='http://bugswag.com/resume/'>resume</a></li>
						<li class='dd'><a href='http://bugswag.com/events/'>events</a></li>
						<li class='dd'><a href='http://bugswag.com/classes/'>classes</a></li>

					</ul>
					<br />
					<li class='mainList' id='work'><a href='http://bugswag.com/grids/'>Bodies of Work</a></li>
					<ul id='subWork' class='dd'>
	 				<li><a href='http://bugswag.com/grids/'>grids and totems</a></li>
					<li><a href='http://bugswag.com/wall-sculptures/'>wall sculptures</a></li>
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
</div>	<!-- END DIV Pagewrap -->
	
	<!-- DIV backdrop ends in footer -->
	
	<?php get_footer(); ?>