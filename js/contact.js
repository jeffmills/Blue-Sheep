
$(document).ready(function(){
   $('#ContactForm_phone, #ContactForm_email, #ContactForm_name').focus(function(event){
        $(event.target).css('backgroundPosition', 'bottom');
   });

   $('#ContactForm_phone, #ContactForm_email, #ContactForm_name').blur(function(event){
        $(event.target).css('backgroundPosition', 'top');
   });

});

