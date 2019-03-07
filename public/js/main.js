(function($) {
  "use strict";

  /*--------------------------
  preloader
  ---------------------------- */
  $(window).on('load', function() {
    var pre_loader = $('#preloader');
    pre_loader.fadeOut('slow', function() {
      $(this).remove();
    });
  });



  /*---------------------
   TOP Menu Stick
  --------------------- */
  var s = $("#sticker");
  var pos = s.position();
  $(window).on('scroll', function() {
    var windowpos = $(window).scrollTop() > 300;
    if (windowpos > pos.top) {
      s.addClass("stick");
    } else {
      s.removeClass("stick");
    }
  });

  /*----------------------------
   Navbar nav
  ------------------------------ */
  var main_menu = $(".main-menu ul.navbar-nav li ");
  main_menu.on('click', function() {
    main_menu.removeClass("active");
    $(this).addClass("active");
  });

  /*----------------------------
   wow js active
  ------------------------------ */
  new WOW().init();

  $(".navbar-collapse a").on('click', function() {
    $(".navbar-collapse.collapse").removeClass('in');
  });

  //---------------------------------------------
    //------Swiper slider
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 20,
        // init: false,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000,
        },
        breakpoints: {
            991: {
                slidesPerView: 3,
                spaceBetween: 25,
            },
            690: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10,
            }
        }
    });

    //---------------------
  //Nivo slider
  //---------------------------------------------
  $('#ensign-nivoslider').nivoSlider({
    effect: 'random',
    slices: 15,
    boxCols: 1,
    boxRows: 1,
    animSpeed: 500,
    pauseTime: 5000,
    startSlide: 0,
    directionNav: true,
    controlNavThumbs: false,
    pauseOnHover: true,
    manualAdvance: true,
  });

  /*----------------------------
   Scrollspy js
  ------------------------------ */
  var Body = $('body');
  Body.scrollspy({
    target: '.navbar-collapse',
    offset: 80
  });

  /*---------------------
    Venobox
  --------------------- */
  var veno_box = $('.venobox');
  veno_box.venobox();

  /*----------------------------
  Page Scroll
  ------------------------------ */
  var page_scroll = $('a.page-scroll');
  page_scroll.on('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top - 55
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  });

  /*--------------------------
    Back to top button
  ---------------------------- */
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

  /*----------------------------
   Parallax
  ------------------------------ */
  var well_lax = $('.wellcome-area');
  well_lax.parallax("50%", 0.4);
  var well_text = $('.wellcome-text');
  well_text.parallax("50%", 0.6);

  /*--------------------------
   collapse
  ---------------------------- */
  var panel_test = $('.panel-heading a');
  panel_test.on('click', function() {
    panel_test.removeClass('active');
    $(this).addClass('active');
  });

  /*---------------------
   Testimonial carousel
  ---------------------*/
  var test_carousel = $('.testimonial-carousel');
  test_carousel.owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });
  /*----------------------------
   isotope active
  ------------------------------ */
  // portfolio start
  $(window).on("load", function() {
    var $container = $('.awesome-project-content');
    $container.isotope({
      filter: '*',
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false
      }
    });
    var pro_menu = $('.project-menu li a');
    pro_menu.on("click", function() {
      var pro_menu_active = $('.project-menu li a.active');
      pro_menu_active.removeClass('active');
      $(this).addClass('active');
      var selector = $(this).attr('data-filter');
      $container.isotope({
        filter: selector,
        animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false
        }
      });
      return false;
    });

  });
  //portfolio end

  /*---------------------
   Circular Bars - Knob
--------------------- */
  if (typeof($.fn.knob) != 'undefined') {
    var knob_tex = $('.knob');
    knob_tex.each(function() {
      var $this = $(this),
        knobVal = $this.attr('data-rel');

      $this.knob({
        'draw': function() {
          $(this.i).val(this.cv + '%')
        }
      });

      $this.appear(function() {
        $({
          value: 0
        }).animate({
          value: knobVal
        }, {
          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.val(Math.ceil(this.value)).trigger('change');
          }
        });
      }, {
        accX: 0,
        accY: -150
      });
    });
  }

  /*---------------------
     Google Maps
  --------------------- */
  // Fr use with dynamic Google maps
  // if( $('#google-map').length) {
  //       var get_latitude = $('#google-map').data('latitude');
  //       var get_longitude = $('#google-map').data('longitude');
  //
  //       function initialize_google_map() {
  //           var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
  //           var mapOptions = {
  //               zoom: 14,
  //               scrollwheel: false,
  //               center: myLatlng
  //           };
  //           var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
  //           var marker = new google.maps.Marker({
  //               position: myLatlng,
  //               map: map
  //           });
  //       }
  //       google.maps.event.addDomListener(window, 'load', initialize_google_map);
  //   }

})(jQuery);

$(document).click(function (event) {
    var clickover = $(event.target);
    var $navbar = $(".navbar-collapse");               
    var _opened = $navbar.hasClass("in");
    if (_opened === true && !clickover.hasClass("navbar-toggle")) {      
        $navbar.collapse('hide');
    }
});
jQuery(window).on('load',function(){
    jQuery('#modalVideo').modal('show');
});
jQuery(document).on('click',function(){
	$("video").prop('muted', true);
});
// setTimeout(
  // function() 
  // {
    // $('video').get(0).play();
  // }, 300);
  
// Google Maps settings

// Regular map
// function regular_map() {
//     var var_location = new google.maps.LatLng(40.725118, -73.997699);

//     var var_mapoptions = {
//         center: var_location,
//         zoom: 14
//     };

//     var var_map = new google.maps.Map(document.getElementById("map-container"),
//         var_mapoptions);

//     var var_marker = new google.maps.Marker({
//         position: var_location,
//         map: var_map,
//         title: "New York"
//     });
// }

// Initialize maps
// google.maps.event.addDomListener(window, 'load', regular_map);

					jQuery().ready(function() {
		// validate the comment form when it is submitted
		jQuery(".reg").validate();
		
jQuery.extend(jQuery.validator.messages, {
    required: "my required message",
 
});
jQuery('button.btn-order').prop('disabled', 'disabled'); 
    jQuery('.reg input').on('keyup blur', function () { // fires on every keyup & blur
        if (jQuery('.reg').valid()) {                   // checks form for validity
            jQuery('button').prop('disabled', false);        // enables button
        } else {
            jQuery('button').prop('disabled', 'disabled');   // disables button
        }
    });
});