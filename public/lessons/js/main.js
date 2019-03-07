var swiper = new Swiper('.baner', {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper = new Swiper('.team-carusel', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows : true,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});

var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null,    // optional scroll container selector, otherwise use window,
    resetAnimation: true,     // reset animation on end (default is true)
  }
);
wow.init();

$(function() {

  $('#menu-button').on('click', function() {
    $(document.body).toggleClass('menu-open');
  });

  $(window).resize(function(){
    if($(this).width() > 991){
      $(document.body).removeClass('menu-open');
    }
  })

  let blogOfferTextSplit = function(){
    $('.blog-view-offer-item-body').each(function(){
      let text = $(this).children('p').text();
      let newText = text.substring(0, 60);
      $(this).children('p').text(newText + '...')
    })
    
  }

  blogOfferTextSplit();

  $('.phone').mask("(099) 99-99-99");
});

var typed = new Typed("#typed", {
  strings: ["ì»µ Íñ³·ñ³íáñÙ³Ý ¹³ëÁÝÃ³óÝ»ñ"],
  typeSpeed: 50
});