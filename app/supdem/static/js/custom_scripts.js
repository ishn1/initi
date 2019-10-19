	$(document).ready(function() {
		
		
//stk header
	 var distance = $('header').offset().top,
		$window = $(window);
		$window.scroll(function() {
			if ( $window.scrollTop() > distance ) {
				$('body').addClass('stk');
			}else {
				$('body').removeClass('stk');
			}
		}); 
		
		 //sticky footer
            var ft_ht = $('footer').innerHeight();
          $('.wrapper').css({'margin-bottom':-ft_ht});
          $('.push').innerHeight(ft_ht)
          
          $(window).resize(function(e){
              var ft_ht = $('footer').innerHeight();
          $('.wrapper').css({'margin-bottom':-ft_ht});
          $('.push').innerHeight(ft_ht)
          })

		//smoth scroll
        
  $('.arrow ul li a').bind('click',function(event){
			  var $anchor = $(this);  
			  $('html, body').stop().animate({
				  scrollTop: $($anchor.attr('href')).offset().top
			  }, 1500,'easeInOutExpo');
			  event.preventDefault();
		});	
		
	});
