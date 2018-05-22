$(document).ready(function(){

	/*----- Intro animation -----*/
	
	$('#close').click(function (e) {
		e.preventDefault();
		$('#intro').fadeToggle('1s', 'linear');
  });
	
	/*----- Smooth scroll -----*/
	
	$(function() { 
		$('body a').click(function()
		{ 
			/* smooth scroll navigation */
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname)
			{
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']'); 
				if (target.length) {
					$('html,body').animate({ scrollTop: (target.offset().top) }, 300);
				}
			} 
		}); 
  });
	
	/*----- Hamburger menu -----*/
	
	$(".hamburger-menu").on("click", function(){
		$(".inner-hamburger-menu").toggleClass("open");
		
		if( $(".inner-hamburger-menu").hasClass("open") ) {
			console.log("Hamburger menu is opened");
			$(".footer").css('display', 'flex');
		} else {
			console.log("Hamburger menu is closed");
			$(".footer").css('display', 'none');
		}
		
	});
	
	/*----- Slick carousel -----*/
	
  $('.pop-up-image.slick-container').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
		draggable: false,
    arrows: true
  });
	
	$('.overlay.slick-container').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: true
  });
	
});