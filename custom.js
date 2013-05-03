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