$(document).ready(function() {

  // platform, touch device & standalone detection
  $ios = ( navigator.userAgent.toLowerCase().match(/(iPad|iPhone|iPod)/i) ? true : false );
  $android = ( navigator.userAgent.toLowerCase().match(/(android)/i) ? true : false );
  $standalone = (window.navigator.standalone) ? true : false;
  $touch = ( navigator.userAgent.match(/(Android|webOS|iPad|iPhone|iPod|BlackBerry)/i) ? true : false );
  var touchEvent = $touch ? 'touchstart' : 'click';

  // add body class if IE
  checkIE();

  // initiate smoothscroll on same-page links
  $('a[href^="#"]').smoothScroll({
    offset: -130,
  });

  $('.bxslider').each(function () {
    if ( $(this).find('.slide').length > 1 ) {

      $(this).bxSlider({
        auto: true,
        // adaptiveHeight: true,
        mode: 'horizontal',
        pause: 6000,
        controls: false,
        pager: false
      });
      
    }
  });

  // load custom twitter feed
  if ( $('#twitterfeed').length > 0 ) {
    twitterFetcher.fetch({
      "id": '437257042844073984',
      "domId": 'twitterfeed',
      "maxTweets": 3,
      "enableLinks": true,
      "showUser": true,
      "showTime": true,
      "lang": 'en',
      "customCallback": handleTweets
    });
  }
  function handleTweets(tweets){
    var n = 0;
    var element = document.getElementById('twitterfeed');
    var html = '<div class="bxslider">';
    while(n < tweets.length) {
      tweet = tweets[n].replace('data-src-2x', 'src');
      html += '<div class="tweet-box bg-white">' + tweet + '</div>';
      n++;
    }
    html += '</div>';
    element.innerHTML = html;
    if (tweets.length > 1) {
      $('#twitterfeed .bxslider').bxSlider({
        auto: true,
        // adaptiveHeight: true,
        mode: 'horizontal',
        pause: 5000,
        controls: false,
        pager: false
      });
    }
  }

  // perform scrollActions on pageload
  scrollActions();

  // show/hide labels on page load
  $('.field').each(function() {
    evalField($(this));
  });

  // 'manually' match height of containers
  matchHeights($('.matchheight'));


  // Listeners
  $('.field').on('keypress input change', function() {
    $(this).closest('.fieldset').removeClass('hasError');
    $(this).closest('.fieldset').find('.field-validation').fadeOut();
  });
  $('.field').bind('input', function() {
    evalField($(this));
  });

  // SVG map interactions
  if($('.svg-map') && $('.svg-map__legend')) {
    // hover class toggle for legend > map
    $('.svg-map__legend a').hover(function(e) {
      $('.svg-map [id^="' + $(this).attr('data-map-target') + '"]' ).attr("class", "isHovered");
    }, function(e) {
      $('.svg-map [id^="' + $(this).attr('data-map-target') + '"]' ).attr("class", "");
    });
    // hover class toggle for (regional & jurisdictional) map > legend
    $('.svg-map g[id="reg:areas"] path').hover(function(e) {
      $('.svg-map__legend a[data-map-target="' + $(this).attr('id').substr(0,5) + '"]').addClass('isHovered');
    }, function() {
      $('.svg-map__legend a[data-map-target="' + $(this).attr('id').substr(0,5) + '"]').removeClass('isHovered');
    });
    $('.svg-map g[id="jur:areas"] > g').hover(function(e) {
      $('.svg-map__legend a[data-map-target="' + $(this).attr('id') + '"]').addClass('isHovered');
    }, function() {
      $('.svg-map__legend a[data-map-target="' + $(this).attr('id') + '"]').removeClass('isHovered');
    });
    // click event for (regional & jurisdictional) map
    $('.svg-map g[id="reg:areas"] path').click(function(e) {
      $target = $('.svg-map__legend a[data-map-target="' + $(this).attr('id').substr(0,5) + '"]').attr('href');
      if($target.length > 0) {
        window.location.href = $target;
      }
    });
    $('.svg-map g[id="jur:areas"] > g').click(function(e) {
      $target = $('.svg-map__legend a[data-map-target="' + $(this).attr('id') + '"]').attr('href');
      if($target.length > 0) {
        window.location.href = $target;
      }
    });
  }

});

function evalField(obj) {
  fieldset = obj.closest('.fieldset')
  if (obj.val() == '') {
    fieldset.removeClass('hasContent');
  } else {
    fieldset.addClass('hasContent');
  }
  if ( fieldset.hasClass('hasError') != 0) {
    fieldset.find('.field-validation').show();
  }
}

