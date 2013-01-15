<?php 
	/* Template Name: Blog-Page */
 ?>

<?php get_header(); ?>
<div id="page-wrap">
<div id='main-content'>	


	<!-- <div id='main-content-left'> 
			
		</div>  -->

		<div id='main-content-blog'>
			<div id="title"><h1>Studio Blog</h1>
			<h2>Exploring the Feminine</h2></div>
			<div id="blog-wrap">
				<?php $my_query = new WP_Query('category_name=uncategorized&showposts=3'); ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<!-- <div class="post"> --><h2><?php the_title(); ?></h2><!--</div> -->
				<div class="entry"><?php the_post(); ?><p class="postmetadata"></p></div>
				<?php endwhile; ?>
			</div>
		</div>
		

	<!-- MENU/NAV below-->

	<nav id='main-nav'>
		<ul>
			<li class='mainList' id='artist'><a href='#'>the Artist</a></li>
			<ul id='subArtist' class='dd'>
				<li class='dd'><a href='http://bugswag.com/statement'>artist statement</a></li>
				<li class='dd'><a href='http://bugswag.com/bio'>biography</a></li>
				<li class='dd'><a href='http://bugswag.com/press'>press</a></li>
				<li class='dd'><a href='http://bugswag.com/resume'>resume</a></li>
				<li class='dd'><a href='http://bugswag.com/events/'>events</a></li>
				<li class='dd'><a href='http://bugswag.com/classes/'>classes</a></li>

			</ul>
			<br />
			<li class='mainList' id='work'><a href='http://bugswag.com/grids/'>Bodies of Work</a></li>
			<ul id='subWork' style="display:block;" class='dd'>
<!-- specific to grids --> <li><a href='http://bugswag.com/grids/' style='font-weight:bold;'>grids and totems</a></li>
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
</div> <!-- END PAGE-WRAP -->
<!-- DIV backdrap ends in footer -->

	<?php get_footer(); ?>

