<?php

// Enqueue styles and scripts
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/build/index.css', array(), '', 'all' );
  wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/build/index.js', array( 'jquery' ), '', true );
});

?>
