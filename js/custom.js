'use strict';

$(window).ready(function() {

  // Preloader
    $('#preloader').delay(1000).fadeOut('slow', function() {
      $(this).remove();
    });

  $('body').scrollspy({
    target: '#navbar'
  });

  $('.rotating').Morphext({
    animation: 'flipInX',
    separator: ',',
    speed: 3000
  });


  $('.card').hover(function () {
    $('.card-img-overlay', this).toggleClass('hidden', 'show');
  });

  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
  });

});
