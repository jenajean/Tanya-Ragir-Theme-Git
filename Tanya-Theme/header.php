<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

	<script type="text/javascript" src="http://bugswag.com/script.js"></script>

	<!-- <script type="text/javascript" src="http://localhost:8888/tanyaragir.com/slideClickThrough.js"></script> -->
	
	<link rel="shortcut icon" href="/favicon.ico">

	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<!-- THIS IS TO GET A CUSTOM STYLESHEET FOR EACH PAGE BY PAGE-TEMPLATE -->
	<?php if (is_page_template('page-grids.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/art-pages.css">
	<?php } ?>
	
	<?php if (is_page_template('page-pedestals.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/art-pages.css">
	<?php } ?>
	
	<?php if (is_page_template('page-walls.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/art-pages.css">
	<?php } ?>
	
	<?php if (is_page_template('page-saggar_small.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/art-pages.css">
	<?php } ?>
	
	<?php if (is_page_template('page-lifesize.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/art-pages.css">
	<?php } ?>
	
	<?php if (is_page_template('page-intimate.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/art-pages.css">
	<?php } ?>
	
	<?php if (is_page_template('page-classical-figurative.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/art-pages.css">
	<?php } ?>
	
		<?php if (is_page_template('page-commisions.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/art-pages.css">
	<?php } ?>
	
	<!-- THIS IS TO GET A CUSTOM STYLESHEET FOR EACH PAGE BY PAGE-TEMPLATE statement-->
	<?php if (is_page_template('page-statement.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/statement.css">
	<?php } ?>
	<!-- THIS IS TO GET A CUSTOM STYLESHEET FOR EACH PAGE BY PAGE-TEMPLATE blog -->
	<?php if (is_page_template('page-blog.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/blog.css">
	<?php } ?>
	
	<!-- THIS IS TO GET A CUSTOM STYLESHEET FOR EACH PAGE BY PAGE-TEMPLATE press -->
	<?php if (is_page_template('page-press.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/press.css">
	<?php } ?>
	
	<!-- THIS IS TO GET A CUSTOM STYLESHEET FOR EACH PAGE BY PAGE-TEMPLATE bio -->
	<?php if (is_page_template('page-bio.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/bio.css">
	<?php } ?>
	
	<!-- THIS IS TO GET A CUSTOM STYLESHEET FOR EACH PAGE BY PAGE-TEMPLATE resume -->
	<?php if (is_page_template('page-resume.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/resume.css">
	<?php } ?>
	
	<!-- THIS IS TO GET A CUSTOM STYLESHEET FOR EACH PAGE BY PAGE-TEMPLATE resume -->
	<?php if (is_page_template('home.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/home.css">
	<?php } ?>
	
	<!-- THIS IS TO GET A CUSTOM STYLESHEET FOR EACH PAGE BY PAGE-TEMPLATE events -->
	<?php if (is_page_template('page-events.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/events.css">
	<?php } ?>
	
	<!-- THIS IS TO GET A CUSTOM STYLESHEET FOR EACH PAGE BY PAGE-TEMPLATE classes -->
	<?php if (is_page_template('page-classes.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/classes.css">
	<?php } ?>
	
	<!-- THIS IS TO GET A CUSTOM STYLESHEET FOR EACH PAGE BY PAGE-TEMPLATE classes -->
	<?php if (is_page_template('page-blog-test.php')) { ?>
		<link rel="stylesheet" href="<?php
			bloginfo('template_url'); ?>/css/blog-test.css">
	<?php } ?>
	
	
	<!-- typekit -->
	<script type="text/javascript" src="//use.typekit.net/qgc5eac.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="backdrop">
<header>
	<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?><a></h1>
	<h2><?php bloginfo('description'); ?></h2>
</header>

<div class="greater-wrap">

