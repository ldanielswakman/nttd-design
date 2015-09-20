<header <?php echo (isset($header_bg)) ? ' class="bg-' . $header_bg . '"' : ''; ?>>

  <div class="row row-full">
    <div class="col-md-3 col-sm-4">
    
      <?php if ( isset($header_quicklinks) && $header_quicklinks == true ) : ?>
        <ul class="header_quicklinks clearfix">
          <li>
            <a href="index.php">
              <img src="images/holland_logo_mark.svg" alt="" width="35px" />
            </a>
          </li>
          <li <?php echo (strpos($_SERVER['REQUEST_URI'], 'businessinfo') !== false) ? ' class="active"' : '' ?>>
            <a href="businessinfo.php">
              <i class="icon icon-basic-signs icon-2x u-block"></i>
            </a>
          </li>
          <li <?php echo (strpos($_SERVER['REQUEST_URI'], 'tradedirectory') !== false) ? ' class="active"' : '' ?>>
            <a href="tradedirectory.php">
              <i class="icon icon-basicelaboration-folder-search icon-2x u-block u-mt5"></i>
            </a>
          </li>
          <li <?php echo (strpos($_SERVER['REQUEST_URI'], 'aboutus') !== false) ? ' class="active"' : '' ?>>
            <a href="aboutus.php">
              <i class="icon icon-basic-question icon-2x u-block u-mt5"></i>
            </a>
          </li>
          <li <?php echo (strpos($_SERVER['REQUEST_URI'], 'faqcontact') !== false) ? ' class="active"' : '' ?>>
            <a href="faqcontact.php">
              <i class="icon icon-basic-mail icon-2x u-block u-mt5"></i>
            </a>
          </li>
        </ul>
      <?php endif ?>

    </div>
    <div class="col-md-5 col-sm-5 col-xs-hide">

      <?php 
      if( isset($header_quicklinks) && $header_quicklinks == true ) :
        if( isset($curpage) ) :
          if( $curpage == 'businessinfo' ) : ?>
            <h4 class="u-ml30 u-mv20 u-clearfix"><em>
              <a href="businessinfo.php" class="u-floatleft">Business info</a>
              <i class="icon icon-arrows-right icon-15x u-floatleft u-mh10"></i>
              <a href="businessinfo.php" class="u-floatleft">Bilateral trade</a>
            </em></h4>
          <?php elseif( $curpage == 'tradedirectory') : ?>
            <h4 class="u-ml30 u-mv20 u-clearfix"><em>
              <a href="tradedirectory.php" class="u-floatleft">Trade Directory</a>
              <i class="icon icon-arrows-right icon-15x u-floatleft u-mh10"></i>
              <a href="businessinfo.php" class="u-floatleft">[Category]</a>
            </em></h4>
          <?php elseif( $curpage == 'tradedir-register') : ?>
            <h4 class="u-ml30 u-mv20 u-clearfix"><em>
              <a href="tradedirectory.php" class="u-floatleft">Trade Directory</a>
              <i class="icon icon-arrows-right icon-15x u-floatleft u-mh10"></i>
              <a href="businessinfo.php" class="u-floatleft">Register</a>
            </em></h4>
          <?php elseif( $curpage == 'news') : ?>
            <h4 class="u-ml30 u-mv20 u-clearfix"><em>
              <a href="news-list.php" class="u-floatleft">News</a>
            </em></h4>
          <?php elseif( $curpage == 'news-show') : ?>
            <h4 class="u-ml30 u-mv20 u-clearfix"><em>
              <a href="news-list.php" class="u-floatleft">News</a>
              <i class="icon icon-arrows-right icon-15x u-floatleft u-mh10"></i>
              Trade Mission to Bursa
            </em></h4>
          <?php
          endif;
        endif;
      endif; 
      ?>

    </div>
    <div class="col-md-4 col-xs-hide">
      <a href="javascript:toggleMenu();" class="navicon">
        <i class="icon icon-arrows-hamburger-2 icon-3x u-floatleft"></i>
      </a>
      <?php if( isset($curpage) && $curpage == 'tradedirectory' || $curpage == 'tradedir-register') : ?>
        <a href="tradedirectory-register.php" class="btn btn-whiteoutline btn-reveal u-mb10 u-mt15 u-floatright">Register</a>
        <a href="#" class="btn btn-whiteoutline btn-reveal u-mb10 u-mr10 u-mt15 u-floatright">Login</a>
      <?php endif ?>
    </div>
  </div>

</header>