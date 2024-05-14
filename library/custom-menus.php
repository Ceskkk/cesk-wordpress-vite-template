<?php 

add_action('init', function (){
  register_nav_menus(
    [
      'main-nav' => 'Main Menu'
    ]
  );
});

?>