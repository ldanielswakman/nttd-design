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
        <div class="slide" style="background-image: url('images/bosphorus_bridge_orange.jpg');"></div>
      </div>

      <div class="row u-pv120">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basic-signs icon-5x u-block c-white u-mb40"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity50">BUSINESS INFO</h4>
          <em class="text-huge">Doing Business in Turkey</em>
        </div>
      </div>

      <div class="u-aligncenter">
        <ul class="tabs clearfix">
          <li class="active">
            <a href="businessinfo.php">
              Bilateral Trade
            </a>
          </li>
          <li class="u-opacity50">
            <a href="businessinfo-busop.php">
              Business opportunities (coming)
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
          <li>
            <a href="businessinfo-dodont.php">
              Do’s and Don’ts
            </a>
          </li>
          <li>
            <a href="businessinfo-htbt.php">
              HTBT 2015
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
            <h3 class="u-mb20">Bilateral Trade</h3>
            <p class="u-mb40">If you’re looking for more information on bilateral trade and Turkish economy, please contact our team at the Economic & Commercial Departments.</p>

            <figure>
              <img src="images/content/bilateral_trade.png" alt="" />
            </figure>

            <h4 class="u-mt60">Further reading</h4>

            <div class="row row-full row-nopadding u-mv10">

              <div class="col-md-4 col-sm-6 u-mv10">
                <a href="an_example_attachment.pdf" target="_blank" class="btn btn-attachment">
                  <div class="title">Foreign Direct Investments in Turkey</div>
                  <div class="data">PDF, 3.1 MB</div>
                </a>
              </div>
              <div class="col-md-4 col-sm-6 u-mv10">
                <a href="an_example_attachment.doc" target="_blank" class="btn btn-attachment">
                  <div class="title">Economic Outlook June 2015 - Ministry of Economy</div>
                  <div class="data">DOC, 817 KB</div>
                </a>
              </div>

            </div>

          </div>
        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>