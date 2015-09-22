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
    $header_bg = 'orange';
    $header_quicklinks = true;
    include('components/header.php')
    ?>

    <section id="intro_banner">

      <div class="header-placeholder u-relative"></div>

      <div class="slides">
        <div class="bxslider">
          <div class="slide" style="background-image: url('images/bosphorus_bridge_orange.jpg');"></div>
        </div>
      </div>

      <div class="row u-pv4vw">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basic-question icon-5x u-block c-white u-mb40 u-mt10"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity50">ABOUT US</h4>
          <em class="text-huge">The team</em>
        </div>
      </div>

      <div class="u-aligncenter">
        <ul class="tabs clearfix">
          <li>
            <a href="aboutus.php">
              Who We Are
            </a>
          </li>
          <li class="active">
            <a href="aboutus.php">
              Our Team
            </a>
          </li>
          <li>
            <a href="aboutus">
              Our Services
            </a>
          </li>
        </ul>
      </div>

    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-3 u-static">
          <div class="content-small box-sticky">
            <h4>Embassy of the Kingdom of the Netherlands in Ankara</h4>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="content-small">

            <h5 class="c-orange">Commercial and Economic Department</h5>

            <div class="row row-internalpadding u-mv30">

              <div class="col-sm-6">
                <div class="team-member u-mb20 u-pv20 clearfix">
                  <div class="team-member-image u-floatleft u-mh20 u-mb20" style="background-image: url('images/content/meric_uces.png');">
                  </div>
                  <h4>Meric Uces</h5>
                  <em class="u-block">Project and Marketing Assistant</em>
                  <p class="text-small c-bluesoft u-mt10">
                      <a href="mailto:email@example.com">email@example.com</a><br />
                      0212 8189583
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="team-member u-mb20 u-pv20 clearfix">
                  <div class="team-member-image u-floatleft u-mh20 u-mb20" style="background-image: url('images/content/h_jonkman.jpg');">
                  </div>
                  <h4>Hester Jonkman</h5>
                  <em class="u-block">Deputy Consul-General and Head of Commercial and Economic Department</em>
                  <p class="text-small c-bluesoft u-mt10">
                      <a href="mailto:email@example.com">email@example.com</a><br />
                      -
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="team-member u-mb20 u-pv20 clearfix">
                  <div class="team-member-image u-floatleft u-mh20" style="background-image: url('images/content/arife-karaosmanoglu.png');">
                  </div>
                  <h4>Arife Karaosmanoğlu</h5>
                  <em class="u-block">Country Manager</em>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-3 u-static">
          <div class="content-small box-sticky">
            <h4>Consulate-General of the Kingdom of the Netherlands in Istanbul</h4>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="content-small">

            <h5 class="c-orange">Economic department</h5>

            <div class="row row-internalpadding u-mv30">

              <div class="col-sm-6">
                <div class="team-member u-mb20 u-pv20 clearfix">
                  <div class="team-member-image u-floatleft u-mh20 u-mb20" style="background-image: url('images/content/meric_uces.png');">
                  </div>
                  <h4>Meric Uces</h5>
                  <em class="u-block">Project and Marketing Assistant</em>
                  <p class="text-small c-bluesoft u-mt10">
                      <a href="mailto:email@example.com">email@example.com</a><br />
                      0212 8189583
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="team-member u-mb20 u-pv20 clearfix">
                  <div class="team-member-image u-floatleft u-mh20 u-mb20" style="background-image: url('images/content/h_jonkman.jpg');">
                  </div>
                  <h4>Hester Jonkman</h5>
                  <em class="u-block">Deputy Consul-General and Head of Commercial and Economic Department</em>
                  <p class="text-small c-bluesoft u-mt10">
                      <a href="mailto:email@example.com">email@example.com</a><br />
                      -
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="team-member u-mb20 u-pv20 clearfix">
                  <div class="team-member-image u-floatleft u-mh20" style="background-image: url('images/content/arife-karaosmanoglu.png');">
                  </div>
                  <h4>Arife Karaosmanoğlu</h5>
                  <em class="u-block">Country Manager</em>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>