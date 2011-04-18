$(document).ready(function(){

   $('.faq_question').click(function(event){
       //alert(event.target.nodeName);
      $(event.target).next('.faq_answer').slideToggle();
      $(event.target).children('.faq_arrow').toggleClass('faq_active');
   });

   $('.faq_question h2, .faq_question .faq_arrow').click(function(event){
        $(event.target).parent().parent().children('.faq_answer').slideToggle();
        $(event.target).parent().children('.faq_arrow').toggleClass('faq_active');
   });

});


