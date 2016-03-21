<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php
    // setting current page parameter
    $curpage = 'faqcontact';
    include('components/nav.php');
    // setting optional parameters for header
    $header_bg = 'orange';
    $header_quicklinks = true;
    include('components/header.php')
    ?>

    <section id="intro_banner">

      <div class="header-placeholder u-relative"></div>

      <div class="slide" style="background-image: url('images/banner_faqcontact.jpg');" data-prlx-offset="-150"></div>

      <div class="row u-pv4vw">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basic-mail icon-5x u-block c-white u-mb40 u-mt10"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity70">FAQ & CONTACT</h4>
          <em class="text-huge">Get in touch</em>
        </div>
      </div>

      <div class="u-aligncenter">
        <ul class="tabs clearfix">
          <li>
            <a href="faqcontact.php">
              Frequently Asked Questions
            </a>
          </li>
          <li class="active">
            <a href="faqcontact-jurismap.php">
              Jurisdictional Map
            </a>
          </li>
          <li>
            <a href="faqcontact-address.php">
              Address information
            </a>
          </li>
          <li>
            <a href="faqcontact-disclaimer.php">
              Disclaimer
            </a>
          </li>
          <li>
            <a href="faqcontact-contact.php">
              Contact us
            </a>
          </li>
        </ul>
      </div>

    </section>

    <section>
      <div class="row row-full row-internalpadding">
        <div class="col-sm-3 u-static">
          <div class="content-small box-sticky svg-map__legend">
            <a data-map-target="region1" href="faqcontact-address.php#embassy" class="u-block u-mb15 c-orange">Embassy of the Kingdom of the Netherlands in Ankara</a>
            <a data-map-target="region2" href="faqcontact-address.php#consulate" class="u-block u-mb15 c-orange">Consulate General of the Kingdom of the Netherlands in İstanbul</a>
            <a data-map-target="region3" href="faqcontact-address.php#businesssupport" class="u-block u-mb15 c-orange">Netherlands Business Support Office in İzmir</a>
          </div>
        </div>
        <div class="col-sm-9">

          <div class="content content-small">

            <h3>Jurisdictional map</h3>

            <div class="svg-map svg-map--jurisdictional u-mv20">
              <?php include('components/map.php'); ?>
            </div>
            
          </div>

        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>