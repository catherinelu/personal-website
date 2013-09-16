function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
	} else {
		$("location-error").html("Geolocation is not supported.");
	}
}

/* This function is called once the user's location is found. */
function showPosition(position) {
	$("#latitude").val(position.coords.latitude);
	$("#longitude").val(position.coords.longitude);
	$("#loading-location").html("Location found!");
	$("#loading-location").animate({ opacity: 0 }, 1000);
	$("#submit").removeAttr("disabled");
  $("#reload-links").fadeIn(1000, function() {
    $("#reload-links").text("Reload link results.");
  });
  $("#refresh-icon").removeClass("disabled");

  /* Updates the links. */
  $.get("get_results.php", {lat: $("#latitude").val(), lng: $("#longitude").val() }, function(data) {
    $("#local-link-results").replaceWith(data);
  });
}

/* This function is called to handle errors when getting the user's location. */
function showError(error) {
	switch(error.code) {
		case error.PERMISSION_DENIED:
			$("location-error").html("User denied the request for Geolocation.");
			break;
		case error.POSITION_UNAVAILABLE:
			$("location-error").html("Location information is unavailable.");
      break;
    case error.TIMEOUT:
     	$("location-error").html("The request to get user location timed out.");
      break;
    case error.UNKNOWN_ERROR:
      $("location-error").html("An unknown error occurred.");
      break;
    default:
      $("location-error").html("An unknown error occurred.");
	}
}

/* Validate the link. If it is blank, show an error message. */
var validateLink = function() {
	var link = $("#link").val();
	if (link == "" || link == "http://" || link == "https://") {
		$("#link-error").show();
		$('#link-block').addClass("error");
		return false;
	} else {
		$("#link-error").hide();
		$('#link-block').removeClass("error");
		return true;
	}
}

$(document).ready(function() {
  /* Add fancybox. */
  $(".fancybox").fancybox();

	/* Hide the error message(s). */
	$("#link-error").hide();
  $("#resuls").hide();

	/* Gets the user's location (with permission). */
	navigator.geolocation.getCurrentPosition(showPosition, showError, {timeout:10000});

	/* When the link field changes, validate it. */
	$("#link").bind("change keyup", validateLink);


  /* When submitting the form, do validation and then send to PHP script. */
  $("#submit").click(function(event) {
    /* Submit the form to the PHP script. */
    $("#form").validate({
      debug: false,
      submitHandler: function(form) {
        $.post("insert.php", $("#form").serialize(), function(data) {
          $("#results").fadeIn(1000, function() {
            $("#results").html(data);
            /* Also refresh the links. */
            $.get("get_results.php", {lat: $("#latitude").val(), lng: $("#longitude").val() }, function(data) {
              $("#local-link-results").replaceWith(data);
            });
          });
          $("#results").fadeOut(3000);
        });
      }
    });
  });

  /* When the load links button is pressed, get the valid links. */
  $("#refresh-icon").click(function(event) {
    $.get("get_results.php", {lat: $("#latitude").val(), lng: $("#longitude").val() }, function(data) {
      $("#local-link-results").replaceWith(data);
    });
  });
});