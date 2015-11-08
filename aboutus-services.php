<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php
    // setting current page parameter
    $curpage = 'aboutus';
    include('components/nav.php');
    // setting optional parameters for header
    $header_bg = 'bluesoft';
    $header_quicklinks = true;
    include('components/header.php')
    ?>

    <section id="intro_banner">

      <div class="header-placeholder u-relative"></div>

      <div class="slide" style="background-image: url('images/banner_aboutus.jpg');" data-prlx-offset="-200"></div>

      <div class="row u-pv4vw">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basic-question icon-5x u-block u-mb40 u-mt10"></i>
        </div>
        <div class="col-md-8">
          <h4 class="u-opacity70">ABOUT US</h4>
          <em class="text-huge">How can we be of help?</em>
        </div>
      </div>

      <div class="u-aligncenter">
        <ul class="tabs tabs-ondark clearfix">
          <li>
            <a href="aboutus.php">
              Who We Are
            </a>
          </li>
          <li>
            <a href="aboutus-team.php">
              Our Team
            </a>
          </li>
          <li class="active">
            <a href="aboutus-services.php">
              Our Services
            </a>
          </li>
        </ul>
      </div>

    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-3 u-static">
          <?php include('components/sticky-box.php'); ?>
        </div>
        <div class="col-sm-9">
          <div class="content-small">

            <h3>Our services</h3>

            <p>The Economic and the Agricultural Department of the Netherlands Embassy in Ankara together with the Commercial &Economic Department of the Consulate General in Istanbul and Netherlands Business Support Office in Izmir assist Dutch companies looking for market opportunities in Turkey. We do this by providing reliable market information, answering specific trade questions and offering a local network and exclusive programs like the Palais de Hollande and Orange Carpet Facility. We also work to actively identify trade opportunities and possible investment opportunities for Dutch companies in Turkey.</p>

            <h4 class="u-mt20">Information</h4>

            <ul>
              <li>Political and economic developments in Turkey</li>
              <li>innovation and R&D trends</li>
              <li>lists of suppliers</li>
              <li>importers</li>
              <li>etc.</li>
              <li>Tailor made services like business partner scan</li>
              <li>advice on establishing your business in TR</li>
            </ul>

          </div>
        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>