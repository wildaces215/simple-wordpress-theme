<?php
require_once('bootstrap-nav.php');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
function theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    //wp_enqueue_script('vid', 'js');

}

//Adding Video
foreach(glob(get_template_directory() ."/vids/.mp4") as $file ){
  $function = basename($file);
  require get_template_directory(). '/vids/' .$file;
} 



//Various action for wordpress
add_action( 'init', 'register_my_menus' );
add_action('wp_enqueue_scripts', 'theme_name_scripts');
register_nav_menu('top', 'Header Menu');


