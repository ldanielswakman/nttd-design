<header <?php echo (isset($header_bg)) ? ' class="bg-' . $header_bg . '"' : ''; ?>>

  <a href="javascript:toggleMenu();" class="u-inlineblock u-ph20 u-pv10 u-floatright">
    <i class="icon icon-arrows-hamburger-2 icon-3x u-floatleft"></i>
  </a>

  <div class="row row-full">
    <div class="col-md-3">
    
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
              <i class="icon icon-basic-folder-multiple icon-2x u-block u-mt5"></i>
            </a>
          </li>
          <li <?php echo (strpos($_SERVER['REQUEST_URI'], 'aboutus') !== false) ? ' class="active"' : '' ?>>
            <a href="aboutus.php">
              <i class="icon icon-basic-question icon-2x u-block u-mt5"></i>
            </a>
          </li>
          <li <?php echo (strpos($_SERVER['REQUEST_URI'], 'faqcontact') !== false) ? ' class="active"' : '' ?>>
            <a href="faqcontact.php">
              <i class="icon icon-basic-message-txt icon-2x u-block u-mt5"></i>
            </a>
          </li>
        </ul>
      <?php endif ?>

    </div>
    <div class="col-md-6">

      <?php if ( isset($header_quicklinks) && $header_quicklinks == true ) : ?>
        <h4 class="u-ml30 u-mv20 u-clearfix"><em>
          <a href="businessinfo.php" class="u-floatleft">Business info</a>
          <i class="icon icon-arrows-right icon-15x u-floatleft u-mh10"></i>
          <a href="businessinfo.php" class="u-floatleft">Bilateral trade</a>
        </em></h4>
      <?php endif; ?>

    </div>
    <div class="col-md-3">
    </div>
  </div>

</header>