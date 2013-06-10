/* To load fancybox. */
$(document).ready(function() {
	$(".fancybox").fancybox();
});

/* Everything to do with scrolling. */
$(document).ready(function() {
	/* To have a smooth scroll. */
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash,
	    $target = $(target);
	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
	
	/* To show the scroll button. */
	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$('#scrollup').fadeIn();
		} else {
			$('#scrollup').fadeOut();
		}
	});

	/* To scroll to the top if the scroll button is pressed. */
	$('#scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});
});

/* To deal with the hiding/unhiding sections. */
$(document).ready(function() {
	/* First hide the hidden content on load. */
	$(".hidden").hide();
	
	/* If click to view, swap visibility of hidden and visible content. */
	$(".click-to-view").click(function() {
		$(this).next(".hidden").slideToggle(500);
		$(this).slideToggle(500);
	});
	
	/* If click to hide, swap visibility of hidden and visible content. */
	$(".hide").click(function() {
		$(this).parent(".hidden").slideToggle(500);
		$(this).parent().siblings(".click-to-view").slideToggle(500);
	});
});

/* To deal with form submission. */
	$(document).ready(function(){
		$("#contact-form").validate({
			debug: false,
			rules: {
				name: "required",
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				name: "Please enter your name.",
				email: "A valid email will help me get in touch with you.",
			},
			submitHandler: function(form) {
				// do other stuff for a valid form
				$.post('contact.php', $("#contact-form").serialize(), function(data) {
					$('#results').html(data);
				});
			}
		});
	});