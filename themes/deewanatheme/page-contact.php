<?php

get_header();

while (have_posts()): the_post();
 ?>




<!-- ______________________________________________________________BG IMAGE -->
  <div class="contact-page-bg-img-container"></div>
  <!-- _______________________________________________________BG IMG OVERLAY -->
  <div class="contact-page__overlay-flex-container">
    <div class="contact-page__overlay"></div>
  </div>

  <main class="contact-page-flex container">

        <!-- ___________________________________________________________________ -->
        <div class="contact-page-flex-left">
          <h1 id='contact-text-heading' class="contact-heading"><?php the_title(); ?></h1>
          <img id='contact-text-logo' src="<?php echo get_template_directory_uri() . '/img/logos/deewana_homepage_heading.svg'; ?>" alt="">

        </div>
        <!-- ___________________________________________________________________ -->

        <div class="contact-page-flex-right">
          <div class="form-container">


          <?php the_content(); ?>

          <div class="social contact-page-social">
            <div class="solial-media-links-container">

              <div class="contact-soc-media-button">
                <a href="">
                <img src="<?php echo get_template_directory_uri() . '/img/logos/social/white-svg/youtube-white.svg' ?>" loading="lazy" alt="">
                </a>
              </div>

              <div class="contact-soc-media-button">
                <a href="">
                <img src="<?php echo get_template_directory_uri() . '/img/logos/social/white-svg/instagram-white.svg'  ?>" loading="lazy" alt="">
                </a>
              </div>

              <div class="contact-soc-media-button">
                <a href="">
                <img src="<?php echo get_template_directory_uri() . '/img/logos/social/white-svg/facebook-white.svg'  ?>" loading="lazy" alt="">
                </a>
              </div>

            </div>
          </div>
          </div>


        </div>

  </main>
<?php endwhile; wp_reset_postdata(); ?>

<?php wp_footer(); ?>
</body>

</html>
