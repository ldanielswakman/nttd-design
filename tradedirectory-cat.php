<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php
    // setting current page parameter
    $curpage = 'tradedirectory';
    include('components/nav.php');
    // setting optional parameters for header
    $header_bg = 'bluesoft';
    $header_quicklinks = true;
    include('components/header.php');
    include('components/dialog.php');
    ?>

    <section id="intro_banner">

      <div class="header-placeholder u-relative"></div>

      <div class="slide" style="background-image: url('images/banner_tradedir.jpg');"></div>

      <div class="row u-pv4vw">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basicelaboration-folder-search icon-4x u-block c-white u-mv20"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity70">TRADE DIRECTORY</h4>
          <em class="text-huge">Browse the business network</em>
        </div>
      </div>

      <div class="u-relative u-aligncenter">
        <?php 
        $catselected = true;
        include('components/tradedir-search.php'); 
        ?>
      </div>

    </section>

    <section>
      <div class="row row-full row-nopadding">

        <div class="col-md-4 u-static">
          <div class="box-sticky">
            <a href="tradedirectory-cat.php" class="tradedir-category clearfix">
              <div class="badge">
                <i class="icon icon-basic-lock icon-3x"></i>
              </div>
              <h5 class="u-mt10">Public administration and defence; compulsory social security</h5>
              <div class="c-greymedium">23 companies</div>
            </a>
            <a href="tradedirectory-cat.php" class="tradedir-category tradedir-catempty clearfix col-sm-hide">
              <div class="badge">
                <i class="icon icon-basic-settings icon-3x"></i>
              </div>
              <h5 class="u-mt10">Manufacturing</h5>
              <div class="c-greymedium">21 companies</div>
            </a>
            <a href="tradedirectory-cat.php" class="tradedir-category tradedir-catempty clearfix col-sm-hide">
              <div class="badge">
                <i class="icon icon-basic-flag2 icon-3x"></i>
              </div>
              <h5 class="u-mt10">Agriculture, forestry and fishing</h5>
              <div class="c-greymedium">20 companies</div>
            </a>
            <a href="tradedirectory-cat.php" class="tradedir-category tradedir-catempty clearfix col-sm-hide">
              <div class="badge">
                <i class="icon icon-basic-hammer icon-3x"></i>
              </div>
              <h5 class="u-mt10">Mining and quarrying</h5>
              <div class="c-greymedium">17 companies</div>
            </a>
            <a href="tradedirectory-cat.php" class="tradedir-category tradedir-catempty clearfix col-sm-hide">
              <div class="badge">
                <i class="icon icon-basic-pencil-ruler icon-3x"></i>
              </div>
              <h5 class="u-mt10">Construction</h5>
              <div class="c-greymedium">17 companies</div>
            </a>
            <a href="tradedirectory-cat.php" class="tradedir-category tradedir-catempty clearfix col-sm-hide">
              <div class="badge">
                <i class="icon icon-ecommerce-cart-content icon-3x"></i>
              </div>
              <h5 class="u-mt10">Wholesale and retail trade; repair of motor vehicles and motorcycles</h5>
              <div class="c-greymedium">16 companies</div>
            </a>
            <a href="tradedirectory-cat.php" class="tradedir-category tradedir-catempty clearfix col-sm-hide">
              <div class="badge">
                <i class="icon icon-arrows-switch-horizontal icon-3x"></i>
              </div>
              <h5 class="u-mt10">Transporting and storage</h5>
              <div class="c-greymedium">13 companies</div>
            </a>
          </div>
        </div>

        <div class="col-md-8 u-static">
          <div class="box-sticky">
            <div class="bg-white">

              <div class="u-block u-pl40 u-pv10 c-greymedium u-borderbottom">
                <em>123 results</em>
              </div>

              <ul class="list u-mb20">
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-1.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        7 Hills Foundation
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">-</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-2.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        NilBa Iş ve Dış Ticaret
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">NilBa is an ICT and Internet consultancy organization, originally from the Netherlands, but since more than 8 years operational in Turkey...</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-3.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        Portakal Toerisme Nederland B.V
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">Selling package deals in Holland for holidays, flights, accommodations, roundtrips, etc.</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-1.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        7 Hills Foundation
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">-</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-2.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        NilBa Iş ve Dış Ticaret
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">NilBa is an ICT and Internet consultancy organization, originally from the Netherlands, but since more than 8 years operational in Turkey...</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-3.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        Portakal Toerisme Nederland B.V
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">Selling package deals in Holland for holidays, flights, accommodations, roundtrips, etc.</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-1.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        7 Hills Foundation
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">-</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-2.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        NilBa Iş ve Dış Ticaret
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">NilBa is an ICT and Internet consultancy organization, originally from the Netherlands, but since more than 8 years operational in Turkey...</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-3.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        Portakal Toerisme Nederland B.V
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">Selling package deals in Holland for holidays, flights, accommodations, roundtrips, etc.</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-1.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        7 Hills Foundation
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">-</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-2.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        NilBa Iş ve Dış Ticaret
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">NilBa is an ICT and Internet consultancy organization, originally from the Netherlands, but since more than 8 years operational in Turkey...</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-3.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        Portakal Toerisme Nederland B.V
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">Selling package deals in Holland for holidays, flights, accommodations, roundtrips, etc.</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-1.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        7 Hills Foundation
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">-</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-2.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        NilBa Iş ve Dış Ticaret
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">NilBa is an ICT and Internet consultancy organization, originally from the Netherlands, but since more than 8 years operational in Turkey...</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-3.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        Portakal Toerisme Nederland B.V
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">Selling package deals in Holland for holidays, flights, accommodations, roundtrips, etc.</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-1.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        7 Hills Foundation
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">-</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-2.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        NilBa Iş ve Dış Ticaret
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">NilBa is an ICT and Internet consultancy organization, originally from the Netherlands, but since more than 8 years operational in Turkey...</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="tradedirectory-show.php" class="">
                    <div class="row">
                      <div class="col-sm-3 col-xs-3 u-pv20">
                        <div class="list-figure">
                          <img src="images/content/client-logo-3.jpg" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-7 u-pv20">
                        Portakal Toerisme Nederland B.V
                      </div>
                      <div class="col-sm-5 col-xs-hide">
                        <small class="c-bluesoft">Selling package deals in Holland for holidays, flights, accommodations, roundtrips, etc.</small>
                      </div>
                      <div class="col-sm-1 col-xs-2">
                        <i class="icon icon-arrows-right icon-2x u-floatright u-mt10"></i>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>

            </div>

            <?php include('components/list-pagination.php') ?>
            
          </div>

        </div>

      </div>

    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>
