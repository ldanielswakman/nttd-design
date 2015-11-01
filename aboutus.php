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

      <div class="slides">
        <div class="bxslider">
          <div class="slide" style="background-image: url('images/banner_aboutus.jpg');" data-prlx-offset="-300"></div>
        </div>
      </div>

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
          <li class="active">
            <a href="aboutus.php">
              Who we are
            </a>
          </li>
          <li>
            <a href="aboutus-team.php">
              Our Team
            </a>
          </li>
          <li>
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
        </div>
        <div class="col-sm-9">
          <div class="content-small">

            <p><big><em>HollandTurkeyTrade is the online platform for Dutch companies doing business in Turkey. The site is an initiative of the Dutch Economic Diplomacy Team in Turkey.</em></big></p>
            <p>The Team consists of the Dutch Embassy in Ankara, the Consulate General in Istanbul, the Netherlands Business Support Office (NSBO) in Izmir and Netherlands Foreign Investment Agency Istanbul. The website offers practical information on topics that may be of interest in exploring the Turkish market, starting a business in Turkey or strengthen your position in the Turkish market. Additionally HollandTurkeyTrade.com provides information on the various sectors in Turkey and the opportunities that lie ahead for Dutch companies.</p>

          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-3 u-static">
          <div class="content-small box-sticky">
            [image]
          </div>
        </div>
        <div class="col-sm-9">
          <div class="content-small">

            <h3>Embassy – Ankara</h3>

            <p>The Economic Department of the Embassy in Ankara, responsible for the whole of Turkey, keeps track of the Turkish macro-economic and trade policy issues. In that capacity they maintain contacts with government authorities, the European Commission and IMF.</p>
            <p>Sector specific questions about agri-food, horticulture, defense, energy, maritime and water belong to the field of the Economic Team in Ankara. Do you have an innovative product or service that you want to introduce to the Turkish market or do you want to explore the Technology and Science sector in Turkey? Our Innovation, Technology and Science advisor will provide you of the information to accomplish this.</p>

          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-3 u-static">
          <div class="content-small box-sticky">
            [image]
          </div>
        </div>
        <div class="col-sm-9">
          <div class="content-small">

            <h3>Consulate – Istanbul</h3>

            <p>The Economic Department of the Embassy in Ankara, responsible for the whole of Turkey, keeps track of the Turkish macro-economic and trade policy issues. In that capacity they maintain contacts with government authorities, the European Commission and IMF.</p>
            <p>Sector specific questions about agri-food, horticulture, defense, energy, maritime and water belong to the field of the Economic Team in Ankara. Do you have an innovative product or service that you want to introduce to the Turkish market or do you want to explore the Technology and Science sector in Turkey? Our Innovation, Technology and Science advisor will provide you of the information to accomplish this.</p>

          </div>
        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>