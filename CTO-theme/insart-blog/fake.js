 document.addEventListener('DOMContentLoaded', function() {
     $('.mailpoet_form').after('<div class="message"><div class="message-container"><button class="close-btn" data-ui="close-popup"></button><p>Thank you <br>for joining us!</p><button type="button" class="btn" data-ui="close-popup">Close</button></div></div>');
     $('.mailpoet_submit').append('<button type="button" class="btn btn-open" data-ui="open-popup">Join Us</button>');

     $('body').on('click', '[data-ui="open-popup"]', function() {

         $('.mailpoet_submit input').trigger('click');
         // $('.message-show').fadeOut(300);
     });

     // $('.wysija-submit').val('Join Us');
     $('form.widget_wysija').after('<div class="error-mess">*Please enter a valid email address</div>');
     $('.sidebar form.widget_wysija').append('<button type="submit" class="btn btn-open">Join Us</button>');
      $('.sidebar form.widget_wysija input[type=submit]').hide();
     // $('[data-ui="open-popup-footer"]').on('click', function() {
     //     var value = $('.mailpoet_text-footer').val();

     //     $('.controls-promo').find('.mailpoet_text').val(value)
     //     $('.mailpoet_submit input').trigger('click');
     // });



     var x = window.location.search
     if (x.indexOf("mailpoet") > -1) {
         $('.message').eq(0).addClass('message-show');
         $('body').addClass('body-has-message')
     }

     $('[data-ui="close-popup"]').on('click', function() {
         $('.mailpoet_message').hide();
         $('.mailpoet_message').removeClass('message-show');
         $('.success-mess').removeClass('message-show');
         $('form.widget_wysija [name="wysija[user][email]').val('');
         // window.location.search = '';
     });


 });

 $(document).ready(function() {
      $('body').on('submit', '.mailpoet_form, form.widget_wysija', function(e){
        e.preventDefault();
        var form = $(this);
        var email = form.find('[name="wysija[user][email]"]').val();
        if (!isValidEmailAddress(email)) {
          form.addClass('has-error');
          return false;
        } else {
          $.post('', form.serialize(), function(d){
            console.log('success');
            $('.success-mess').addClass('message-show');
          },'html');
        }
      });
     $('form.widget_wysija [name="wysija[user][email]').keyup(function() {

         var email = $(this).val();
         var form = $(this).parents('form.widget_wysija');
         // console.log(email.length);
         if(email.length){
            if (email != ' ') {
               if (isValidEmailAddress(email)) {
                   $(form).removeClass('has-error');
               } else {
                   $(form).addClass('has-error');
               }
           } else {
               $(form).addClass('has-error');
           }
         } else {
          $(form).removeClass('has-error');
         }
         

     });

 });

 function isValidEmailAddress(emailAddress) {
     var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
     return pattern.test(emailAddress);
 }
