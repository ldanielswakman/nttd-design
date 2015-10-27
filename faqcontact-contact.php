<!DOCTYPE html>

<html lang="en">

  <?php include('components/head.php'); ?>

  <body>

    <div id="top"></div>

    <?php
    // setting current page parameter
    $curpage = 'faqcontact';
    include('components/nav.php');
    // setting optional parameters for header
    $header_bg = 'orange';
    $header_quicklinks = true;
    include('components/header.php')
    ?>

    <section id="intro_banner">

      <div class="header-placeholder u-relative"></div>

      <div class="slides">
        <div class="bxslider">
          <div class="slide" style="background-image: url('images/banner_faqcontact.jpg');" data-prlx-offset="-150"></div>
        </div>
      </div>

      <div class="row u-pv4vw">
        <div class="col-md-1 col-md-offset-2 u-aligncenter">
          <i class="icon icon-basic-mail icon-5x u-block c-white u-mb40 u-mt10"></i>
        </div>
        <div class="col-md-8 c-white">
          <h4 class="u-opacity70">FAQ & CONTACT</h4>
          <em class="text-huge">Get in touch</em>
        </div>
      </div>

      <div class="u-aligncenter">
        <ul class="tabs clearfix">
          <li>
            <a href="faqcontact.php">
              Frequently Asked Questions
            </a>
          </li>
          <li>
            <a href="faqcontact.php">
              Jurisdictional Map
            </a>
          </li>
          <li>
            <a href="faqcontact.php">
              Address information
            </a>
          </li>
          <li>
            <a href="faqcontact.php">
              Disclaimer
            </a>
          </li>
          <li class="active">
            <a href="faqcontact-contact.php">
              Contact us
            </a>
          </li>
        </ul>
      </div>

    </section>

    <section>
      <div class="row row-full">
        <div class="col-sm-3 u-static">
        </div>
        <div class="col-sm-9">

          <div class="flash flash-success">
            <h4>Thank you!</h4>
            Your message has been successfully sent. We'll get in touch with you shortly!
          </div>

          <form action="">
            <div class="bg-white content-small u-mv20 u-pb40">

              <h4>Send us a message</h4>

              <div class="fieldset">
                <label>Subject</label>
                <input class="field u-fullwidth" type="text" name="subject" placeholder="Subject" />
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>
              <div class="fieldset fieldset-required">
                <label>Your message</label>
                <textarea class="field u-fullwidth" name="message" placeholder="Your message" rows="6" resize="no"></textarea>
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>
              <div class="fieldset">
                <label>Name</label>
                <input class="field u-fullwidth" type="text" name="person_name" placeholder="Name" />
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>
              <div class="fieldset">
                <label>E-mail</label>
                <input class="field u-fullwidth" type="email" name="email" placeholder="E-mail" />
                <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
              </div>

              <div class="u-hasHiddenContent clearfix">
                <div class="u-revealedContent">
                  <a href="javascript:void(0)" onclick="javascript:showHiddenContent($(this));" class="btn btn-sm btn-greyoutline u-floatright u-mt15">Add telephone number</a>
                </div>
                <div class="u-hiddenContent">
                  <div class="fieldset">
                    <label>Telephone number</label>
                    <input class="field u-fullwidth" type="tel" name="phone" placeholder="Telephone number" />
                    <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
                  </div>
                </div>
              </div>

              <div class="u-hasHiddenContent clearfix">
                <div class="u-revealedContent">
                  <a href="javascript:void(0)" onclick="javascript:showHiddenContent($(this));" class="btn btn-sm btn-greyoutline u-floatright u-mt15">Add job title</a>
                </div>
                <div class="u-hiddenContent">
                  <div class="fieldset">
                    <label>Job Title</label>
                    <input class="field u-fullwidth" type="tel" name="phone" placeholder="Job Title" />
                    <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
                  </div>
                </div>
              </div>

              <div class="u-hasHiddenContent clearfix">
                <div class="u-revealedContent">
                  <a href="javascript:void(0)" onclick="javascript:showHiddenContent($(this));" class="btn btn-sm btn-greyoutline u-floatright u-mt15"> Add company info</a>
                </div>
                <div class="u-hiddenContent">
                  <div class="fieldset">
                    <label>Company name</label>
                    <input class="field u-fullwidth" type="name" name="phone" placeholder="Company name" />
                    <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
                  </div>
                  <div class="fieldset">
                    <label>Country</label>
                    <input class="field u-fullwidth" type="country" name="phone" placeholder="Country" />
                    <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
                  </div>
                  <div class="fieldset">
                    <label>Town</label>
                    <input class="field u-fullwidth" type="tel" name="town" placeholder="Town" />
                    <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
                  </div>
                </div>
              </div>

              <div class="u-alignright u-mt50">
                <button type="submit" class="btn btn-primary">Send message</button>
              </div>

            </div>

            </div>

          </form>

        </div>
      </div>
    </section>

    <?php include('components/footer.php'); ?>

  </body>

</html>