<?php
/**
 * Plugin Name: Posts Grid
 * Plugin URI: https://overflownetworks.com 
 * Description: Display posts with image on the left, and text, and description on the right.
 * Version: 0.1
 * Author: Justin Tharpe
 */
 
 function tbare_wordpress_plugin_demo($atts) {
	$Content = '<head><link rel="stylesheet" type="text/css" href="/css/1586480001.css" /></head>';
    
   
    $args = array(
        'numberposts'	=> 20,
        //'category'		=> 4
    );
    $my_posts = get_posts( $args );
    
    if( ! empty( $my_posts ) ){
        $output = '<body>';
        $output .= '<div id="wrapper_jt">';
        $output .= '<ul>';
        foreach ( $my_posts as $p ){
            $tumbs = get_the_post_thumbnail($p->ID, 'medium');
            $output .= '<div id="left_jt">';
            $output .= ' <li><a href="' . get_permalink( $p->ID ) . '">' . $p->post_title . '</a></li>';
            $output .= '</div>';
            $output .= '<div id="content_jt">';
            $output .= ' <li>' . $tumbs . '</li>';
            $output .= '</div>';
        }
        $output .= '<ul>';
        $output .= '</div>';
        $output .= '</body>';
    }

    $Content .= $output;


    return $Content;


}

add_shortcode('tbare-plugin-demo', 'tbare_wordpress_plugin_demo');

?>