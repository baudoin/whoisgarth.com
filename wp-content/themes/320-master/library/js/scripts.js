;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  $(document).ready(function() {
    $('input, textarea').placeholder();

    // Custom Scripts

    $.stellar({
      horizontalScrolling: false,
      responsive: true
    });

    var $navJsOffset;

    if ($('body').hasClass('webkit') && $('body').hasClass('touch')) {
      var $navJsOffset = 0;
    } else {
      var $navJsOffset = 60;
    }
    

    $('.nav').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollOffset: $navJsOffset,
        filter: '',
        easing: 'easeInOutCirc',
        begin: function() {
            //I get fired when the animation is starting
        },
        end: function() {
            //I get fired when the animation is ending
        },
        scrollChange: function($currentListItem) {
            //I get fired when you enter a section and I pass the list item of the section
        }
    });

    // Slow scroll other anchor links

    $('.copy a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
               if (target.length) {
                 $('html,body').animate({
                     scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    // Check if form fields are not empty

    $('.form-wrap input, .form-wrap textarea').blur(function() {
        if( $(this).val().length !== 0 ) {
            $(this).addClass('value');
        } else {
            $(this).removeClass('value');
        }
    });

    // Show nav when hamburger clicked

    function toggleNav() {
      $('nav').slideToggle(function(){
        $('ul',this).toggleClass('show');
      });
    }
    $('#nav-toggle').on('click', function(){
      toggleNav();
    });
    $('nav li a').on('click',function(){
      toggleNav();
    });
    
  });

  // Hide address bar on mobile devices (except if #hash present, so we don't mess up deep linking).
  if (Modernizr.touch && !window.location.hash) {
    $(window).load(function () {
      setTimeout(function () {
        // At load, if user hasn't scrolled more than 20px or so...
  			if( $(window).scrollTop() < 20 ) {
          window.scrollTo(0, 1);
        }
      }, 0);
    });
  }

})(jQuery, this);