<?php /*<div id="mailpoet_form_1" class="mailpoet_form mailpoet_form_shortcode">
    <style type="text/css">#mailpoet_form_1 .mailpoet_form {  }
#mailpoet_form_1 .mailpoet_paragraph {  }
#mailpoet_form_1 .mailpoet_text_label, #mailpoet_form_1 .mailpoet_textarea_label, #mailpoet_form_1 .mailpoet_select_label, #mailpoet_form_1 .mailpoet_radio_label, #mailpoet_form_1 .mailpoet_checkbox_label, #mailpoet_form_1 .mailpoet_list_label, #mailpoet_form_1 .mailpoet_date_label { display: block; }
#mailpoet_form_1 .mailpoet_text, #mailpoet_form_1 .mailpoet_textarea, #mailpoet_form_1 .mailpoet_select, #mailpoet_form_1 .mailpoet_date { display: block; }
#mailpoet_form_1 .mailpoet_checkbox {  }
#mailpoet_form_1 .mailpoet_validate_success { color: #468847; }
#mailpoet_form_1 .mailpoet_validate_error { color: #b94a48; }</style>
    <form method="post" action="/?action=mailpoet_subscription_form" class="mailpoet_form mailpoet_form_shortcode" novalidate="">
      <input type="hidden" name="form_id" value="1">
      <input type="hidden" name="token" value="73a5724be6">
      <input type="hidden" name="endpoint" value="subscribers">
      <input type="hidden" name="method" value="subscribe">

      <p class="mailpoet_paragraph"><input type="email" class="mailpoet_text" name="email" title="Your mail here" value="" placeholder="Your mail here *" data-parsley-required="true" data-parsley-error-message="Please specify a valid email address."></p>
<p class="mailpoet_submit"><input type="submit" value="Подписаться!"></p>

      <div class="mailpoet_message">
        <p class="mailpoet_validate_success" style="display:none;">Thank you <br>for joining us!</p>
        <p class="mailpoet_validate_error" style="display:none;">        </p>
      </div>
    </form>
      <div class="error-mess">*Please enter a valid email address</div>
    <div class="message"><div class="message-container"><button class="close-btn" data-ui="close-popup"></button><p>Thank you <br>for joining us!</p><button type="button" class="btn" data-ui="close-popup">Close</button></div></div>
  </div>
*/ ?>
  <?php echo do_shortcode('[wysija_form id="2"]'); ?>
