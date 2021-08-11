<?php

function background_images(){

  //  to get a dynamic css rule that you will insert into a wp_add_inline_style
  function get_bg_image_css_code($fieldId, $pageId, $cssSelector){

    $acField = get_field($fieldId,$pageId );
    $acFieldBgImg = $acField['url'];

    return $cssSelector .'{
      background-image: url(' . $acFieldBgImg . ');
    }';
  }

     function dewana_background_images(){

        wp_register_style('custom', false);
        wp_enqueue_style('custom');

       $front_page_id = get_option('page_on_front');


            // _____________________________________________________homepage img 1

       wp_add_inline_style( 'custom', get_bg_image_css_code( 'second_section_bg_img', $front_page_id ,  '.second-section .background-image-container'));
            // _____________________________________________________homepage img 1 MOBILE devices

       wp_add_inline_style( 'custom', get_bg_image_css_code( 'mobile_background_image', $front_page_id ,  '.mobile-bg-img-container'));

            // _____________________________________________________homepage footer img

       wp_add_inline_style( 'custom',  get_bg_image_css_code( 'homepage_footer_bg', $front_page_id ,'.homepage-footer-bg-image-container'));


  // _______________________________________________________ VIDEO GALLERY BACKGROUNDS

   // _____________________________________________________ video gallery bg img
         wp_add_inline_style( 'custom',  get_bg_image_css_code( 'video_gallery_bg_img', '11' ,'.video-gallery-bg-img-container'));

       // _____________________________________________________ video gallery footer img

       wp_add_inline_style( 'custom',  get_bg_image_css_code( 'footer_bg_img', '11' ,'.video-gallery-footer'));

// _________________________________ CONTACT PAGE BACKGROUNDS for different viewport sizes
        $bgImgS = get_field('background_image_s', '13');
        $imgS = $bgImgS['url'];

        $bgImgM = get_field('background_image_m', '13');
        $imgM = $bgImgM['url'];

        $bgImgL = get_field('background_image_l', '13');
        $imgL = $bgImgL['url'];

        $cssContactBg ='
        .contact-page-bg-img-container{background-image: url('. $imgS . '); }

          @media only screen
        and (min-device-width: 768px)
        and (max-device-width: 1024px)
        and (orientation: portrait), only screen
        and (min-device-width: 768px)
        and (max-device-width: 1024px)
        and (orientation: landscape) {
        .contact-page-bg-img-container{ background-image: url('. $imgM .');}
        }

        @media only screen
        and (min-width: 1200px){
          .contact-page-bg-img-container{background-image: url('. $imgL . ');}
        }';

        wp_add_inline_style( 'custom', $cssContactBg );

        // _____________________________________________ SLICNAV BG

        $slicknavBgImg = get_template_directory_uri() . '/img/slicknav_bg_img_grey.jpg';
        $slicknavCss = '.slicknav_nav{background-image: url('. $slicknavBgImg .')};';

        wp_add_inline_style( 'custom', $slicknavCss );


        }

     add_action( 'init', 'dewana_background_images' );

};

background_images();
 ?>
