$(document).ready(function(){

function activenumber() {
	
		$home = $("#home").offset().top;
		$team = $("#team").offset().top;
		$cases = $("#cases").offset().top;
		$contact = $("#contact").offset().top;
		$distancewindow = $(window).scrollTop();
		$activenumber = $(".active-number");
		$variable = 50;

		if( $distancewindow + $variable < $team ) {
			$activenumber.text("01");
			$("header nav a").removeClass("active");
			$("header nav a:nth-child(1)").addClass("active");
			$("header").addClass("white-nav");
		} else if( $distancewindow + $variable >= $team && $distancewindow + $variable < $cases ) {
			$activenumber.text("02");
			$("header nav a").removeClass("active");
			$("header nav a:nth-child(2)").addClass("active");
			$("header").removeClass("white-nav");
		} else if( $distancewindow + $variable >= $cases && $distancewindow + $variable < $contact ) {
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
	
function fixedlogo() {
	$team = $("#team").offset().top;
	$distancewindow = $(window).scrollTop();
	
	if( $distancewindow >= $team ) {
		$("#logo").addClass("fixed");
	} else {
		$("#logo").removeClass("fixed");
	}
	
}
	
function hamburgerwhitenav() {
	$home = $("#home").offset().top;
	$team = $("#team").offset().top;
	$cases = $("#cases").offset().top;
	$contact = $("#contact").offset().top;
	$distancewindow = $(window).scrollTop();
	$activenumber = $(".active-number");

	if( $distancewindow < $team ) {
		$(".inner-hamburger-menu").addClass("white-nav");
	} else {
		$(".inner-hamburger-menu").removeClass("white-nav");
	}
}
	
	activenumber();
	fixedlogo();
	hamburgerwhitenav();
	$(window).scroll(function() {
		activenumber();
		fixedlogo();
		hamburgerwhitenav();
	});
	
});