function toggleMenu() {
  $('nav').toggleClass('isExpanded');
  $('#nav_mask').toggleClass('isExpanded');
}

// initiate sticky boxes
function initStickyBox(obj) {
  $(obj).stick_in_parent({
    offset_top: 110,
    parent: '.row',
    bottoming: true,
  });
}

function scrollActions() {
  scroll = $(window).scrollTop();
  windowH = $(window).height();


  // header bg-orange & title fade-in
  if($('#intro_banner').length > 0) {
    $thres1 = $('#intro_banner').offset().top + 100;
    $thres2 = $('#intro_banner').outerHeight() - 100;
    if(scroll < $thres1) {
      $('header.bg-orange').css('background-color','transparent');
      $('header.bg-bluesoft').css('background-color','transparent');
      $('header h4').css('opacity', 0);
    } else if (scroll > $thres1 && scroll < $thres2) {
      $alpha = (scroll - $thres1) / ($thres2 - $thres1);
      $('header.bg-orange').css('background-color','rgba(255, 102, 0, ' + $alpha + ')');
      $('header.bg-bluesoft').css('background-color','rgba(124, 141, 181, ' + $alpha + ')');
      $('header h4').css('opacity', $alpha );
    } else {
      $('header.bg-orange').css('background-color','');
      $('header.bg-bluesoft').css('background-color','');
      $('header h4').css('opacity', 1);
    }
  }

  // parallax effect to slides
  var $pstrength = 2; // Parallax strength
  if($(".slide").length > 0) {
    $('.slide').each(function() {
      var st = $(this).offset().top;
      if (!$touch) {
        prlx_offset = ($(this).attr('data-prlx-offset')) ? $(this).attr('data-prlx-offset') : 0;
        var pos = -(-prlx_offset - (scroll - st)/$pstrength)+'px';
        $(this).css('background-position','center '+pos);
      } else if ($ios) {
        $(this).css('background-attachment','scroll');
      }
    });
  }

  // initiate sticky box if present and not mobile view
  if ($(window).width() > 768 && $('.box-sticky').length > 0) {
    initStickyBox(".box-sticky");
  } else {
    $(".box-sticky").trigger("sticky_kit:detach");
  }

  // floating action button behaviour
  $('#floatingaction').each(function() {
    height = $(this).outerHeight();
    // $(this).addClass('isHidden');
    appearPosY = ($(this).attr('data-appear-ypos')) ? $(this).attr('data-appear-ypos') : 0;
    disappearPosY = ($(this).attr('data-disappear-ypos')) ? $(this).attr('data-disappear-ypos') : $(window).height();

    if (scroll < appearPosY || scroll >= disappearPosY) {
      $(this).addClass('isHidden');
    } else {
      $(this).removeClass('isHidden');
    }
  });

  // smooth out height alignment for news & event boxes
  $('#news, #events').removeAttr('style');
  $newsheight = $('#news').outerHeight();
  $eventsheight = $('#events').outerHeight();
  if ($(window).width() > 768) {
    if ($newsheight > $eventsheight) {
      $('#events').css('height', $newsheight);
    } else if ($newsheight == $eventsheight) {
      // do nothing
    } else {
      $('#news').css('height', $eventsheight);
    }
  }

}

function checkIE() {
  var msie = window.navigator.userAgent.indexOf("MSIE ");
  var opera = navigator.userAgent.indexOf("Opera");

  if (msie > 0 || opera > 0 || window.opera || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
    $('body').addClass('ancient-browser');
    $('.icon').fadeOut().fadeIn();
  }
  return false;
}

function showHiddenContent(obj) {
  $context = $(obj).closest('.u-hasHiddenContent');
  if($context.length > 0) {
    $context.toggleClass('u-showHiddenContent');
  }
}

function toggleDialog(dest) {
  $('#dialog_' + dest).addClass('isVisible');
  $('#dialog_mask').addClass('isVisible');
}
function closeDialog(dest) {
  if(dest == 'all') {
    $target = 'dialog';
  } else {
    $target = '#dialog_' + dest;
  }
  $($target).removeClass('isVisible');
  $('#dialog_mask').removeClass('isVisible');
}

function closeFlash(obj) {
  obj.closest('.flash').addClass('u-hide');
}

function matchHeights(obj) {
  if (obj) {
    $maxheight = 0;
    obj.each(function() {
      if ($(this).outerHeight() > $maxheight) {
        $maxheight = $(this).outerHeight();
      }
    });
    obj.css('height', $maxheight + 'px');
  }
}

$(document).on('ready scroll resize scrollstart scrollstop', function() { scrollActions(); });
