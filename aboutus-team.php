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
          <li>
            <a href="aboutus.php">
              Who We Are
            </a>
          </li>
          <li class="active">
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
          <?php include('components/sticky-box.php'); ?>
        </div>
        <div class="col-sm-9">
          <div class="content-small">

            <h3>Embassy of the Kingdom of the Netherlands in Ankara</h3>

            <h4 class="c-orange u-mt20">Commercial and Economic Department</h4>

            <div class="row row-internalpadding u-mv30">

              <div class="col-md-6">
                <div class="team-member u-mb20 u-pv20 clearfix">
                  <div class="team-member-image" style="background-image: url('images/content/arife-karaosmanoglu.png');">
                  </div>
                  <h4 title="Arife Karaosmanoğlu">Arife Karaosmanoğlu</h4>
                  <em class="u-block" title="Country Manager">Country Manager</em>
                  <p class="text-small c-bluesoft u-mt10">
                    ...<br />
                    ...
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="team-member u-mb20 u-pv20 clearfix">
                  <div class="team-member-image" style="background-image: url('images/content/meric_uces.png');">
                  </div>
                  <h4 title="Meric Uces">Meric Uces</h4>
                  <em class="u-block" title="Project and Marketing Assistant">Project and Marketing Assistant</em>
                  <p class="text-small c-bluesoft u-mt10">
                      <a href="mailto:email@example.com">email@example.com</a><br />
                      0212 8189583
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="team-member u-mb20 u-pv20 clearfix">
                  <div class="team-member-image" style="background-image: url('images/content/h_jonkman.jpg');">
                  </div>
                  <h4 title="Hester Jonkman">Hester Jonkman</h4>
                  <em class="u-block" title="Deputy Consul-General and Head of Commercial and Economic Department">Deputy Consul-General and Head of Commercial and Economic Department</em>
                  <p class="text-small c-bluesoft u-mt10">
                      <a href="mailto:email@example.com">email@example.com</a><br />
                      -
                  </p>
                </div>
              </div>

            </div>

            <h3>Consulate-General of the Kingdom of the Netherlands in Istanbul</h3>

            <h4 class="c-orange u-mt20">Economic department</h4>

            <div class="row row-internalpadding u-mv30">

              <div class="col-md-6">
                <div class="team-member u-mb20 u-pv20 clearfix">
                  <div class="team-member-image" style="background-image: url('images/content/meric_uces.png');">
                  </div>
                  <h4 title="Meric Uces">Meric Uces</h4>
                  <em class="u-block" title="Project and Marketing Assistant">Project and Marketing Assistant</em>
                  <p class="text-small c-bluesoft u-mt10">
                      <a href="mailto:email@example.com">email@example.com</a><br />
                      0212 8189583
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="team-member u-mb20 u-pv20 clearfix">
                  <div class="team-member-image" style="background-image: url('images/content/h_jonkman.jpg');">
                  </div>
                  <h4 title="Hester Jonkman">Hester Jonkman</h4>
                  <em class="u-block" title="Deputy Consul-General and Head of Commercial and Economic Department">Deputy Consul-General and Head of Commercial and Economic Department</em>
                  <p class="text-small c-bluesoft u-mt10">
                      <a href="mailto:email@example.com">email@example.com</a><br />
                      -
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="team-member u-mb20 u-pv20 clearfix">
                  <div class="team-member-image" style="background-image: url('images/content/arife-karaosmanoglu.png');">
                  </div>
                  <h4 title="Arife Karaosmanoğlu">Arife Karaosmanoğlu</h4>
                  <em class="u-block" title="Country Manager">Country Manager</em>
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