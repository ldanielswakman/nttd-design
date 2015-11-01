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

      <div class="slides">
        <div class="bxslider">
          <div class="slide" style="background-image: url('images/banner_businessinfo.jpg');"></div>
        </div>
      </div>

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
          <li>
            <a href="businessinfo-secin.php">
              Sectoral Information
            </a>
          </li>
          <li class="active">
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
      <div class="row row-full">
        <div class="col-sm-3 u-static">
          <div class="content-small box-sticky">
            <a href="businessinfo-regin-adana.php" class="u-block u-mb15 c-darkblue">Adana</a>
            <a href="businessinfo-regin-adana.php" class="u-block u-mb15 c-orange">Antalya</a>
            <a href="businessinfo-regin-adana.php" class="u-block u-mb15 c-orange">Bursa</a>
            <a href="businessinfo-regin-adana.php" class="u-block u-mb15 c-orange">İstanbul</a>
            <a href="businessinfo-regin-adana.php" class="u-block u-mb15 c-orange">İzmir</a>
            <a href="businessinfo-regin-adana.php" class="u-block u-mb15 c-orange">Kocaeli</a>
            <a href="businessinfo-regin-adana.php" class="u-block u-mb15 c-orange">Konya</a>
            <a href="businessinfo-regin-adana.php" class="u-block u-mb15 c-orange">Mersin</a>
            <a href="businessinfo-regin-adana.php" class="u-block u-mb15 c-orange">Samsun</a>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="content-small">

            <h2 class="u-mb20">Adana</h2>

            <figure>
              <img src="images/content/Adana.png" alt="" />
            </figure>

          </div>
        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>