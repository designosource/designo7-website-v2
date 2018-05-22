$(document).ready(function(){

	$('#close').click(function (e) {
		e.preventDefault();
		$('#intro').fadeToggle('1s', 'linear');
  });
	
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
	
	$(".hamburger-menu").on("click", function(){
		$(".inner-hamburger-menu").toggleClass("open");
		
		if( $(".inner-hamburger-menu").hasClass("open") ) {
			console.log("Hamburger menu is opened");
		} else {
			console.log("Hamburger menu is closed");
		}
		
	});
	
  $('.slick-container').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true
  });
	
});