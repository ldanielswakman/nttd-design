$(document).ready(function() {

  // initiate smoothscroll on same-page links
  $('a[href^="#"]').smoothScroll();

  // initiate slides
  // if($('.slides').length > 0) {
  //   $('.slides').slidesjs({
  //     width: 800,
  //     height: 300,
  //     pagination: {
  //       active: false
  //     },
  //     navigation: {
  //       active: false,
  //     },
  //     play: {
  //       auto: true,
  //       interval: 1000
  //     }
  //   });
  // }
});

function toggleMenu() {
  $('#menu').toggleClass('isExpanded');
}