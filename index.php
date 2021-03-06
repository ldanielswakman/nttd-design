<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php 
    include('components/nav.php');
    include('components/header.php');
    include('components/dialog.php');
    ?>

    <!-- 'Follow us' floating button -->
    <div class="u-pinfixbottomright isHidden" id="floatingaction" data-appear-ypos="0" data-disappear-ypos="1000">
      <a href="https://twitter.com/NLeconomyinTR" target="_blank" class="btn btn-secondary clearfix u-pt10">
        <!-- <i class="icon icon-basic- u-floatleft"></i> -->
        <img src="images/twitter-icon.png" alt="" class="u-floatleft u-mr10" style="height: 18px; margin-top: 3px;" />
        <h5 class="u-floatleft u-mr10">Follow us</h5>
        <i class="icon icon-arrows-slim-right icon-15x u-floatleft"></i>
      </a>
    </div>

    <section id="intro_banner" class="hasSlides">

      <div class="slides">
        <div class="bxslider">
          <div class="slide" style="background-image: url('images/banner_izmir1.jpg');" data-prlx-offset="-150"></div>
          <div class="slide" style="background-image: url('images/banner_bridgebusiness.jpg');"></div>
          <div class="slide" style="background-image: url('images/banner_ankara.jpg');" data-prlx-offset="-50"></div>
          <div class="slide" style="background-image: url('images/banner_metrobridge.jpg');"></div>
          <!-- <div class="slide" style="background-image: url('images/banner_containership.jpg');" data-prlx-offset="-200"></div> -->
          <!-- <div class="slide" style="background-image: url('images/banner_izmir2.jpg');" data-prlx-offset="-150"></div> -->
        </div>
      </div>

      <div class="section-content">

        <div class="header-placeholder u-relative"></div>
        <div class="u-pintopright u-pv15 u-ph25">
          <a href="javascript:toggleMenu();" class="btn btn-white btn-reveal u-pr60">MENU</a>
        </div>

        <div class="row">
          <div class="col-xs-12 u-aligncenter u-pv12vw">

            <h4 class="c-white">Netherlands Turkey Trade Network</h4>
            <p class="text-on-photo text-xhuge u-aligncenter c-white"><em>Expand your business to new horizons.</em></p>

            <div class="row">
              <div class="col-sm-12 col-xs-hide">
                <a href="#intro" class="c-white u-inlineblock u-pa20 u-mt10"><i class="icon icon-arrows-down icon-5x"></i></a>
              </div>
            </div>

          </div>
        </div>

        <div class="quicklinks-xs-placeholder"></div>

        <div class="quicklinks u-pinbottom u-fullwidth">
          <div class="row row-nopadding">
            <div class="col-md-3 col-sm-12 col-sm-hide">
              <a href="" class="u-block u-pt40 u-pb20 u-pl10 logo">
                <img src="images/holland_logo.svg" alt="" width="180px" />
              </a>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
              <a href="aboutus.php" class="u-block">
                <i class="icon icon-basicelaboration-message-dots icon-2x"></i><br />
                <h6 class="u-opacity70 u-mt10">ABOUT US</h6>
                <em><strong>
                  How can we<br />
                  be of help
                </em></strong>
              </a>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
              <a href="tradedirectory.php" class="u-block">
                <i class="icon icon-basicelaboration-folder-search icon-2x"></i><br />
                <h6 class="u-opacity70 u-mt10">TRADE DIRECTORY</h6>
                <em><strong>
                  Browse the<br />
                  business network
                </em></strong>
              </a>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
              <a href="businessinfo.php" class="u-block">
                <i class="icon icon-basic-signs icon-2x"></i><br />
                <h6 class="u-opacity70 u-mt10">BUSINESS INFO</h6>
                <em><strong>
                  Doing Business<br />
                  in Turkey
                </em></strong>
                </em>
              </a>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
              <a href="faqcontact.php" class="u-block">
                <i class="icon icon-basic-question icon-2x"></i><br />
                <h6 class="u-opacity70 u-mt10">FAQ & CONTACT</h6>
                <em><strong>
                  Questions and<br />
                  getting in touch
                </em></strong>
              </a>
            </div>
          </div>
        </div>

      </div>
    
    </section>

    <!-- Featured event banner -->
    <!-- Remove when event has ended -->
    <section id="featured_event" class="bg-bluemedium c-white">
      <div class="row row-nopadding row-full u-mt20">

        <div class="col-sm-10 col-sm-push-2">

          <div class="row row-full row-nopadding content-small">
            <div class="col-sm-9">
              <h5 class="u-opacity50 u-mb15">FEATURED EVENT</h5>
              <a href="event-htbt.php"><h3 class="c-white">Holland-Turkey Business Tour 2016</h3></a>
              <p class="c-white u-opacity70"><em>Informatiebijeenkomsten en handelsmissies over kansen in de Turkse markt op diverse locaties in Nederland en Turkije. Van 1 tot 15 mei 2016.</em></p>
            </div>
            <div class="col-sm-3">
            <a href="event-htbt.php" class="btn btn-lg btn-primary u-floatright u-mt30 u-mb10">MEER INFO</a>
            </div>
          </div>

        </div>

        <a href="event-htbt.php" class="col-sm-2 col-sm-pull-10 u-bgcover u-height190" style="background-image: url('images/event-htbt.jpg');">
        </a>
        
        <!-- If no featured event is present -->
        <!-- <div class="col-md-8"> -->
        <!-- If featured event -->
      </div>
    </section>

    <section id="intro" class="u-hasHiddenContent">
      <div class="row row-internalpadding row-full">
        <div class="col-md-8">
          <div class="bg-greylight content">

            <p class="text-tagline text-large">Holland Turkey Trade is the online platform for Dutch companies doing business in Turkey. </p>
            <a href="javascript:void(0)" onclick="javascript:showHiddenContent(this);" class="btn btn-lg btn-outline u-mt20">READ MORE</a>

            <div class="row row-internalpadding u-mt40 u-hiddenContent">
              <div class="col-md-6">
                <p><big>The site is an initiative of the Dutch Economic Diplomacy Team in Turkey with the aim to stimulate business and networking relations among the Dutch business community in Turkey.</big></p>
              </div>
              <div class="col-md-6">
                <p>This initiative of the Dutch Economic Diplomacy Team that has been operational since January 2010, will help you on your way of exploring the market by sharing knowledge and information on doing business in Turkey, providing networks and showing relevant news and upcoming events from Turkey and the NL.</p>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-4">
          <div class="content-small bg-white">
            <a href="https://twitter.com/NLeconomyinTR" target="_blank"><h4 class="c-greymedium u-mt10 u-mb20">NTTD on Twitter  <i class="icon icon-arrows-circle-left icon-1x u-floatright"></i></h4></a>
            <div id="twitterfeed" class="twitterfeed">
              <div class="u-pv20 u-mb20 u-aligncenter c-greymedium">Loading @NLEconomy's tweets...</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="aboutus" class="bg-greylight u-pv8vw">

      <div class="slide" style="background-image: url('images/banner_aboutus.jpg');" data-prlx-offset="0"></div>

      <div class="row">
        <div class="col-xs-12 col-md-2">
          <div class="u-mv20 u-aligncenter">
            <i class="icon icon-basic-question icon-4x"></i>
          </div>
        </div>
        <div class="col-md-8">
          <p class="text-large c-bluemedium"><em><small>How we can help you</small></em></p>
          <p class="text-tagline text-large u-mt30">
            <small>
              The Economic Network of the Netherlands in Turkey with its trade and investment staff can help Dutch companies in several ways.
            </small>
          </p>
          <div class="u-alignright u-mt20">
            <span class="text-btntxt c-orange u-mh10">READ MORE ABOUT</span>
            <a href="aboutus.php" class="btn btn-lg btn-primary btn-pointright">OUR SERVICES</a>
          </div>
        </div>
      </div>

    </section>

    <section id="tradedirectory" class="bg-greylight u-pv8vw">

      <div class="slide bg-bluesoft" style="background-image: url('images/banner_tradedir.jpg');"></div>

      <div class="row">
        <div class="col-xs-12 col-md-2">
          <div class="u-mv20 u-aligncenter">
            <i class="icon icon-basicelaboration-folder-search icon-4x c-white"></i>
          </div>
        </div>
        <div class="col-md-8">
          <p class="text-large"><em><small>Enlist your company to our trade directory</small></em></p>
          <p class="text-tagline text-large c-white u-mt15">
            <small>
              Netherlands Turkey Trade Directory is an online network where Dutch companies in Turkey and Turkish companies that have commercial links with the Netherlands are displayed.
            </small>
          </p>
          <div class="u-alignright u-mt20">
            <a href="tradedirectory-register.php" class="btn btn-whiteoutline">ENLIST</a>
            <span class="text-btntxt c-white u-mh10">YOUR COMPANY OR BROWSE THE</span>
            <a href="tradedirectory.php" class="btn btn-lg btn-primary btn-pointright">TRADE DIRECTORY</a>
          </div>
        </div>
      </div>

    </section>

    <section id="businessinfo" class="bg-greylight u-pv8vw">

      <div class="slide bg-orange" style="background-image: url('images/banner_businessinfo.jpg');"></div>

      <div class="row">
        <div class="col-xs-12 col-md-2">
          <div class="c-white u-mv20 u-aligncenter">
            <i class="icon icon-basic-signs icon-4x"></i>
          </div>
        </div>
        <div class="col-md-8">
          <p class="text-large c-white"><em><small>Considering to expand your business in Turkey?</small></em></p>
          <p class="text-tagline text-large c-white u-mt30">
            <small class="u-block u-mt20"><small>
              Our team members at the Embassy in Ankara, the Consulate in Istanbul and NBSO in Izmir are here to help you to get started.
            </small></small>
          </p>
          <div class="u-alignright u-mt20">
            <span class="text-btntxt c-white u-mh10">ALL THE RELEVANT INFORMATION ABOUT</span>
            <a href="businessinfo.php" class="btn btn-lg btn-secondary btn-pointright">DOING BUSINESS IN TURKEY</a>
          </div>
        </div>
      </div>
    </section>

    <section class="u-mb0">
      <div class="row row-full row-internalpadding">
        <div class="col-sm-6 u-heightcompare">
          <div id="news" class="u-border content u-mb20">

            <h3 class="u-mb30 c-bluesoft">News</h3>

            <ul class="list list-unpadded u-mb30">
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Holland-Turkey Business Tour 2015</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Trade Mission to Bursa</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>The new “e-Residence” system is introduced by the Republic of Turkey Ministry of Interior Directorate General of Migration Management</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
            </ul>

            <a href="news-list.php" class="btn btn-sm btn-greyoutline u-mt20">
              ALL NEWS
              <i class="icon icon-arrows-right icon-15x u-floatright"></i>
            </a>

          </div>
        </div>
        <div class="col-sm-6">
          <div id="events" class="u-border content u-mb20">

            <h3 class="u-mb30 c-bluesoft">Events</h3>

            <ul class="list list-unpadded u-mb30">
              <li>
                <a href="event-htbt.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Subconist & Automotive</h4>
                  <small>25-28 November 2015, Wednesday<br />Machinery, automotive metaal working, subcontracting</small>
                </a>
              </li>
              <li>
                <a href="event-htbt.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Logi Trans</h4>
                  <small>20-22 November 2015, Friday<br />Transport and logistics</small>
                </a>
              </li>
              <li>
                <a href="event-htbt.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>TurkChem</h4>
                  <small>16-18 October 2015, Friday<br />Chemical industry</small>
                </a>
              </li>
            </ul>

            <a href="news-list.php" class="btn btn-sm btn-greyoutline u-mt20">
              ALL EVENTS
              <i class="icon icon-arrows-right icon-15x u-floatright"></i>
            </a>

          </div>
        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>