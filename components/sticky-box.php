<div class="bg-white content-small box-sticky">
  <?php if (!isset($stickybox_content)): ?>
    <p class="c-orange">
      This is a placeholder text that will appear in a sidebox ('orange box').
    </p>
    <p class="u-mt5 c-greymedium">
      This is some secondary text (if needed).
    </p>
    <a href="businessinfo-htbt.php" class="btn btn-outline u-mt20">Click here to take action</a><br />
    <a href="businessinfo-htbt.php" class="btn btn-sm btn-greyoutline u-mt10">Secondary action if needed</a>
  <?php else: ?>
    <?php echo $stickybox_content; ?>
  <?php endif; ?>
</div>