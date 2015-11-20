<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php
    // setting current page parameter
    $curpage = 'tradedir-show';
    include('components/nav.php');
    // setting optional parameters for header
    $header_bg = 'bluesoft';
    $header_quicklinks = true;
    include('components/header.php');
    include('components/dialog.php');
    ?>

    <div class="header-placeholder u-mt20"></div>

    <section class="bg-white">
      <div class="row u-pv30">
        <div class="col-md-3 u-static">
          <div class="content-small box-sticky">
            <img src="images/content/client-logo-full.jpg" alt="" />

            <div class="u-aligncenter u-mv40">
              <a href="http://www.portakal.nl" target="_blank" class="btn btn-outline u-block u-mb10">
                Website
                <i class="icon icon-software-scale-expand"></i>
              </a>
              <a href="javascript:toggleDialog('message')" class="btn btn-outline u-block u-mb10">
                Message
                <i class="icon icon-basic-message"></i>
              </a>
            </div>
            <p class="c-greymedium">
              <small>
                Levent Mahallesi Güvercin Sokak No:33 Beşiktaş<br />
                34330<br />
                İstanbul<br />
                +90 212 5575000
              </small>
            </p>
          </div>
        </div>
        <div class="col-md-9">
          <div class="content-small">
            <h1>Portakal Toerisme Nederland B.V.</h1>
            <div class="c-orange"><i class="icon icon-basic-lightbulb u-mr10"></i> [M69] - Legal and accounting activities</div>
            <div class="c-orange"><i class="icon icon-basic-lightbulb u-mr10"></i> [M70] - Activities of head offices; management consultancy activities</div>
            <div class="c-orange"><i class="icon icon-basic-lightbulb u-mr10"></i> [M73] - Advertising and market research</div>

            <small class="u-block u-mv60 c-greymedium">
              <p>We are an independent Turkish Investment Advisory firm that has specialized in providing “One-Stop-Shop” services and guidance to foreign investors who are seeking market entry in Turkey.</p>
              <p>ALBARS is recognized for the industry-focused approach to service. Our in-depth knowledge of the regulatory and standard-setting environment allows us to provide insight and analyses to our clients via briefings, benchmarking surveys and research.</p>
              <p>Today, having a team of legal and business experts and serving a diverse national and international client base, our office provides clients with access to the Firm’s full spectrum of capabilities in virtually every area of investment, trading, organizing, marketing, promoting and developing business in Turkey from one single source.</p>
            </small>

            <div class="row row-nopadding u-mt20">
              <div class="col-sm-6">
                <div class="u-mb20">
                  <label>Company Executive</label><br />
                  Ruud Verstraaten
                </div>
                <div class="u-mb20">
                  <label>Website</label><br />
                  <a href="http://www.portakal.nl" target="_blank">www.portakal.nl</a>
                </div>
                <div class="u-mb20">
                  <label>No of Employees</label><br />
                  1-10
                </div>
                <div class="u-mb20">
                  <label>Company Registration No</label><br />
                  18076321
                </div>
                <div class="u-mb20">
                  <label>Link With Netherlands</label><br />
                  My company is a local subsidiary of a Dutch firm
                </div>
              </div>
              <div class="col-sm-6">
                <div class="u-mb20">
                  <label>Contact Person</label><br />
                  Ms. Caglayan ORHANER DUNDAR
                </div>
                <div class="u-mb20">
                  <label>Contact Person Title</label><br />
                  Director
                </div>
                <div class="u-mb20">
                  <label>Contact Person Email</label><br />
                  administratie@portakal.nl
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-greylight">
      <div class="row">

        <div class="col-md-7 col-md-offset-3">

        </div>

    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>
