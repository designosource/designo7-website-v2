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
	
	resizewindow();
	
	$(window).resize(function() {
		resizewindow();
	});
	
	$(window).scroll(function(){
		showFixedBottomMobileNavigation();
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
	
	$('.carousel-pop-up .carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
		autoplay: true,
		autoplaySpeed: 4000,
		arrows: false
  });
	
	/*----- Clone quote section of member page -----*/
	
	$( ".member-information" ).clone().appendTo( "#member .content-rightblock" );
	
	/*----- Carousel pop-up -----*/
	
	$(".carousel-pop-up-button").on("click", function(){
		$(".carousel-pop-up").fadeIn(300);
		console.log("Member pop up active");
	});
	
	$(".carousel-pop-up-close").on("click", function(){
		$(".carousel-pop-up").fadeOut(300);
		console.log("Member pop up inactive");
	});
	
	/*----- Fixed bottom mobile navigation -----*/
	
	showFixedBottomMobileNavigation();
	
	function showFixedBottomMobileNavigation() {
	
		$biggrid = $(".big-grid").height();
		$biggrid2 = $(".big-grid-2").height();
		$distancewindow = $(window).scrollTop();
		$windowheight = $(window).height();
		
		if( ($distancewindow + $windowheight) > ($biggrid2 - 80) || ($distancewindow + $windowheight) > ($biggrid - 80) ) {
			$(".fixed-bottom-mobile-navigation").addClass("show");
		}

		/*if( $distancewindow < $team ) {
			$(".fixed-bottom-mobile-navigation").addClass("show");
		}*/
		
	}
	
	/*----- Keypress functions / minigame -----*/
	
	var kkeys = [],
  konami = "38,38,40,40,37,39,37,39,66,65"; /* up up, down down, left right, left right, b, a */
	
	var dskeys = [],
  designo = "68,69,83,73,71,78,79,83,79,85,82,67,69"; /* designosource */

	$(document).keydown(function (e) {

		kkeys.push(e.keyCode);

		if (kkeys.toString().indexOf(konami) >= 0) {

			$(document).unbind('keydown', arguments.callee);
			
			console.log("Konami code activated!");

			$code = '<iframe style="width: 100vw; height: 100vh; pointer-events: none;" src="https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0&amp&autoplay=1;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
			
			$('body').html($code);

		}
		
		dskeys.push(e.keyCode);

		if (dskeys.toString().indexOf(designo) >= 0) {

			$(document).unbind('keydown', arguments.callee);

			console.log("Easter egg activated!");
			
			$('#hiddengame').css("display", "block");
			$cookiescript = "<script type='text/javascript' src='js/cookie.js'></script><script type='text/javascript' src='../js/cookie.js'></script>";
			$($cookiescript).appendTo("footer");
	
			if( $.cookie("hiddenscore") != null ) {
				$count = $.cookie("hiddenscore");
				$opacity = 1 - ( $count * 0.02 );
			} else {
				$count = 0;
				$opacity = 1;
			}
			
			$("#hiddenscore").html($count);
			
			$posleft = (Math.random() * 100);
			$postop = (Math.random() * 100);

			if( $postop <= 10 ) {
				$postop = 10;
			} else if( $postop >= 90 ) {
				$postop = 90;
			}

			if( $posleft <= 10 ) {
				$posleft = 10;
			} else if( $posleft >= 90 ) {
				$posleft = 90;
			}
			
			if( $opacity <= 0.24 ) {
				$opacity = 0.24;
			}
			
			$("#hiddenblock").css("top", $postop + "%").css("left", $posleft + "%").css("opacity", $opacity);
			
		}

	});
	
	$("#hiddenblock").on("click", function(){
	
		$count++;
		$("#hiddenscore").html($count);
		$.cookie("hiddenscore", $count);
		
		$posleft = (Math.random() * 100);
		$postop = (Math.random() * 100);
		$opacity = $opacity - 0.02;
		
		if( $postop <= 10 ) {
			$postop = 10;
		} else if( $postop >= 90 ) {
			$postop = 90;
		}
		
		if( $posleft <= 10 ) {
			$posleft = 10;
		} else if( $posleft >= 90 ) {
			$posleft = 90;
		}
		
		if( $opacity <= 0.24 ) {
			$opacity = 0.24;
		}
		
		$("#hiddenblock").css("top", $postop + "%").css("left", $posleft + "%").css("opacity", $opacity);
	
	});
	
	$("#escape").on("click", function(){
		$("#hiddengame").css("display", "none");
	});
	
	
	
});