$(document).ready(function() {

  // initiate smoothscroll on same-page links
  $('a[href^="#"]').smoothScroll();

  // fade in slides
  setTimeout(function() {
    $('.slides').addClass('loaded');
  }, 300);
  // initiate slideshow
  $('.slides').unslider({
    speed: 500,
    delay: 8000,
    fluid: true
  });

});

function toggleMenu() {
  $('#menu').toggleClass('isExpanded');
}