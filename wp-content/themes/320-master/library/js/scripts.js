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
    
    // Check for iOS and change
    var deviceAgent = navigator.userAgent.toLowerCase();
    var agentID = deviceAgent.match(/(iPad|iPhone|iPod)/i);

    var $navJsOffset;

    if (agentID) {
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
                     scrollTop: target.offset().top - 60
                }, 1000);
                return false;
            }
        }
    });

    // Slow scroll to top

    $('.to-top').click(function(){
        $('html, body').animate({scrollTop:0}, 1000);
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

    $('#nav-toggle').on('click', function(){
      $('nav').slideToggle(function(){
        $('ul',this).toggleClass('show');
      });
    });

    $('nav li > a').on('click', function(){
      $('nav').slideUp(function(){
        $('ul',this).toggleClass('show');
      });
    });
    
  });

})(jQuery, this);