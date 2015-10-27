$(document).ready(function() {

  // platform, touch device & standalone detection
  $ios = ( navigator.userAgent.toLowerCase().match(/(iPad|iPhone|iPod)/i) ? true : false );
  $android = ( navigator.userAgent.toLowerCase().match(/(android)/i) ? true : false );
  $standalone = (window.navigator.standalone) ? true : false;
  $touch = ( navigator.userAgent.match(/(Android|webOS|iPad|iPhone|iPod|BlackBerry)/i) ? true : false );
  var touchEvent = $touch ? 'touchstart' : 'click';

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
    var html = '<ul class="row row-internalpadding">';
    while(n < tweets.length) {
      html += '<li class="col-md-4 col-sm-6"><div class="tweet-box content-small">' + tweets[n] + '</div></li>';
      n++;
    }
    html += '</ul>';
    element.innerHTML = html;
  }

  // perform scrollActions on pageload
  scrollActions();

  // shiw/hide labels on page load
  $('.field').each(function() {
    evalField($(this));
  });



  // Listeners
  $('.field').on('keypress input change', function() {
    $(this).closest('.fieldset').removeClass('hasError');
    $(this).closest('.fieldset').find('.field-validation').fadeOut();
  });
  $('.field').bind('input', function() {
    evalField($(this));
  });


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
      $('header h4').css('opacity', 0);
    } else if (scroll > $thres1 && scroll < $thres2) {
      $alpha = (scroll - $thres1) / ($thres2 - $thres1);
      $('header.bg-orange').css('background-color','rgba(255, 102, 0, ' + $alpha + ')');
      $('header h4').css('opacity', $alpha );
    } else {
      $('header.bg-orange').css('background-color','');
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

}

function showHiddenContent(obj) {
  $context = obj.closest('.u-hasHiddenContent');
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

$(window).scroll(function() { scrollActions(); });
$(window).resize(function() { scrollActions(); });
$(document).bind("scrollstart", function() { scrollActions(); });
$(document).bind("scrollstop", function() { scrollActions(); });
