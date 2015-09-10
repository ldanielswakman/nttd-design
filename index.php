<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <?php include('components/menu.php'); ?>

    <?php include('components/header.php'); ?>

    <section class="hasSlides">

      <div class="slides">
        <ul>
          <li style="background-image: url('images/bosphorus_bridge.jpg');"></li>
          <li style="background-image: url('images/eminonu.jpg');"></li>
          <li style="background-image: url('images/palais.jpg');"></li>
        </ul>
      </div>

      <div class="section-content">

        <div class="header-placeholder u-relative">
          <a href="javascript:toggleMenu();" class="u-pintopright u-pv30 u-pr80">MENU</a>
        </div>

        <div class="row">
          <div class="col-xs-12 u-aligncenter">

            <p class="test">Expand your business to new horizons.</p>

            <a href="#intro" class="c-white u-inlineblock u-pa20 u-mt10"><i class="icon icon-arrows-down icon-5x"></i></a>

          </div>
        </div>

        <nav class="nav-verbose u-pinbottom u-fullwidth">
          <div class="row">
            <div class="col-md-3 u-pv60">
              <img src="images/holland_logo.svg" alt="" />
            </div>
            <div class="col-md-2 u-pv40">
              <i class="icon icon-arrows-shrink icon-2x"></i><br />
              <em><strong>
                Doing Business<br />
                in Turkey
              </em></strong>
            </div>
            <div class="col-md-2 u-pv40">
              <i class="icon icon-arrows-shrink icon-2x"></i><br />
              <em><strong>
                Browse the<br />
                business network
              </em></strong>
            </div>
            <div class="col-md-2 u-pv40">
              <i class="icon icon-arrows-shrink icon-2x"></i><br />
              <em><strong>
                How can we<br />
                be of help
              </em></strong>
            </div>
            <div class="col-md-2 u-pv40">
              <i class="icon icon-arrows-shrink icon-2x"></i><br />
              <em><strong>
                Questions and<br />
                getting in touch
              </em></strong>
            </div>
          </div>
        </nav>

      </div>
    
    </section>

    <section id="intro" class="bg-greylight u-pv60">
      <div class="row">
        <div class="col-md-9">
          <p class="test2">Holland Turkey Trade is the online platform for Dutch companies doing business in Turkey. </p>
        </div>
        <div class="col-md-3">
          <a href="javascript:void(0)" onclick="javascript:expandSection();" class="btn btn-outline u-mt20">READ MORE</a>
        </div>
      </div>
    </section>

    <section id="businessinfo" class="bg-greylight u-pv120">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-9">
          <p class="test2">
            Deciding to expand your business in Turkey?
            <small class="u-block u-mt20"><small>
              Our team members at the Embassy in Ankara, the Consulate in Istanbul and NBSO in Izmir are here to help you begin.
            </small></small>
          </p>
        </div>
      </div>
    </section>

    <section id="tradedirectory" class="bg-greylight u-pv120">
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-9">
          <p class="test2">
            <small>
              Netherlands Turkey Trade Directory is an online network where Dutch companies in Turkey and Turkish companies that have commercial links with the Netherlands are displayed.
            </small>
          </p>
        </div>
      </div>
    </section>

    <section id="aboutus" class="bg-greylight u-pv120">
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-7">
          <p class="test2">
            <small>
              The Economic Network of the Netherlands in Turkey with its trade and investment staff can help Dutch companies in several ways.
            </small>
          </p>
        </div>
      </div>
    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-6">
          <div id="news" class="u-border u-pa60">
            <h3>News</h3>
          </div>
        </div>
        <div class="col-sm-6">
          <div id="events" class="u-border u-pa60">
            <h3>Events</h3>
          </div>
        </div>
      </div>
    </section>

    <footer class="u-pv40">
      <?php include('components/sitemap.php'); ?>
    </footer>

  </body>

</html>