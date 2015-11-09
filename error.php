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

    <section id="intro_banner" class="bg-bluesoft">

      <div class="header-placeholder u-relative"></div>

      <div class="row u-pv4vw c-white">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basic-question icon-5x u-block u-mb40 u-mt10"></i>
        </div>
        <div class="col-md-8">
          <h4 class="u-opacity70">ERROR</h4>
          <em class="text-huge">Something went wrong.</em>
        </div>
      </div>

    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-3 u-static">
        </div>
        <div class="col-sm-9">
          <div class="content-small">

            <p><big><em>Either the page you requested cannot be found, or there was an error with the active page.</em></big></p>
            <p>While we're working on fixing this, you could try one of the following links:</p>

            <div class="u-mt20">
              <a href="index.php" class="btn btn-outline u-mr5">
              <i class="icon icon-basic-home icon-15x u-floatleft u-mr10"></i>
                HOMEPAGE
              </a>
              <a href="tradedirectory.php" class="btn btn-outline u-mr5">
                <i class="icon icon-basicelaboration-folder-search icon-15x u-floatleft u-mr10"></i>
                TRADE DIRECTORY
              </a>
              <a href="faqcontact-contact.php" class="btn btn-outline u-mr5">
                <i class="icon icon-basic-mail icon-15x u-floatleft u-mr10"></i>
                CONTACT US
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>