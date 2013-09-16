<!DOCTYPE html>
<html>
<head>
	<title>Geo File Sharer</title>
	<!-- CSS -->
	<link href="bootstrap/css/bootstrap-flatly.min.css" rel="stylesheet" media="screen">
	<link href="style.css" rel="stylesheet">
	<!-- Javascript -->
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript" ></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js" type="text/javascript"></script>
	<!-- Add fancyBox -->
	<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>
	<script src="custom.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<div id="title">
			<h1>An easy way to find and share links with people around you.
			<a href="#content-div" class="fancybox">Learn more.</a>
			</h1>

			<div style="display:none" id="content-div">
				Ever needed or wanted to share a link to many people without the pain of figuring out a way<br>
				to contact every single one of them?<br>
				<br>
				With Geoshare, now you can:
				<ul>
					<li>Quickly share a link during a group project</li>
					<li>Invite your classmates to take notes on the same Google doc</li>
					<li>Share a funny (and relevant) video when hanging out with your friends</li>
				</ul>
				Simply share a link by filling out a few fields, and your link will instantly be added.<br>
				Anyone can find your link by going to this website. Let them do their fair share of the work!
				<br><br>
				Your location preferences must be on. Links are shared within a certain distance from you and<br>
				expire after a certain amount of time. Specify the distance and expiration time when<br>
				submitting your link.
			</div>
		</div>

		<div id="location-error"></div>
		<div id="loading-location">Finding your location... Refresh in 30 seconds or check your location
		preferences if this fails.</div>

		<h2>Share a link.</h2>
		<form id="form" class="form-horizontal">
			<div id="link-block" class="control-group">
				<label class="control-label">Link</label>
				<div class="controls">
					<input id="link" class="input-xxlarge" type="text" name="link" value="http://">
					<span id="link-error" class="help-inline">Link cannot be blank</span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Description</label>
				<div class="controls">
					<textarea class="input-xxlarge" name="description" rows="3"></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Share with people within</label>
				<div class="controls">
					<select class="input-medium" name="distance">
						<option>10 feet</option>
						<option>100 feet</option>
						<option>1000 feet</option>
						<option>1 mile</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Expire after</label>
				<div class="controls">
					<select class="input-medium" name="expiration">
						<option>1 hour</option>
						<option>1 day</option>
						<option>1 week</option>
						<option>1 month</option>
						<option>3 months</option>
					</select>
				</div>
			</div>
			<!-- Hidden latitude and longitude form elements, filled by showPosition(). -->
			<input type="hidden" name="latitude" id="latitude" />
			<input type="hidden" name="longitude" id="longitude" />
			<div class="control-group">
				<div class="controls">
					<button id="submit" type="submit" value="Submit" class="btn btn-primary" disabled="disabled">Submit</button>
				</div>
			</div>
		</form>

		<div id="results"></div>

		<br>

		<h2>Find a link.</h2>
		<a class="btn btn-primary btn-small disabled" href="#" id="refresh-icon" onClick="return false;"><i class="icon-refresh icon-white"></i></a>
		<div id="reload-links">Refresh link results. Waiting to find location first...</div>

		<br>

		<table class="table table-hover">
			<thead>
				<th>Link</th>
				<th>Description</th>
				<th>Expires</th>
			</thead>
			<tr id="local-link-results"><td></td><td></td><td></td></tr>
		</table>
	</div>
</body>
</html>