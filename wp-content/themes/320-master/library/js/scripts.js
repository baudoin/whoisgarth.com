/*! Normalized address bar hiding for iOS & Android (c) @scottjehl MIT License */
(function( win ){
  var doc = win.document;

  // If there's a hash, or addEventListener is undefined, stop here
  if( !location.hash && win.addEventListener ){

    //scroll to 1
    win.scrollTo( 0, 1 );
    var scrollTop = 1,
      getScrollTop = function(){
        return win.pageYOffset || doc.compatMode === "CSS1Compat" && doc.documentElement.scrollTop || doc.body.scrollTop || 0;
      },

      //reset to 0 on bodyready, if needed
      bodycheck = setInterval(function(){
        if( doc.body ){
          clearInterval( bodycheck );
          scrollTop = getScrollTop();
          win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
        } 
      }, 15 );

    win.addEventListener( "load", function(){
      setTimeout(function(){
        //at load, if user hasn't scrolled more than 20 or so...
        if( getScrollTop() < 20 ){
          //reset to hide addr bar at onload
          win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
        }
      }, 0);
    }, false );
  }
})( this );

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
    

    $('.nav').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollOffset: 60,
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
      $('nav ul').toggleClass('show');
      $('nav').slideUp();
    });
    
  });

})(jQuery, this);