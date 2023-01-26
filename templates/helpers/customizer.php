<?php
  // add a customizer setting
  function wpb_customizer_settings($wp_customizer) {
    // new section
    $wp_customizer->add_section('header', array(
      'title'=>__('Header Settings', 'wpalbum'),
      'priority'=>70
    ));
    //allow us to add capability to the customizer setting
    $wp_customizer->add_setting('header_image', array(
      'capability'=>'edit_theme_options'
    ));
    //add controls in the customizer settings
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'header_image', array(
      'label'=>__('Header Image', 'wpalbum'),
      'section'=>'header'
    )));

    // add header text
    $wp_customizer->add_setting('header_text_field', array(
      'capability'=>'edit_theme_options',
      'default'=>'WordPress Album'
    ));

    // add text control
    $wp_customizer->add_control('header_text_control', array(
      'label'=>__('Header Text','wpalbum'),
      'description'=>'Change Header Text',
      'section'=>'header',
      'settings'=>'header_text_field'
    ));

    // add header description
    $wp_customizer->add_setting('header_desc_field', array(
      'capability'=>'edit_theme_options',
      'default'=>'Single one-page template for photo galleries, portfolios, and more'
    ));

    // add text control
    $wp_customizer->add_control('header_description_control', array(
      'label'=>__('Header Description','wpalbum'),
      'description'=>'Change Header Description',
      'section'=>'header',
      'settings'=>'header_desc_field'
    ));

    // add header Button
    $wp_customizer->add_setting('header_btn_url', array(
      'capability'=>'edit_theme_options',
      'default'=>_x('http://github.com', 'wpalbum')
    ));

    // add button control
    $wp_customizer->add_control('header_btn_control', array(
      'label'=>__('Button URL','wpalbum'),
      'description'=>'Change Button URL',
      'section'=>'header',
      'settings'=>'header_btn_url'
    ));

    // add header Button text
    $wp_customizer->add_setting('header_btn_text', array(
      'capability'=>'edit_theme_options',
      'default'=>_x('GitHub', 'wpalbum')
    ));

    // add button control
    $wp_customizer->add_control('header_btn_text_control', array(
      'label'=>__('Button Text','wpalbum'),
      'description'=>'Change Button Text',
      'section'=>'header',
      'settings'=>'header_btn_text'
    ));

  }
  add_action('customize_register', 'wpb_customizer_settings');


?>