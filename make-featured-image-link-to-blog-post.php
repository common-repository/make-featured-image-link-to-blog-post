<?php
/**
* Plugin Name: Make featured image link to blog post
* Description: Adds a function to the function.php file. This function will make the featured image link back to the blog the image was inserted.
* Version: 1.15
* Requires at least: 6.0
* Requires PHP: 8.0
* Author: Voordelig ICT
* Author URI: https://voordeligict.nl 
* License: GPLv2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/


/* Developer: Function to add a link to the featured image that linkes back to the blogpost the image was added to*/
function vict_autolink_featured_images( $html, $post_id, $post_image_id ) {
	$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
	return $html;
	}

	add_filter( 'post_thumbnail_html', 'vict_autolink_featured_images', 10, 3 );