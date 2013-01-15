<aside>

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
      
			<? php query_posts("posts_per_page=1"); the_post(); ?>
			
			<div id='thumbs'> <? php the_exerpt(); ?> </div>
			
			<? php wp_reset_query(); ?>
		
		</div>
	
	<?php endif; ?>

</aside>