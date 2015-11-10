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

            <p>The Economic and the Agricultural Department of the Netherlands Embassy in Ankara together with the Commercial &Economic Department of the Consulate General in Istanbul and Netherlands Business Support Office in Izmir assist Dutch companies looking for market opportunities in Turkey. We do this by providing reliable market <a href="#service_info">information</a>, answering specific trade <a href="#service_knowlegde">questions</a> and offering a local <a href="#service_network">network</a> and <a href="#service_programs">exclusive programs</a> like the Palais de Hollande and Orange Carpet Facility. We also work to actively identify trade opportunities and possible investment opportunities for Dutch companies in Turkey.</p>

            <div class="row row-internalpadding u-mv30">
              <div id="service_info" class="col-sm-6 u-mv20">
                <i class="icon icon-basic-info icon-3x u-block u-mb20 c-orange"></i>
                <h4 class="c-orange">Information</h4>
                <p>Political and economic developments in Turkey, innovation and R&D trends, lists of suppliers, importers, etc., Tailor made services like business partner scan, advice on establishing your business in TR.</p>
              </div>
              <div id="serviceknowledge" class="col-sm-6 u-mv20">
                <i class="icon icon-basic-lightbulb icon-3x u-block u-mb20 c-orange"></i>
                <h4 class="c-orange">Knowledge</h4>
                <p>Organizing seminars on specific topics, Advice on subsidies and programs of the Dutch Govt, Assistance in resolving trade and investment disputes, Advice on customs related issues, Advice on CSR in TR,</p>
              </div>
              <div id="service_network" class="col-sm-6 u-mv20">
                <i class="icon icon-basic-share icon-3x u-block u-mb20 c-orange"></i>
                <h4 class="c-orange">Network</h4>
                <ul>
                  <li>Organizing regional Trade Mission in Turkey</li>
                  <li>networking receptions</li>
                  <li>Access to economic and commercial contact in TR</li>
                  <li>Assistance in contact with Turkish authorities</li>
                </ul>
              </div>
              <div id="service_programs" class="col-sm-6 u-mv20">
                <i class="icon icon-basic-star icon-3x u-block u-mb20 c-orange"></i>
                <h4 class="c-orange">Exclusive Programs</h4>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>