<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php
    // setting current page parameter
    $curpage = 'news';
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
          <i class="icon icon-basic-message-multiple icon-5x u-block c-white u-mb40 u-mt5"></i>
        </div>
        <div class="col-md-8 c-white">
          <em class="text-huge">News</em>
        </div>
      </div>

    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-3 u-static">
          <?php include('components/sticky-box.php'); ?>
        </div>
        <div class="col-sm-9">
          <div class="content-small u-pt0">

            <ul class="list list-unpadded u-mb30">
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Holland-Turkey Business Tour 2015</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Trade Mission to Bursa</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>The new “e-Residence” system is introduced by the Republic of Turkey Ministry of Interior Directorate General of Migration Management</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Holland-Turkey Business Tour 2015</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Trade Mission to Bursa</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>The new “e-Residence” system is introduced by the Republic of Turkey Ministry of Interior Directorate General of Migration Management</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Holland-Turkey Business Tour 2015</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Trade Mission to Bursa</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>The new “e-Residence” system is introduced by the Republic of Turkey Ministry of Interior Directorate General of Migration Management</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Holland-Turkey Business Tour 2015</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Trade Mission to Bursa</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>The new “e-Residence” system is introduced by the Republic of Turkey Ministry of Interior Directorate General of Migration Management</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Holland-Turkey Business Tour 2015</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>Trade Mission to Bursa</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
              <li>
                <a href="news-show.php">
                  <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                  <h4>The new “e-Residence” system is introduced by the Republic of Turkey Ministry of Interior Directorate General of Migration Management</h4>
                  <small>9 October 2015</small>
                </a>
              </li>
            </ul>

            <?php include('components/list-pagination.php') ?>

          </div>
        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>