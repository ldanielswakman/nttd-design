<dialog id="dialog_login">

  <a href="javascript:closeDialog('login')" class="u-pintopright u-pa15">
    <i class="icon icon-arrows-remove icon-2x c-greylight"></i>
  </a>

  <div class="content">
    <form action="">

      <h4>Login</h4>
      <p><em>to the Trade Directory</em></p>

      <div class="fieldset">
        <label>Email</label>
        <input class="field u-fullwidth" type="text" name="name" placeholder="Email" />
        <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
      </div>

      <div class="fieldset">
        <label>Password</label>
        <input class="field u-fullwidth" type="password" name="password" placeholder="Password" />
        <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
      </div>

      <div class="u-alignright u-mt20">
        <a href="javascript:void(0)" class="u-inlineblock u-mr20 c-greymedium">Forgot password?</a>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>

    </form>
  </div>
</dialog>

<dialog id="dialog_message">

  <a href="javascript:closeDialog('login')" class="u-pintopright u-pa15">
    <i class="icon icon-arrows-remove icon-2x c-greylight"></i>
  </a>

  <div class="content">
    <form action="">

      <h4>Message</h4>
      <!-- <p><em>to the Trade Directory</em></p> -->

      <div class="fieldset">
        <label>Message</label>
        <textarea class="field u-fullwidth" placeholder="Write a message here..." rows="4"></textarea>
        <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
      </div>

      <div class="fieldset">
        <label>E-mail</label>
        <input class="field u-fullwidth" type="email" placeholder="E-mail" />
        <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
      </div>

      <div class="fieldset">
        <label>Name</label>
        <input class="field u-fullwidth" type="email" placeholder="Name" />
        <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
      </div>

      <div class="fieldset">
        <label>Company</label>
        <input class="field u-fullwidth" type="email" placeholder="Company Name" />
        <div class="field-validation" style="display: none;">Please fill out the correct value for this field.</div>
      </div>

      <div class="fieldset">
        <p>[Captcha]</p>
      </div>

      <div class="u-alignright u-mt20">
        <button type="submit" class="btn btn-primary">Send message</button>
      </div>

    </form>
  </div>

</dialog>


<a href="javascript:closeDialog('all')" id="dialog_mask"></a>
