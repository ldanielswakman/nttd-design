<form action="" class="u-inlineblock u-clearfix u-mv10">
  <div class="field-group u-floatleft u-mr20">
    <input class="field" type="text" placeholder="Search" />
  </div>
  <div class="field-group field-select u-floatleft u-mr20">
    <select class="field">
      <option disabled selected>City...</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select>
    <i class="icon icon-arrows-down icon-2x"></i>
  </div>
  <div class="field-group field-select u-floatleft u-mr20">
    <select class="field">
      <option disabled selected>Sector...</option>
      <option <?php echo (isset($catselected)) ? ' selected' : ''; ?>>Public administration and defence; compulsory social security</option>
      <option>2</option>
      <option>3</option>
    </select>
    <i class="icon icon-arrows-down icon-2x"></i>
  </div>
  <button type="submit" class="btn btn-white">Search</button>
</form>
