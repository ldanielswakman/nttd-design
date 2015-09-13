<header <?php echo (isset($header_bg)) ? ' class="bg-' . $header_bg . '"' : ''; ?>>
  <a href="javascript:toggleMenu();" class="u-inlineblock u-ph20 u-pv10 u-floatright">
    <i class="icon icon-arrows-hamburger-2 icon-3x u-floatleft"></i>
  </a>
  <?php if ( isset($header_quicklinks) && $header_quicklinks == true ) : ?>
    <ul class="header_quicklinks">
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
</header>