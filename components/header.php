<header <?php echo (isset($header_bg)) ? ' class="bg-' . $header_bg . '"' : ''; ?>>

  <div class="row row-full">
    <div class="col-md-3 col-sm-4 col-xs-10">
    
      <?php if ( isset($header_quicklinks) && $header_quicklinks == true ) : ?>
        <ul class="header_quicklinks clearfix">
          <li class="header_quicklinks__logo">
            <a href="index.php">
              <img src="images/holland_logo_mark.svg" alt="" width="35px" />
            </a>
          </li>
          <li <?php echo (strpos($_SERVER['REQUEST_URI'], 'aboutus') !== false) ? ' class="active"' : '' ?>>
            <a href="aboutus.php">
              <i class="icon icon-basic-question icon-2x u-block u-mt5"></i>
            </a>
          </li>
          <li <?php echo (strpos($_SERVER['REQUEST_URI'], 'tradedirectory') !== false) ? ' class="active"' : '' ?>>
            <a href="tradedirectory.php">
              <i class="icon icon-basicelaboration-folder-search icon-2x u-block u-mt5"></i>
            </a>
          </li>
          <li <?php echo (strpos($_SERVER['REQUEST_URI'], 'businessinfo') !== false) ? ' class="active"' : '' ?>>
            <a href="businessinfo.php">
              <i class="icon icon-basic-signs icon-2x u-block"></i>
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

      <h4 class="u-ml30 u-mv20 u-clearfix"><em>
      <?php 
      if( isset($curpage) && isset($header_quicklinks) && $header_quicklinks == true ) :
        switch ($curpage) {
          case 'businessinfo':
            $trunk_url = 'businessinfo.php';
            $trunk_title = 'Business info';
            $branch_url = 'businessinfo.php';
            $branch_title = 'Bilateral trade';
            break;
          case 'tradedirectory':
            $trunk_url = 'tradedirectory.php';
            $trunk_title = 'Trade Directory';
            $branch_url = 'businessinfo.php';
            $branch_title = '[Category]';
            break;
          case 'tradedir-register':
            $trunk_url = 'tradedirectory.php';
            $trunk_title = 'Trade Directory';
            $branch_url = 'businessinfo.php';
            $branch_title = 'Register';
            break;
          case 'tradedir-show':
            $trunk_url = 'tradedirectory.php';
            $trunk_title = 'Trade Directory';
            $branch_url = 'businessinfo.php';
            $branch_title = 'Portakal Toerisme Nederland B.V.';
            break;
          case 'news':
            $trunk_url = 'news-list.php';
            $trunk_title = 'News';
            break;
          case 'news-show':
            $trunk_url = 'news-list.php';
            $trunk_title = 'News';
            $branch_title = 'news-show.php';
            $branch_title = 'Trade Mission to Bursa';
            break;
          case 'event-show':
            $trunk_url = 'news-list.php';
            $trunk_title = 'Events';
            $branch_url = 'event-htbt.php';
            $branch_title = 'Holland Turkey Business Tour 2016';
            break;
          case 'aboutus':
            $trunk_url = 'aboutus.php';
            $trunk_title = 'About Us';
            $branch_url = 'aboutus.php';
            $branch_title = 'The Team';
            break;
          case 'faqcontact':
            $trunk_url = 'faqcontact.php';
            $trunk_title = 'FAQ &amp; contact';
            $branch_url = 'faqcontact-disclaimer.php';
            $branch_title = 'Disclaimer';
            break;
          default:
            $trunk_url = '';
            $trunk_title = '';
            break;
        }
        ?>
        <a href="<?php echo $trunk_url ?>" class="u-floatleft"><?php echo $trunk_title ?></a>
        <?php if(strlen($branch_url) > 0 && strlen($branch_title) > 0) :?>
          <i class="icon icon-arrows-right icon-15x u-floatleft u-mh10"></i>
          <a href="<?php echo $branch_url ?>" class="u-floatleft"><?php echo $branch_title ?></a>
        <?php endif ?>
      <?php endif ?>
      </em></h4>

    </div>
    <div class="col-md-4 col-sm-3 col-xs-2">
      <a href="javascript:toggleMenu();" class="navicon">
        <i class="icon icon-arrows-hamburger-2 icon-3x u-floatleft"></i>
      </a>
      <div class="col-sm-hide">
        <?php if( isset($curpage) && $curpage == 'tradedirectory' || $curpage == 'tradedir-register') : ?>
          <a href="tradedirectory-register.php" class="btn btn-whiteoutline btn-reveal u-mb10 u-mt15 u-floatright">Register</a>
          <a href="javascript:toggleDialog('login')" class="btn btn-whiteoutline btn-reveal u-mb10 u-mr10 u-mt15 u-floatright">Login</a>
        <?php endif ?>
      </div>
    </div>
  </div>

</header>