<?php

/* Menu option in Dashboard */
add_theme_support( 'menus' );
if ( function_exists( 'register_nav_menus' ) ) {
  	register_nav_menus(
  		array(
  		  'menu_slug' => 'Menu Name',
  		)
  	);
}
