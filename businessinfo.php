<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <?php
    // setting current page parameter
    $curpage = 'businessinfo';
    include('components/nav.php');
    // setting optional parameters for header
    $header_bg = 'orange';
    $header_quicklinks = true;
    include('components/header.php')
    ?>

    <section id="intro">

      <div class="header-placeholder u-relative"></div>

      <div class="slides">
        <div class="slide" style="background-image: url('images/bosphorus_bridge_orange.jpg');"></div>
      </div>

      <div class="row u-pv120">
        <div class="col-md-1 col-md-offset-2">
          <i class="icon icon-basic-signs icon-5x u-block c-white"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity50">BUSINESS INFO</h4>
          <em style="font-size: 3em;">Doing Business in Turkey</em>
          <!-- <p class="test2 c-white">
            <small>
              Netherlands Turkey Trade Directory is an online network where Dutch companies in Turkey and Turkish companies that have commercial links with the Netherlands are displayed.
            </small>
          </p> -->
        </div>
      </div>

      <div class="u-aligncenter">
        <ul class="tabs clearfix">
          <li class="active">
            <a href="#">
              Bilateral Trade
            </a>
          </li>
          <li>
            <a href="#">
              Bilateral Trade
            </a>
          </li>
          <li>
            <a href="#">
              Bilateral Trade
            </a>
          </li>
          <li>
            <a href="#">
              Bilateral Trade
            </a>
          </li>
          <li>
            <a href="#">
              Bilateral Trade
            </a>
          </li>
        </ul>
      </div>

    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-3">
          <div class="bg-white content-small box-sticky">
            <p class="c-orange">
              Would you like to explore and experience business regions in Turkey?
            </p>
            <a href="javascript:void(0)" class="btn btn-outline btn-reveal u-mt20">Join our HTBT 2015!</a>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="content-small">
            <h3 class="u-mb20">Bilateral Trade</h3>
            <p class="u-mb40">If you’re looking for more information on bilateral trade and Turkish economy, please contact our team at the Economic & Commercial Departments.</p>

            <figure>
              <img src="images/content/bilateral_trade.png" alt="" />
            </figure>

            <div class="row row-full u-mv30">

              <div class="col-md-4 col-xs-6">
                <a href="an_example_attachment.pdf" class="btn btn-attachment">
                  download PDF
                </a>
              </div>
              <div class="col-md-4 col-xs-6">
                <a href="an_example_attachment.doc" class="btn btn-attachment">
                  download PDF
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