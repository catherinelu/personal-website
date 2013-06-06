/* Cloud Parallax */
$(window).scroll(function() {
	$("#cloud1").css({
		top: function(index, value) {
			return 50 - $(window).scrollTop() * .2;
		}
	});
	$("#cloud2").css({
		top: function(index, value) {
			return 10 - $(window).scrollTop() * 1.2;
		}
	});
	$("#cloud3").css({
		top: function(index, value) {
			return 300 - $(window).scrollTop() * 1.6;
		}
	});
	$("#cloud4").css({
		top: function(index, value) {
			return 400 - $(window).scrollTop() * .7;
		}
	});
});


/* Ensure the water goes to the end of the screen */
var waterFunction = function() {
	$("#water-back").css("width", ($(window).width() + 30) + "px");
	$("#water-front").css("width", ($(window).width() + 50) + "px");
}
$(document).ready(waterFunction);
$(window).bind("resize", waterFunction);


/* Make bubbles appear and disappear */
$(window).scroll(function() {
	if ($(window).scrollTop() + $(window).height() >= 1500) {
		$("#link-about").fadeIn(2000);
		$("#button-about").fadeIn(2000);
		
		$("#link-resume").fadeIn(2000);
		$("#button-resume").fadeIn(2000);
		
		$("#link-contact").fadeIn(2000);
		$("#button-contact").fadeIn(2000);
	} else {
		$("#link-about").fadeOut(200);
		$("#button-about").fadeOut(200);

		$("#link-resume").fadeOut(200);
		$("#button-resume").fadeOut(200);

		$("#link-contact").fadeOut(200);
		$("#button-contact").fadeOut(200);
	}
});

/*$(window).scroll(function() {
	if (isScrolledIntoView('#content')) {
		$("#link-about").fadeIn('500');
		$("#button-about").fadeIn('500');
		alert('hi!');
	}
});*/


/* isScrolledIntoView Function */
function isScrolledIntoView(elem) {
	var docTop = $(window).scrollTop();
	var docBottom = docTop + $(window).height();
	
	var elemTop = $(elem).offset().top;
	var elemBottom = elemTop + $(elem).height();
	
	return ((elemBottom >= docTop) && (elemTop <= docBottom));
}