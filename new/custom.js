$(document).ready(function() {
	/* First hide the hidden content on load. */
	$(".hidden").hide();
	
	/* If click to view, swap visibility of hidden and visible content. */
	$(".click-to-view").click(function() {
		$(this).next(".hidden").slideToggle(500);
		$(this).hide();
	});
	
	/* If click to hide, swap visibility of hidden and visible content. */
	$(".hide").click(function() {
		$(this).parent(".hidden").hide();
		$(this).parent().siblings(".click-to-view").slideToggle(500);
	});
});