<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php
    // setting current page parameter
    $curpage = 'faqcontact';
    include('components/nav.php');
    // setting optional parameters for header
    $header_bg = 'orange';
    $header_quicklinks = true;
    include('components/header.php')
    ?>

    <section id="intro_banner">

      <div class="header-placeholder u-relative"></div>

      <div class="slide" style="background-image: url('images/banner_faqcontact.jpg');" data-prlx-offset="-150"></div>

      <div class="row u-pv4vw">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basic-mail icon-5x u-block c-white u-mb40 u-mt10"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity70">FAQ & CONTACT</h4>
          <em class="text-huge">Get in touch</em>
        </div>
      </div>

      <div class="u-aligncenter">
        <ul class="tabs clearfix">
          <li>
            <a href="faqcontact.php">
              Frequently Asked Questions
            </a>
          </li>
          <li>
            <a href="faqcontact-jurismap.php">
              Jurisdictional Map
            </a>
          </li>
          <li class="active">
            <a href="faqcontact-address.php">
              Address information
            </a>
          </li>
          <li>
            <a href="faqcontact-disclaimer.php">
              Disclaimer
            </a>
          </li>
          <li>
            <a href="faqcontact-contact.php">
              Contact us
            </a>
          </li>
        </ul>
      </div>

    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-3 u-static">
        </div>
        <div class="col-sm-9">

          <div class="content content-small">

            <h3>Contact information of the Dutch Economic Network in Turkey</h3>
            
          </div>

        </div>
      </div>
    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-3 u-static">
          <div class="bg-white box-sticky">
            <iframe
              width="100%"
              height="300"
              frameborder="0" style="border:0"
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3009.7158152976704!2d28.976236932540893!3d41.031472932926825!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x1e6b35612d33b222!2sDutch+Consulate!5e0!3m2!1sen!2s!4v1445955509048" allowfullscreen>
            </iframe>
          </div>
        </div>
        <div class="col-sm-9">

          <div class="content content-small u-pt0">

            <h4>Consulate-General of the Kingdom of the Netherlands in Istanbul</h4>

            <p>
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
            </p>
            
          </div>

        </div>
      </div>
    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-3 u-static">
          <div class="bg-white box-sticky">
            <iframe
              width="100%"
              height="300"
              frameborder="0" style="border:0"
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d765.5756042768712!2d32.8581234!3d39.8674634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xf61d3221d13a43c8!2sHollanda+Konsoloslu%C4%9Fu!5e0!3m2!1sen!2s!4v1445955744053" allowfullscreen>
            </iframe>
          </div>
        </div>
        <div class="col-sm-9">

          <div class="content content-small u-pt0">

            <h4>Embassy of the Kingdom of the Netherlands in Ankara</h4>

            <p>
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
              [Address info]<br />
            </p>
            
          </div>

        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>