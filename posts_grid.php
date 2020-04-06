<?php
/**
 * Plugin Name: Posts Grid
 * Plugin URI: https://overflownetworks.com 
 * Description: Display posts with image on the left, and text, and description on the right.
 * Version: 0.1
 * Author: Justin Tharpe
 */
 
 function tbare_wordpress_plugin_demo($atts) {
	$Content = "<style>\r\n";
	$Content .= "h3.demoClass {\r\n";
	$Content .= "color: #26b158;\r\n";
	$Content .= "}\r\n";
	$Content .= "</style>\r\n";
	$Content .= '<h3 class="demoClass">Check it out!</h3>';
     
    // the query
   $the_query = new WP_Query( array(
    'category_name' => 'news',
     'posts_per_page' => 3,
    )); 
    ?>

    <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php the_title(); ?>
    <?php the_excerpt(); ?>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

    <?php else : ?>
    <p><?php __('No News'); ?></p>
    <?php endif; ?>

    return $Content;
}

add_shortcode('tbare-plugin-demo', 'tbare_wordpress_plugin_demo');