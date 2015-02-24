<?php
register_nav_menus( array(
'menu' => 'Menu superior',
));



add_theme_support( 'post-thumbnails' );
add_image_size( 'slider_thumb', 158, 158, true );
add_image_size( 'description_thumb', 478, 478, true );
add_image_size( 'list_articles_thumbs', 158, 158, true );


?>