<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php
    // setting current page parameter
    $curpage = 'news-show';
    include('components/nav.php');
    // setting optional parameters for header
    $header_bg = 'orange';
    $header_quicklinks = true;
    include('components/header.php')
    ?>

    <section id="intro">

      <div class="header-placeholder u-relative"></div>

      <div class="slide" style="background-image: url('images/banner_newsevents.jpg');"></div>

      <div class="row u-pv4vw">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basic-message-multiple icon-5x u-block c-white u-mb40 u-mt10"></i>
        </div>
        <div class="col-md-8 c-white">
          <em class="text-huge">Trade Mission to Bursa</em>
          <h4 class="u-opacity70">9 October 2015</h4>
        </div>
      </div>

    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-3 u-static">
          <?php
          // Example event meta data
          $stickybox_content = '<p><small>';
          $stickybox_content .= '<i class="icon icon-basic-calendar icon-15x u-floatleft u-mr10 u-mt5 c-greymedium"></i> 25-28 November<br />';
          $stickybox_content .= '<i class="icon icon-basic-clock icon-15x u-floatleft u-mr10 u-mt5 c-greymedium"></i> 9.00-17.30<br />';
          $stickybox_content .= '<i class="icon icon-basic-geolocalize-01 icon-15x u-floatleft u-mr10 u-mt5 c-greymedium"></i> Istanbul, CNR Expo';
          $stickybox_content .= '</small></p>';
          include('components/sticky-box.php'); 
          ?>
        </div>
        <div class="col-sm-9">
          <div class="content-small">

            <div class="figure u-mb20">
              <img src="images/content/FOOD.png" alt="" />
            </div>

            <p><strong>The port of Rotterdam is introducing a new innovation. The website Rotterdam Port Connector is the online way to bring potential international clients into contact with Rotterdam’s port business community.</strong></p>
            <p>It is possible, for example, for businesses with a logistics need to post their request online. The request can relate to transport, storage or handling or a specific service and is immediately received by over 500 service providers who are affiliated with the Rotterdam Port Promotion Council (RPPC): businesses which can meet this need. The requesting party remains anonymous and they decide for themselves when to contact the service provider. ‘In this way, we bring supply and demand together online. No other port has such a platform,’ explains RPPC director Marjolein Warburg. The website is proving a success. It has already received a substantial number of inquiries and has even resulted in new business.</p>
            <p>In addition to posting requests, the Rotterdam Port Connector offers the companies invited to an RPPC gathering the chance to meet the Rotterdam service providers on the spot. ‘A great instrument that extends our service and something the business community can use to its advantage.’</p>
            <p>The website is a product of Rotterdam Port Promotion Council (RPPC). This organization was founded in 1933 as the Stichting Havenbelangen Rotterdam-Europoort. The RPPC acts as an intermediary for its members: companies which are active in and for the ports of Rotterdam, Dordrecht and Moerdijk.</p>

            <p>
            <a href="http://www.rottterdamportconnector.com" target="_blank">www.rottterdamportconnector.com</a><br />
            View the animations at <a href="https://www.youtube.com/watch?v=vQOOd2-A-HE" target="_blank">here</a><br />
            <a href="http://www.rppc.nl/en/" target="_blank">Rotterdam Port promotion Council</a><br />
            <a href="http://www.rottterdamportconnector.com/" target="_blank">Rotterdam Port Connector</a>
            </p>

            <div class="row row-full row-nopadding u-mv20">

              <div class="col-md-4 col-sm-6 u-mv10">
                <a href="an_example_attachment.pdf" target="_blank" class="btn btn-attachment">
                  <div class="title">Food and Agriculture Industry</div>
                  <div class="data">PDF, 3.1 MB</div>
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