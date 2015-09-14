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
    include('components/header.php')
    ?>

    <section id="intro">

      <div class="header-placeholder u-relative"></div>

      <div class="slides">
        <div class="slide" style="background-image: url('images/maslak_soft.jpg');"></div>
      </div>

      <div class="row u-pv120">
        <div class="col-md-1 col-md-offset-2">
          <i class="icon icon-basicelaboration-folder-search icon-4x u-block c-white u-mt20"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity50">TRADE DIRECTORY</h4>
          <em style="font-size: 3em;">Browse the business network</em>
          <div>
            <div class="u-floatright u-ml20">
              <a href="#" class="btn btn-whiteoutline u-block u-mb10">More info</a>
              <a href="#" class="btn btn-whiteoutline u-block u-mb10">Join</a>
            </div>
            <p class="u-mt20">Netherlands Turkey Trade Directory will give you access to almost 250 companies which are actively trading between Turkey and the Netherlands.</p>
          </div>
        </div>
      </div>

      <div class="u-relative u-aligncenter">
        <form action="" class="u-inlineblock u-clearfix u-mv10">
          <div class="field-group u-floatleft u-mr20">
            <input class="field" type="text" placeholder="Search" />
          </div>
          <div class="field-group field-select u-floatleft u-mr20">
            <select class="field">
              <option>City...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <i class="icon icon-arrows-down icon-2x"></i>
          </div>
          <div class="field-group field-select u-floatleft u-mr20">
            <select class="field">
              <option>Sector...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <i class="icon icon-arrows-down icon-2x"></i>
          </div>
          <button type="submit" class="btn btn-white">Search</button>
        </form>
      </div>

    </section>

    <section>
      <div class="row row-full row-nopadding">

        <div class="col-md-4 col-sm-6 u-mb20">
          <a href="#" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-basic-lock icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Public administration and defence; compulsory social security</h5>
            <div class="c-greymedium">23 companies</div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 u-mb20">
          <a href="#" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-basic-settings icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Manufacturing</h5>
            <div class="c-greymedium">21 companies</div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 u-mb20">
          <a href="#" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-basic-flag2 icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Agriculture, forestry and fishing</h5>
            <div class="c-greymedium">20 companies</div>
          </a>
        </div>

        <div class="col-md-4 col-sm-6 u-mb20">
          <a href="#" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-basic-hammer icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Mining and quarrying</h5>
            <div class="c-greymedium">17 companies</div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 u-mb20">
          <a href="#" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-basic-bolt icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Electricity, gas, steam and air conditioning supply</h5>
            <div class="c-greymedium">16 companies</div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 u-mb20">
          <a href="#" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-weather-drop icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Water supply; sewerage; waste managment and remediation activities</h5>
            <div class="c-greymedium">13 companies</div>
          </a>
        </div>

        <div class="col-md-4 col-sm-6 u-mb20">
          <a href="#" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-basic-pencil-ruler icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Construction</h5>
            <div class="c-greymedium">17 companies</div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 u-mb20">
          <a href="#" class="tradedir-category clearfix">
            <div class="badge">
              <i class="icon icon-ecommerce-cart-content icon-3x c-orange"></i>
            </div>
            <h5 class="u-mt10">Wholesale and retail trade; repair of motor vehicles and motorcycles</h5>
            <div class="c-greymedium">16 companies</div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 u-mb20">
          <a href="#" class="tradedir-category clearfix">
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
