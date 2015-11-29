<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php
    // setting current page parameter
    $curpage = 'businessinfo';
    include('components/nav.php');
    // setting optional parameters for header
    $header_bg = 'orange';
    $header_quicklinks = true;
    include('components/header.php')
    ?>

    <section id="intro_banner">

      <div class="header-placeholder u-relative"></div>

      <div class="slide" style="background-image: url('images/banner_businessinfo.jpg');"></div>

      <div class="row u-pv4vw">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basic-signs icon-5x u-block c-white u-mb40"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity70">BUSINESS INFO</h4>
          <em class="text-huge">Doing Business in Turkey</em>
        </div>
      </div>

      <div class="u-aligncenter">
        <ul class="tabs clearfix">
          <li>
            <a href="businessinfo.php">
              Bilateral Trade
            </a>
          </li>
          <li>
            <a href="businessinfo-busop.php">
              Business opportunities
            </a>
          </li>
          <li class="active">
            <a href="businessinfo-secin.php">
              Sectoral Information
            </a>
          </li>
          <li>
            <a href="businessinfo-regin.php">
              Regional Information
            </a>
          </li>
          <li>
            <a href="businessinfo-dodont.php">
              Do’s and Don’ts
            </a>
          </li>
        </ul>
      </div>

    </section>

    <section>
      <div class="row row-full row-internalpadding">
        <div class="col-md-8 col-sm-offset-2">
          <div class="content-small">

            <h2 class="u-mb20">Sectoral Information</h2>
            <p class="u-alignjustify"><big><em>The Turkish economy offers opportunies within a wide variety of sectors. We selected the sectors that are prominent and leading in the field of export of Turkey. These are also the sectors in which Dutch companies invested the most.</em></big></p>

          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="row row-full row-internalpadding">

        <div class="col-md-3 col-sm-4 col-xs-6">
          <a href="businessinfo-secin-agri.php" class="u-block bg-white u-mb20">

            <div class="figure-card" style="background-image: url('images/content/FOOD.png');"></div>

            <div class="u-pa20">
              <h3 class="u-mb10">Agri-Food Industry</h3>
              <p><em>[tagline about sector]</em></p>
            </div>

          </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <a href="businessinfo-secin-agri.php" class="u-block bg-white u-mb20">

            <div class="figure-card" style="background-image: url('images/content/HEALTH.png');"></div>

            <div class="u-pa20">
              <h3 class="u-mb10">Health Industry</h3>
              <p><em>[tagline about sector]</em></p>
            </div>

          </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <a href="businessinfo-secin-agri.php" class="u-block bg-white u-mb20">

            <div class="figure-card" style="background-image: url('images/content/AGRO.png');"></div>

            <div class="u-pa20">
              <h3 class="u-mb10">Agri-Food Industry</h3>
              <p><em>[tagline about sector]</em></p>
            </div>

          </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <a href="businessinfo-secin-agri.php" class="u-block bg-white u-mb20">

            <div class="figure-card" style="background-image: url('images/content/HEALTH.png');"></div>

            <div class="u-pa20">
              <h3 class="u-mb10">Health Industry</h3>
              <p><em>[tagline about sector]</em></p>
            </div>

          </a>
        </div>

      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>