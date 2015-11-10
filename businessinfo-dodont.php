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
          <li>
            <a href="businessinfo-secin.php">
              Sectoral Information
            </a>
          </li>
          <li>
            <a href="businessinfo-regin.php">
              Regional Information
            </a>
          </li>
          <li class="active">
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
          <?php include('components/sticky-box.php'); ?>
        </div>
        <div class="col-sm-9">
          <div class="content-small">

            <h2 class="u-mb20">Do's and Don'ts</h2>
            <p><big><em>Are you aware of the Turkish Business Culture?</em></big></p>

            <p class="u-mb30">Although Turks and Dutch’s have a long history of diplomacy & bilateral trade, there are some cultural differences that you need to be aware of in order to be successful in the Turkish market. Check the report by ING & Turkije Instituut- Cultural Differences in Doing Business in Turkey.</p>

            <div class="figure">
              <img src="images/content/dodonts.png" alt="" />
            </div>

          </div>
        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>