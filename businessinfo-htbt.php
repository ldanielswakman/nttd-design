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
        <div class="bxslider">
          <div class="slide" style="background-image: url('images/banner_businessinfo.jpg');"></div>
        </div>
      </div>

      <div class="row u-pv4vw">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basic-signs icon-5x u-block c-white u-mb40"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity70">BUSINESS INFO</h4>
          <em class="text-huge">Holland Turkey Business Tour 2015</em>
        </div>
      </div>

      <div class="u-aligncenter">
        <ul class="tabs clearfix">
          <li>
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
          <li class="active">
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
          <div class="content-small box-sticky">
            <a href="#agrifood" class="u-block u-mv10 c-orange">Holland Turkey Business Tour 2015</a>
            <a href="#chemicals" class="u-block u-mv10 c-orange">Calendar</a>
            <a href="#energy" class="u-block u-mv10 c-orange">Factsheets about regions</a>
            <a href="#healthcare" class="u-block u-mv10 c-orange">Trade Mission Trabzon & Samsun</a>
            <a href="#ict" class="u-block u-mv10 c-orange">Trade Mission Bursa</a>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="content-small">
            <h3 class="u-mb20">Holland Turkey Business Tour 2015</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XVEyeY-4zRA" frameborder="0" allowfullscreen></iframe>

            <h4 class="u-mt40">Opportunities for Dutch entrepreneurs in Turkey</h4>
            <p>The Economic Network of the embassy of the Kingdom of the Netherlands organizes the Holland-Turkey Business Tour 2015 and has the honor and privilege to invite you to join this caravan that is kindly led by the Dutch ambassador Ron Keller. The tour will be a joint effort of the embassy and Turkish and Dutch associates and we believe that your contribution to this tour will be very beneficial.</p>
            <p>The Economic Network of the embassy of the Kingdom of the Netherlands in Turkey, consisting of the economic department of the embassy, the consulate-general and the Netherlands Business Support Office (NBSO), organizes a tour, for Dutch companies, through Turkey to explore business opportunities and business partners in Istanbul, Izmir, Antalya, Ankara, Adana, Mersin, Trabzon, Samsun, Konya and many other cities.</p>
            <p>The Holland-Turkey Business Tour 2015 emphasize on sectorial and multi-sectorial missions and events. The economic network of the embassy will join the initiatives of its network partners and will also organize many activities during the tour.</p>
            <p>The program varies each mission. The economic network organizes specific programs which will match the needs of the Dutch entrepreneurs. These programs will contain the following; visits to the regional government, the chamber of commerce, the chamber of industry, regional development agency, organizing a dinner, a reception or combine the mission with a cultural event.</p>

            <h5 class="u-mt40">Practical</h5>
            <p>The embassy connects you to the organization which is responsible for the mission. This will be the economic network of the embassy of the Kingdom of the Netherlands in Turkey or a partner of the Economic Network in Turkey. If the Network partner organizes the mission, they will contact you about the program of the mission and the total costs.</p>
            <p>Missions organized by the Economic Network of the embassy of the Kingdom of the Netherlands in Turkey will be led by the ambassador or the consul-general.</p>

            <h5 class="u-mt40">Registration</h5>
            <p>To participate in the Holland-Turkey Business Tour 2015, please send an email to ank-events@minbuza.nl and add the following contact details; name and function of the contact person, company name, KvK number, address, telephone number, email address and the name of the mission you would like to attend.</p>
            <p>We will be glad to answer any questions you may have and provide necessary clarifications where needed. Kindly send in your registration to Ms. Ferda Basdogan, coordinator Holland-Turkey Business Tour 2015, +90 (0)312-4091871</p>
            <p>We look forward to seeing you in Turkey!</p>

          </div>
        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>