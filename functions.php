<?php

// Добавить действие

  add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );
  add_theme_support( 'custom-logo' );

  function add_scripts_and_styles() {

    //Скрипты

    wp_deregister_script( 'jquery' );

    wp_register_script( 'jquery',get_template_directory_uri() .'/assets/js/jquery-3.5.1.min.js',false,null,true );

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'main',get_template_directory_uri() .'/assets/js/main.js',array('jquery'),null,'footer' );

    //Стили

    wp_enqueue_style( 'fontello',get_template_directory_uri() .'/assets/css/fontello.css' );

    wp_enqueue_style( 'main',get_stylesheet_uri(),array('fontello') );

  }

?>