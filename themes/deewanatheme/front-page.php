<?php
get_header(); ?>



<!-- ________________________________________________________________WELCOME SECTION -->
<div class="video-background-container welcome-section-bg">
  <div class="video-container">

    <?php
    $bgVideo = get_field('video_background');
     ?>
    <video muted class="mobile-d-none" id="home-video-bg" autoplay preload src="<?php echo $bgVideo['video_file']; ?>" poster="<?php echo $bgVideo['video_poster_image']; ?>"></video>

    <div class="mobile-bg-img-container">

    </div>

  </div>
</div>


<div class="passepartout-container">

  <div class="text-logo-section container">
    <img src="<?php echo get_template_directory_uri() . '/img\logos\deewana_homepage_heading.svg' ?>" alt="">
  </div>

  <div class="passepartout passepartout-bottom">

  </div>
</div>


<!-- ________________________________________________________________MAIN SECTION -->
<main>
  <section class="second-section">
  <!-- ______________________________________________________________ second section bg img -->
    <div class="background-image-container"> </div>

    <!-- ______________________________________________________________ second section content -->

    <div class="passepartout-container">
      <div class="passepartout passepartout-top"></div>
      <!-- ____________________________________________________________ -->
      <div class="second-section-content container">

        <div class="text-logo-container fade-in">
          <img  src="<?php echo get_template_directory_uri() . '/img\logos\deewana_homepage_heading.svg' ?>" loading="lazy" alt="">
        </div>
        <?php $homepageText = get_field('homepage_text'); ?>

        <h3 class="fade-in"> <?php echo $homepageText['sub_heading']; ?></h3>

        <p class="fade-in">  <?php echo $homepageText['homepage_text']; ?></p>
<div class="button-container fade-in">
<a href="<?php echo get_permalink(get_page_by_title('Video gallery')); ?>">video gallery</a>
</div>

      </div>

      <!-- ____________________________________________________________ -->

      <div class="passepartout passepartout-bottom"></div>
    </div>

  </section>
</main>




<?php get_footer(); ?>
