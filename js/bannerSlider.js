
                // banner slider
                var num = 1;
                function slide(){
                    var hide = $('#banner_slider > ul > li');
                    var show = $('#banner_slider > ul > li:eq('+ num +')');
                    hide.fadeOut('slow');
                    show.fadeIn('slow');
                    num++
                        if(num == hide.length){
                            num = 0;
                        }
                    }

                //faq slider
                var faq_num = 1;
                var slideAmount = 42;
                var faqAmount;

                function faqSlide(){
                    var curr_pos = $('#faq_viewport > ul').css('marginTop');
                    curr_pos = curr_pos.replace('px','');
                    faqAmount = $('#faq_viewport > ul > li').length - 2;
                    var max_margin = (faqAmount * (-slideAmount));
                    if(curr_pos < max_margin){
                        $('#faq_viewport > ul').animate({
                        marginTop: '0'
                    }, 1000);
                    }else{
                    $('#faq_viewport > ul').animate({
                        marginTop: '-=' + slideAmount
                    }, 2000);
                    }
                }

                $(document).ready(function(){
                   $('#banner_slider > ul > li:not(:eq(0))').hide();
                   var delay = 8000;
                   var faq_delay = 5000;
                   var timer = self.setInterval('slide()', delay);
                   var faq_timer = self.setInterval('faqSlide()', faq_delay);
                });



