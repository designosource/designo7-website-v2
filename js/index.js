$(document).ready(function(){

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
	
	function activenumber() {
	
		$home = $("#home").offset().top;
		$team = $("#team").offset().top;
		$cases = $("#cases").offset().top;
		$contact = $("#contact").offset().top;
		$distancewindow = $(window).scrollTop();
		$activenumber = $(".active-number");

		if( $distancewindow < $team ) {
			$activenumber.text("01");
			$("header nav a").removeClass("active");
			$("header nav a:nth-child(1)").addClass("active");
			$("header").addClass("white-nav");
		} else if( $distancewindow >= $team && $distancewindow < $cases ) {
			$activenumber.text("02");
			$("header nav a").removeClass("active");
			$("header nav a:nth-child(2)").addClass("active");
			$("header").removeClass("white-nav");
		} else if( $distancewindow >= $cases && $distancewindow < $contact ) {
			$activenumber.text("03");
			$("header nav a").removeClass("active");
			$("header nav a:nth-child(3)").addClass("active");
			$("header").removeClass("white-nav");
		} else {
			$activenumber.text("04");
			$("header nav a").removeClass("active");
			$("header nav a:nth-child(4)").addClass("active");
			$("header").removeClass("white-nav");
		}
		
	}
	
	activenumber();
	$(window).scroll(function() {
		activenumber();
	});
	
	
});