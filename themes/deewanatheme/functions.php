<?php

 // _________________________________________REGISTER MENUS

 function deewanasMenus(){

   register_nav_menus(array(
     'deewana_main' => 'Main Menu'
   ));
 };

 add_action('init', 'deewanasMenus');

// _______________________ DEEWANA THEME SETUP

function deewana_theme_setup(){

  add_image_size( 'fullScreen', 1920, 1080, true );
  add_image_size( 'square', 350, 350, true );
  add_image_size( 'portrait', 350, 724, true );
  add_image_size( 'box', 400, 375, true );
  add_image_size( 'mediumSize', 700, 400, true );
  add_image_size( 'blog', 966, 644, true );
  add_image_size( 'deewana-thumb', 350, 263, true );

  add_theme_support('post-thumbnails');
};

add_action('after_setup_theme', 'deewana_theme_setup');

// ___________________________________ ENQUEUED SCRIPTS

// _____________________________________________________STYLES

function deewanasScripts(){

  // _____________________________________________________STYLES

  wp_enqueue_style( 'slick-nav-css', get_template_directory_uri() . '/slicknav/slicknav.min.css', array(), '1.0.10');


  wp_enqueue_style('main-stylesheet', get_stylesheet_uri(), array('slick-nav-css',
'googlefont-bebas', 'googlefont-open-sans', 'googlefont-montserat', 'googlefont-poppins'));
  // _____________________________________________________________________________FONTS

  wp_enqueue_style( 'googlefont-bebas', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap', array());

  wp_enqueue_style( 'googlefont-open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;1,700&display=swap', array());

  wp_enqueue_style( 'googlefont-montserat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;1,400&display=swap', array());

  wp_enqueue_style( 'googlefont-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap', array());


// _____________________________________________________ SCRIPTS
wp_enqueue_script('jquery');

wp_enqueue_script('slick-nav-js', get_template_directory_uri() . '/slicknav/jquery.slicknav.min.js', array('jquery'), '1.0.10', true );

// ______________________ gsap

wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js', array('jquery'), '3.6.0', true );

wp_enqueue_script('scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js', array('jquery', 'gsap'), '3.6.0', true );

// ______________________________________

wp_enqueue_script('deewanas_skript', get_template_directory_uri() . '/js/script.js', array('jquery', 'gsap', 'scroll-trigger'), '1.0.0', true );

};

add_action('wp_enqueue_scripts', 'deewanasScripts' );

// _______________________________________ BACKGROUND IMAGES / FAKE SYLESHEETS

require get_template_directory() . '/functions/background_images.php';
 ?>
