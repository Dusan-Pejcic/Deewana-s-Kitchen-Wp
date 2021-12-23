<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>new Deewana'S Kitchen</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

  <header>
    <div class="nav">

      <div class="container navbar">
        <div class="logo-container">
          <a href="<?php echo home_url(); ?>">
          <img class="nav-logo" src="<?php echo get_template_directory_uri() . '/img/logos/deewana_logo.svg' ?>" alt="">
          </a>
        </div>

        <?php 
        $args = array(
          'theme_location' => 'deewana_main',
          'container' => 'nav',
          'container_class' => 'navigation',
          'menu_id' => 'menu',
          'menu_class' => 'nav-links-container'
        );

        wp_nav_menu($args); ?>

      </div>

    </div>
  </header>
