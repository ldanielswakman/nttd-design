$(document).ready(function() {

  // initiate smoothscroll on same-page links
  $('a[href^="#"]').smoothScroll();

  // fade in slides
  setTimeout(function() {
    $('.slides').addClass('loaded');
  }, 300);
  // initiate slideshow
  $('.slides').has('li').unslider({
    speed: 500,
    delay: 8000,
    fluid: true
  });

  $(".col-sticky").stick_in_parent({
    offset_top: 110
  });

});

function toggleMenu() {
  $('nav').toggleClass('isExpanded');
}