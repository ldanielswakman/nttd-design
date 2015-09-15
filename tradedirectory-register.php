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
    $header_bg = 'orange';
    $header_quicklinks = true;
    include('components/header.php')
    ?>

    <section id="intro">

      <div class="header-placeholder u-relative"></div>

      <div class="slides">
        <div class="slide" style="background-image: url('images/maslak_soft.jpg');"></div>
      </div>

      <div class="row u-pv80">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basicelaboration-folder-plus icon-4x u-block c-white u-mv20"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity50">TRADE DIRECTORY</h4>
          <em style="font-size: 3em;">Join the fruitful community</em>
          <div>
            <p class="u-mt20">Netherlands Turkey Trade Directory will give you access to almost 250 companies which are actively trading between Turkey and the Netherlands.</p>
          </div>
        </div>
      </div>

    </section>

    <section>
      <div class="row">

        <div class="col-md-7 col-md-offset-3">

          <div class="flash flash-error u-hide">
            There were some problems with the form below. Please correct the errors.
          </div>

          <form action="" class="bg-white content-small">

            <h4>Company information</h4>

            <div class="fieldset">
              <label>Name</label>
              <input class="field u-fullwidth" type="text" name="company[name]" placeholder="Name" />
              <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
            </div>
            <div class="fieldset">
              <label>Short name/brand name</label>
              <input class="field u-fullwidth" type="text" name="company[short_name]" placeholder="Short name/brand name" />
              <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
            </div>
            <div class="fieldset hasError">
              <label>Company Executive</label>
              <input class="field u-fullwidth" type="text" name="company[executive]" placeholder="Company Executive" value="Daniel" />
              <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
            </div>
            <div class="fieldset">
              <label>Serving since (year)</label>
              <input class="field" type="number" maxlength="4" min="0" name="company[since]" placeholder="Service since (year)" />
              <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
            </div>
            <div class="fieldset">
              <label>Website</label>
              <input class="field u-fullwidth" type="url" name="company[executive]" placeholder="Website" />
              <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
            </div>
            <div class="fieldset">
              <label class="u-opacity100">Executive picture</label>
              <input class="field u-fullwidth" type="file" name="company[avatar]" placeholder="Executive picture" />
              <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
            </div>

            <hr />

            <div class="fieldset fieldset-checkbox">
              <input class="field" type="checkbox" id="company_confirmation" name="company[confirmation]" />
              <label for="company_confirmation">I hereby confirm that I filled out everything correctly and agree with the Terms and Conditions.</label>
              <div class="field-validation" style="display: none;">Please accept the terms and conditions.</div>
            </div>

            <div class="u-alignright u-mv40">
              <button type="submit" class="btn btn-primary">Create Company</button>
            </div>

          </form>

        </div>

    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>
