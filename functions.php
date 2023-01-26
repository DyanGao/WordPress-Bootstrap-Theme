<?php
  // customizer.php file
  require_once('templates/helpers/customizer.php');
  
  // add new features to wordpress theme
  function wpb_theme_supports() {
    add_theme_support( 'post-thumbnails' ); //add 'Featured image'
  }

  add_action('after_setup_theme','wpb_theme_supports');

  //register navigation menu
  function wpb_nav_menu() {
    register_nav_menus(array(
      'primary-menu'=> __('Primary Menu', 'text_domain'),
      'footer-menu' => __('Footer Menu', 'text_domain'),
    ));
  }

  add_action('init','wpb_nav_menu');
 
  //nav-menu link
  function add_link_atts($atts) {
    $atts['class']='nav-link py-2 px-0 px-lg-2 text-light';
    return $atts;
  }

  add_filter('nav_menu_link_attributes', 'add_link_atts');

  function wpb_custom_excerpt_length($length) {
    return 20;
  }

  add_filter('excerpt_length', 'wpb_custom_excerpt_length');
  ?>