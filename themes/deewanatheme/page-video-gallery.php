<?php
get_header(); ?>


<div class="video-gallery-bg-img-container"></div>

<?php while (have_posts()):the_post(); ?>
<main class="video-gallery-section">
  <div class="container">

    <div class="video-gallery-heading-container">
      <img class="heading-item " src="<?php echo get_template_directory_uri() . '/img/logos/deewana_homepage_heading.svg' ?>" alt="">
      <h1 class="video-gallery-heading heading-item "><?php the_title(); ?></h1>
    </div>

    <div class="video-gallery-content">
      <!-- _________________________in wordpress these are going to be links to single custom post pages -->

      <div class="thumbs-flex-container">
          <?php
            $args = array(
              'post_type' => 'deewanas_videos',
              'posts_per_page' => -1,
              'orderby' => 'rand'
            );
            $deewanasVideos = new WP_query($args);
            while ($deewanasVideos->have_posts()): $deewanasVideos->the_post();
          ?>

             <div class="thumb-container fade-in">
               <a href="<?php the_permalink(); ?>">
                 <img src="<?php echo get_field('thumbnail_image'); ?>" alt="">

                 <div class="thumb-container__text-container">
                   <h2 class="__text-container-h2"><?php the_title(); ?></h2>
                   <p class="__text-container-p"><?php the_field('second_title'); ?></p>
                 </div>

                 <div class="thumb-container__link-to-video-container">
                   <p class="button">watch the video</p>
                 </div>
               </a>
             </div>

          <?php endwhile; wp_reset_postdata(); ?>

        </div>

      </div>
    </div>

  </div>

  <div class="video-gallery-color-background">

  </div>

  <div class="color-scheme-container">
    <div class="colorOne color-field"></div>
    <div class="colorTwo color-field"></div>
    <div class="colorThree color-field"></div>
    <div class="colorFour color-field"></div>
    <div class="colorFive color-field"></div>
  </div>
</main>

<?php endwhile; wp_reset_postdata() ?>

<?php
get_footer('second'); ?>
