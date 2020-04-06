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
    $Content .= "ul.postitem {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "padding-left: 50%;";
    $Content .= "}\r\n";
	$Content .= "</style>\r\n";
	$Content .= '<h3 class="demoClass">Check it out!</h3>';
    
    $Content .= '
    <div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;"> Left </div>
    <div style="margin-left: 620px;"> Right </div>

    </div>
    ';
/*     $args = array(
        'numberposts'	=> 20,
        //'category'		=> 4
    );
    $my_posts = get_posts( $args );
    
    if( ! empty( $my_posts ) ){
        $output = '<ul>';
        foreach ( $my_posts as $p ){
            $output .= '<li class="postitem"><a href="' . get_permalink( $p->ID ) . '">' 
            . $p->post_title . '</a></li>';
        }
        $output .= '<ul>';
    } */

    return $output;


}

add_shortcode('tbare-plugin-demo', 'tbare_wordpress_plugin_demo');

?>