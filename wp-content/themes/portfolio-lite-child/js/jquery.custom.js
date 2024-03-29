( function( $ ) {

  'use strict';

  function removeNoJsClass() {
    $( 'html:first' ).removeClass( 'no-js' );
  }

  /* Sidr Menu --------------------- */
  function sidrMenu () {
    $('#menu-toggle').sidr({
      name: 'side-menu',
      side: 'left', // By default
      source: '#navigation'
    })
    var win = $(window).width()
    $(window).on('resize', function () {
      if (win <= 768) {
        if ($('body').hasClass('sidr-open') && !$('html').hasClass('no-js')) {
          $.sidr('close', 'side-menu')
          $('.icon-menu-close').hide()
          $('.icon-menu-open').show()
        }
      }
    })
  }

  /* Flexslider ---------------------*/
  function flexSliderSetup() {
    if( ($).flexslider) {
      var slider = $('.flexslider');
      slider.flexslider({
        slideshowSpeed    : 12000,
        animationDuration  : 800,
        animation      : 'fade',
        video        : false,
        useCSS        : false,
        prevText      : '<i class="fa fa-angle-left"></i>',
        nextText      : '<i class="fa fa-angle-right"></i>',
        touch        : false,
        controlNav      : false,
        animationLoop    : true,
        smoothHeight    : false,
        pauseOnAction    : true,
        pauseOnHover    : true,
        controlsContainer: $('.custom-controls'),
        customDirectionNav: $('.flex-direction-nav a'),

        start: function(slider) {
          slider.removeClass('loading');
          $('.preloader').hide();
          $('.total-slides').text(slider.count);
          $('.slides li .feature-img').click(function(event){
            event.preventDefault();
            slider.flexAnimate(slider.getTarget("next"));
          })
          setTimeout(function () {
            $('.flexslider').resize()
          }, 1)
        },
        after: function(slider) {
          $('.current-slide').text(slider.currentSlide+1);
        }
      })
    }
  }

  function modifyPosts() {

    /* Animate Page Scroll ---------------------*/
    $('.scroll').click(function(event){
      event.preventDefault();
      $('html, body').animate({scrollTop:$(this.hash).offset().top}, 500);
    });

    /* Fit Vids ---------------------*/
    $('.content').fitVids();

    /* Check Element BG Color ---------------------*/
    $('body').colourBrightness();

  }

  $( document )
  .ready( removeNoJsClass )
  .ready( sidrMenu )
  .ready( modifyPosts )
  .on( 'post-load', modifyPosts );

  $( window )
  .load( flexSliderSetup );

})( jQuery );
