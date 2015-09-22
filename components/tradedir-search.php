<div class="row">
  <div class="col-xs-12">

    <form action="" class="u-inlineblock u-clearfix">
      <div class="fieldset u-floatleft u-mr20 u-mb10">
        <input class="field field-white" type="text" placeholder="Search" />
      </div>
      <div class="fieldset field-select u-floatleft u-mr20 u-mb10">
        <select class="field field-white">
          <option disabled selected>City...</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
        </select>
        <i class="icon icon-arrows-down icon-2x"></i>
      </div>
      <div class="fieldset field-select u-floatleft u-mr20 u-mb10">
        <select class="field field-white" style="max-width: 280px;">
          <option disabled selected>Sector...</option>
          <option <?php echo (isset($catselected)) ? ' selected' : ''; ?>>Public administration and defence; compulsory social security</option>
          <option>2</option>
          <option>3</option>
        </select>
        <i class="icon icon-arrows-down icon-2x"></i>
      </div>
      <button type="submit" class="btn btn-white">Search</button>
    </form>

  </div>
</div>
