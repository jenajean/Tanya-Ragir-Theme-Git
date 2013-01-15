<?php
?>

<?php get_header(); the_post(); ?>

<div id='main-content'>	

	<!--  -->
	<div id='hidingPlace'>
			<!-- <?php $pics = get_post_meta($post->ID, 'pics', false); ?>
											<?php foreach($pics as $pic) {
												echo $pic;  } ?>
					<?php echo get_post_meta($post->ID, "pic", false);?> -->
	</div>	
		
		
	<div id='main-content-art'> 
				<?php $my_query = new WP_Query('category_name=gridSlides&showposts=1'); ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<div class="post"><h2><?php the_title(); ?></h2></div>
				<div class="entry"><?php the_content(); ?><p class="postmetadata"></p></div>
				<?php endwhile; ?>
		</div> 
		
		<!-- <div id="caption"><h3>Three Thirds  |  18.5" x 5.5" x 5.5"  |  bronze </h3></div> -->
		<!--<div id="main-content-thumbs">
			<?php $thumbs = get_post_meta($post->ID, 'thumbs', false); ?>
								   	  <?php foreach($thumbs as $thumb) {
								     		echo $thumb;
								   		} ?>
			<?php echo get_post_meta($post->ID, "thumb", false);?>
		</div> -->
		
	<div id="main-content-thumbs">
	
		<?php $my_query = new WP_Query('category_name=gridgal&showposts=1'); ?>
		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<!-- <div class="post"><h2><?php the_title(); ?></h2></div> -->
		 <div class="entry">
		<?php the_content(); ?>
		<!-- <p class="postmetadata">
				<?php _e('Filed under:'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php the_author(); ?> 
		 		<?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?> <?php edit_post_link('Edit', ' | ', ''); ?>
			</p> -->
		</div>
		<?php endwhile; ?>
	</div> <!-- END MAIN CONTENT THUMBS -->
	
	<!-- MENU/NAV below-->
	
	<nav id='main-nav'>
		<ul id='grid-menu-show'>
			<li class='mainList' id='artist'><a href='#'>the Artist</a></li>
			<ul id='subArtist' class='dd'>
				<li class='dd'><a href='#'>artist statement</a></li>
				<li class='dd'><a href='#'>biography</a></li>
				<li class='dd'><a href='#'>press</a></li>
				<li class='dd'><a href='#'>resume</a></li>
			</ul>
			<br />
			<li class='mainList' id='work'><a href='http://localhost:8888/tanyaragir.com/grids/'>Bodies of Work</a></li>
			<ul id='subWork' style="display:block;" class='dd'>
<!-- specific to grids --> <li><a href='Grids_Totems.html' style='font-weight:bold;'>grids and totems</a></li>
				<li><a href='#'>wall sculptures</a></li>
				<li><a href='#'>Armor Series & pedestals</a></li>
				<li><a href='#'>saggar-fired & wall pieces</a></li>
				<li><a href='#'>lifesize ceramic</a></li>
				<li><a href='#'>intimate ceramic</a></li>
				<li><a href='#'>classical figurative</a></li>
				<li><a href='#'>comissions</a></li>
			</ul>
			<br />
			<li class='mainList'><a href='#'>Studio Blog</a></li>
		</ul>
	</nav>
</div> <!-- END MAIN CONTENT -->
	
	
	<?php get_footer(); ?>