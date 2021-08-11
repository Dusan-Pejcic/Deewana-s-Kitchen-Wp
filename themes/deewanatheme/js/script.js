jQuery(function($){



        $('#menu').slicknav();


var bodyTag = $('body');


gsap.registerPlugin(ScrollTrigger);


const fadeIns = gsap.utils.toArray('.fade-in');
fadeIns.forEach(fadeIn =>{
  gsap.to(fadeIn, {
    opacity: 1,
    bottom: 0,
    scrollTrigger:{
      // markers: true,
      trigger: fadeIn,
      start: 'top 700'
    }
  })
})

gsap.to('.soc-media-button', .7, {
  opacity: 1,
  bottom: 0,
  stagger: .1,
  scrollTrigger: {
    trigger: '.solial-media-links-container'
  }
});
gsap.to('.footer-text-box', .7, {
  opacity: 1,
  bottom: 0,
  stagger: .3,
  scrollTrigger: {
    trigger: '.footer-text-container'
  }
});

const navAnimation = gsap.timeline();

navAnimation.to('.menu-item', .7, {opacity: 1, marginTop:0, stagger: 0.2})
.to('.logo-container img', .7, {opacity: 1, marginTop:0}, '-=1');


// _____________________________________ only homepage
if (bodyTag.hasClass('home')) {

  const welcome = gsap.timeline()

  welcome.to('.passepartout-bottom', .7, {opacity: 1, marginBottom: 0},0)
  .to('.text-logo-section img', .7, {opacity: 1, marginBottom: 0});

}


// ___________________________________________________________________________ only video gallery
if (bodyTag.hasClass('page-id-11')) {

  const tl = gsap.timeline({delay: 1});

  tl.to(".color-field", { duration: .4, ease: Power2.easeOut,
    y: -600,
    stagger: 0.05
  }).to(".color-field", { duration: .4, ease: Power2.easein,
    y: 0,
    stagger: 0.05
  }, '-=.4')
  .to('.video-gallery-heading-container img', .7, {top: 20, opacity: 1, ease: Power2.easeOut}, '-=.5')
  .to('.video-gallery-heading-container h1', .7, {top: 20, opacity: 1, ease: Power2.easeOut}, '-=.5');
};

// ___________________________________________________________________________ Contact page ANIMATIONS

if (bodyTag.hasClass('page-id-13')) {
  const contactAnimation = gsap.timeline();

  contactAnimation.to('.contact-page-flex-left img', .9, {top: 0, opacity: 1, ease: Power2.easeOut})
  .to('.contact-page-flex-left h1', .9, {top: 0, opacity: 1, ease: Power4.easeOut}, '-=.7')
  .to('.contact-page__overlay', .8, {
    ease: Power2.easeOut,
    right: 0,
    opacity: 1
  }, '-=1').to('label, input', .5, {top: 0, opacity: 1, ease: Power4.easeout, stagger: .1}, '-=.8')
  .to('.contact-soc-media-button', .5, {top: 0, opacity: 1, ease: Power4.easeout, stagger: .1}, 0);
}

// __________________________________________________________________________ single video page

if (bodyTag.hasClass('deewanas_videos-template-default')){
  const singleVidAnimation = gsap.timeline();

  singleVidAnimation.to('.color__bg-right', .7, {opacity: 1, right: 0})

  .to('.iframe-container', .8, { opacity: 1, top: 0}, 0)
  .to('.aside-thumbnail-box', .7, {top: 0, opacity:1, stagger: .05})
  .to('.video-title-container', .7, {top: 0, opacity:1});
}


// _________________________________________________________END
    });
