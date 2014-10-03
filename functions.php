<?php

/* Add title to title tag */

add_filter( 'wp_title', 'barebones_filter_wp_title' );
function barebones_filter_wp_title( $title )
{
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

/* Menu option in Dashboard */

add_theme_support( 'menus' );
if ( function_exists( 'register_nav_menus' ) ) {
  	register_nav_menus(
  		array(
  		  'main-menu' => 'Main Menu',
  		)
  	);
}
