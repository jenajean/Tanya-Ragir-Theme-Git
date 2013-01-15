<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery & jquery ui
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	if ( !is_admin() ) {
	   wp_deregister_script('jqueryui');
	   wp_register_script('jqueryui', ("https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"), false);
	   wp_enqueue_script('jqueryui');
	}
	
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

?>