<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>

  <!-- ____________________________________________________________background -->
    <div class="single-video-page__background" style="background-color: <?php echo get_field('background_color_1'); ?>">
      <div class="color__bg color__bg-left" ></div>
      <div class="color__bg color__bg-right" style="background-color: <?php echo get_field('background_color_2'); ?>"></div>
    </div>
  <!-- _________________________________________________________________VIDEO -->
    <main class="container iframe-and-aside-flex-container">
      <div class="flex-container__iframe">
        <div class="iframe-container">
          <iframe class="" src="<?php echo get_field('video_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <div class="video-title-container">
      <h1 class="single-page_video-title"><?php the_title(); ?></h1>
      <p class="single-page-second-title"><?php the_field('second_title'); ?></p>
      </div>
      </div>

      <p class="watch-next-p">Watch next</p>
      <aside class="aside-thumbnail-flex-container">

        <?php
          $args = array(
            'post_type' => 'deewanas_videos',
            'posts_per_page' => 4,
            'orderby' => 'rand'
          );

          $videos = new WP_Query($args);
          while ($videos->have_posts()) :$videos-> the_post();
         ?>
        <div class="aside-thumbnail-box">
          <a href="<?php the_permalink(); ?>">
            <img src="<?php echo get_field('thumbnail_image'); ?>" alt="">
            <p><?php the_title(); ?></p>
          </a>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
      </aside>
    
    </main>

<?php endwhile; wp_reset_postdata(); ?>

<?php get_footer('second'); ?>
