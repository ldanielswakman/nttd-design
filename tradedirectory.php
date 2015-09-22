<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php
    // setting current page parameter
    $curpage = 'tradedirectory';
    include('components/nav.php');
    // setting optional parameters for header
    $header_bg = 'orange';
    $header_quicklinks = true;
    include('components/header.php');
    include('components/dialog.php');
    ?>

    <section id="intro_banner">

      <div class="header-placeholder u-relative"></div>

      <div class="slides">
        <div class="bxslider">
          <div class="slide" style="background-image: url('images/maslak_soft.jpg');"></div>
        </div>
      </div>

      <div class="row u-pv4vw u-hasHiddenContent">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basicelaboration-folder-search icon-4x u-block c-white u-mv20"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity50">TRADE DIRECTORY</h4>
          <em class="text-huge">Browse the business network</em>
          <p class="u-hiddenContent"><strong><em>A great online Business-to-Business networking tool that came to life as an initiative of the Dutch Economic Network in 2010!</em></strong></p>
          <p class="u-mt20">Netherlands Turkey Trade Directory will give you access to almost 250 companies which are actively trading between Turkey and the Netherlands.<span class="u-hiddenContent">The directory consists of Turkish companies that have close business ties with the Netherlands, Dutch companies based in the Netherlands that have commercial activities with Turkey and Dutch companies established in Turkey.</span></p>
          <p class="u-hiddenContent">Netherlands Turkey Trade Directory entails detailed member profiles which include a wide range of information such as executive names, contact numbers, addresses, sectoral involvement, company types and number of employees.</p>
          <a href="javascript:void(0)" onclick="showHiddenContent($(this))" class="btn btn-sm btn-whiteoutline u-mt20 u-mr10">
            More info
            <i class="icon icon-arrows-plus icon-15x u-floatright"></i>
          </a>
          <a href="#sectors" class="btn btn-sm btn-whiteoutline u-mt20">
            Start browsing
            <i class="icon icon-arrows-down icon-15x u-floatright"></i>
          </a>
        </div>
      </div>

      <div class="u-relative u-aligncenter">
        <?php include('components/tradedir-search.php'); ?>
      </div>

    </section>

    <section id="sectors">
      <div class="row row-full row-internalpadding">

        <div class="col-md-4 col-sm-6">
          <a href="tradedirectory-cat.php" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-basic-lock icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Public administration and defence; compulsory social security</h5>
            <div class="c-greymedium">23 companies</div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="tradedirectory-cat.php" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-basic-settings icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Manufacturing</h5>
            <div class="c-greymedium">21 companies</div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="tradedirectory-cat.php" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-basic-flag2 icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Agriculture, forestry and fishing</h5>
            <div class="c-greymedium">20 companies</div>
          </a>
        </div>

        <div class="col-md-4 col-sm-6">
          <a href="tradedirectory-cat.php" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-basic-hammer icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Mining and quarrying</h5>
            <div class="c-greymedium">17 companies</div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="tradedirectory-cat.php" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-basic-bolt icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Electricity, gas, steam and air conditioning supply</h5>
            <div class="c-greymedium">16 companies</div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="tradedirectory-cat.php" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-weather-drop icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Water supply; sewerage; waste managment and remediation activities</h5>
            <div class="c-greymedium">13 companies</div>
          </a>
        </div>

        <div class="col-md-4 col-sm-6">
          <a href="tradedirectory-cat.php" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-basic-pencil-ruler icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Construction</h5>
            <div class="c-greymedium">17 companies</div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="tradedirectory-cat.php" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-ecommerce-cart-content icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Wholesale and retail trade; repair of motor vehicles and motorcycles</h5>
            <div class="c-greymedium">16 companies</div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="tradedirectory-cat.php" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-arrows-switch-horizontal icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Transporting and storage</h5>
            <div class="c-greymedium">13 companies</div>
          </a>
        </div>
      </div>

    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>
