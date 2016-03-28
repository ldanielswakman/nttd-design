<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php
    // setting current page parameter
    $curpage = 'event-show';
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
          <i class="icon icon-basic-calendar icon-5x u-block c-white u-mb40 u-mt10"></i>
        </div>
        <div class="col-md-8 c-white">
          <em class="text-huge">Holland Turkey Business Tour 2016</em>
          <h4 class="u-opacity70">1 - 15 May 2016</h4>
        </div>
      </div>

    </section>

    <section>
      <div class="row row-full row-internalpadding">
        <div class="col-sm-3 u-static">

          <div class="box-sticky u-mv30">
            <a href="event-htbt.php" class="bg-greylight u-block content-small u-pv15 u-mb5 c-orange"><h4>General info</h4></a>
            <a href="event-htbt.php" class="bg-greylight u-block content-small u-pv15 u-mb5"><h4>History</h4></a>
            <a href="event-htbt.php" class="bg-greylight u-block content-small u-pv15 u-mb5">
              <h4 class="u-mt10" style="line-height: 0.5em;">Trade Mission Kocaeli</h4>
              <small style="line-height: 0.5em;"><em>12 May 2016</em></small>
            </a>
            <a href="event-htbt.php" class="bg-greylight u-block content-small u-pv15 u-mb5">
              <h4 class="u-mt10" style="line-height: 0.5em;">Trade Mission Bursa</h4>
              <small style="line-height: 0.5em;"><em>27 August 2016</em></small>
            </a>
            <a href="event-htbt.php" class="bg-greylight u-block content-small u-pv15 u-mb5"><h4>Full program (PDF)</h4></a>
          </div>

        </div>
        <div class="col-sm-9">
          <div class="content-small">

            <p><strong>The port of Rotterdam is introducing a new innovation. The website Rotterdam Port Connector Istanbul the online way to bring potential international clients into contact with Rotterdam’s port business community.</strong></p>

            <iframe class="u-mv30" width="560" height="315" src="https://www.youtube.com/embed/VlZBzp733wE" frameborder="0" allowfullscreen></iframe>

            <p>It is possible, for example, for businesses with a logistics need to post their request online. The request can relate to transport, storage or handling or a specific service and is immediately received by over 500 service providers who are affiliated with the Rotterdam Port Promotion Council (RPPC): businesses which can meet this need. The requesting party remains anonymous and they decide for themselves when to contact the service provider. ‘In this way, we bring supply and demand together online. No other port has such a platform,’ explains RPPC director Marjolein Warburg. The website is proving a success. It has already received a substantial number of inquiries and has even resulted in new business.</p>
            <p>In addition to posting requests, the Rotterdam Port Connector offers the companies invited to an RPPC gathering the chance to meet the Rotterdam service providers on the spot. ‘A great instrument that extends our service and something the business community can use to its advantage.’</p>
            <p>The website is a product of Rotterdam Port Promotion Council (RPPC). This organization was founded in 1933 as the Stichting Havenbelangen Rotterdam-Europoort. The RPPC acts as an intermediary for its members: companies which are active in and for the ports of Rotterdam, Dordrecht and Moerdijk.</p>

          </div>
        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>