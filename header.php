<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <title><?php bloginfo('name');  ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head() ?>
    
  </head>
  
<body>    
  <header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="<?php ?>" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Album</strong>
        </a>

        <?php
        //display primary menu
        if(has_nav_menu('primary-menu')) {
          wp_nav_menu(array(
            'theme_location'=>'primary-menu',
            'container' => '',
            'items_wrap'=>'<ul class="navbar-nav flex-row flex-wrap ms-md-auto">%3$s</ul>'
          ));
        }
        ?>

      </div>
    </div>
  </header>
