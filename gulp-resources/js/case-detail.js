$(document).ready(function(){

	$(".pop-up-image .slick-prev").on("click", function(){
		$(".overlay .slick-prev").click();
	});
	
	$(".pop-up-image .slick-next").on("click", function(){
		$(".overlay .slick-next").click();
	});
	
});