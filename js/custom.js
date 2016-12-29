
      /*  $(document).ready(function() {
            if ($(window).width() > 992) {
                //jQuery to collapse the navbar on scroll
                $(window).scroll(function() {
                    if ($(".navbar").offset().top > 600) {
                        $(".navbar-fixed-top").addClass("top-nav-collapse");
                    } else {
                        $(".navbar-fixed-top").removeClass("top-nav-collapse");
                    }
                });
            }
        })*/

        //$(window).resize(function() {
            if ($(window).width() > 992) {
                //jQuery to collapse the navbar on scroll
                $(window).scroll(function() {
                    if ($(".navbar").offset().top > 600) {
                        $(".navbar-fixed-top").addClass("top-nav-collapse");
                    } else {
                        $(".navbar-fixed-top").removeClass("top-nav-collapse");
                    }
                });
            } else {
                $(window).scroll(function() {
                    if ($(".navbar").offset().top > 600) {
                        $(".navbar-fixed-top").removeClass("top-nav-collapse");
                    } else {
                        $(".navbar-fixed-top").removeClass("top-nav-collapse");
                    }
                });
            }
     //   })

/**/
        $('.navbar-nav > li > a').click(function(e) {
            e.preventDefault();
            var target = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(target).offset().top - 80
            }, 2000);
            $('#navbar').removeClass('in').attr('aria-expanded', 'true').removeAttr('style');
             $('.navbar-toggle').addClass('collapsed');
            setTimeout(function(){
                $('body').removeClass('scroll-hidden');
               
            }, 1000)
        })
        $('.navbar [data-toggle="collapse"]').click(function(){
            setTimeout(function(){
                $('body').toggleClass('scroll-hidden');
            }, 500);
        })


    /* accordion js /**/

        function toggleIcon(e) {
            $(e.target)
                .prev('.panel-heading')
                .find(".more-less")
                .toggleClass('fa-plus-square-o fa-minus-square-o');
        }
        $('.panel-group').on('hidden.bs.collapse', toggleIcon);
        $('.panel-group').on('shown.bs.collapse', toggleIcon);


    /* video play js */
        $('.video').parent().click(function () {
            if($(this).children(".video").get(0).paused){
                $(this).children(".video").get(0).play();
                $(this).children(".playpause").fadeOut();
            }
            else {
                $(this).children(".video").get(0).pause();
                $(this).children(".playpause").fadeIn();
            }
        });


    /* carousel slider js */
        $(document).ready(function() {      
            $('.carousel').carousel({
                pause: true,
                interval: false
            });
        });

/* mobile swap js */
    $(document).ready(function() {
        if($(window).width() < 750) 
            {
        $('.app-content-area').parent().insertBefore($('.app-video-area').parent());
                $('.event-top-area').each(function(){
                     $(this).insertBefore($(this).parent().parent().prev().children('.event-img'));
                })
          
            }
             /*-- slider --*/
             $('.slider-a[data-type="multi"] .item').each(function(){
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
                
            for (var i=0;i<1;i++) {
                next=next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        });
        
    })
     $(window).resize(function() {
        if($(window).width() < 750) 
            {
        $('.app-content-area').parent().insertBefore($('.app-video-area').parent());
   $('.event-top-area').each(function(){
                     $(this).insertBefore($(this).parent().parent().prev().children('.event-img'));
                })
           
                
            }
         else
         {
           $('.app-content-area').parent().insertAfter($('.app-video-area').parent());  
              $('.event-title').each(function(){
                     $(this).insertBefore($(this).parent().next().children().children('.event-date-time'));
                })
            $('.event-top-area').each(function(){
                     $(this).insertBefore($(this).parent().next().children().children('.event-date-time'));
                })
     
         }
    })
     
 
  

$(document).on("scrollstop",function(){
 $(".carousel").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $(".carousel").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
});