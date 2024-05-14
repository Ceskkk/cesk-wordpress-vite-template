<?php

add_action('after_setup_theme', function (){
  // Enqueue base scripts and styles
  require_once('library/register-enqueue.php');
  // Custom menus
  require_once('library/custom-menus.php');
  // Remove sections and features
  require_once('library/remove.php');
});

?>