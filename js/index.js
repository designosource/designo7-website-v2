$(document).ready(function(){

	/*----- Intro animation -----*/
	
	$('#close').click(function (e) {
		e.preventDefault();
		$('#intro').fadeToggle('1s', 'linear');
  });
	
	/*----- Smooth scroll -----*/
	
	/*$(function() { 
		$('body a').click(function()
		{ 
			/* smooth scroll navigation */
			/*if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname)
			{
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']'); 
				if (target.length) {
					$('html,body').animate({ scrollTop: (target.offset().top) }, 300);
				}
			} 
		}); 
  });*/
	
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
	
	function resizewindow() {
		$windowwidth = $(window).width();
		
		$(".inner-hamburger-menu").removeClass("open");
		
		/* check window width */
		if( $windowwidth >= 750 + 1 ) {
			$(".footer").css("display", "flex");
			$( "#member .content-rightblock" ).addClass("scrollbar");
		} else {
			$(".footer").css("display", "none");
			$( "#member .content-rightblock" ).removeClass("scrollbar");
		}
	}
	
	$(window).resize(function() {
		resizewindow();
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
	
	/*----- Clone quote section of member page -----*/
	
	$( ".member-information" ).clone().appendTo( "#member .content-rightblock" );
	
});