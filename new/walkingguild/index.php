<!DOCTYPE html>
<!-- saved from url=(0054)http://twitter.github.com/bootstrap/examples/hero.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Stanford Walking Guild</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .hero-unit {
      	background-image:url("img/dishback.png");
      	background-position:center;
      	background-image-height:100%;
      	position:absolute;
      	top:50%;
      	margin-top:-190px;
      	width:800px;
      }
      .splash-page {
      	color: white;
      }
      #header {
      	color: white;
      }
      #estimate-box {
      	margin-top: 8px;
      	margin-left:15px;
      }
      #submit-button {
      	margin-left:10px;
      }
    </style>
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.united.css" rel="stylesheet">
	<script src="javascript/jquery.js"></script>
	<script src="javascript/smoothscroll.js"></script>
  	<style type="text/css"></style></head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/walkingguild">Stanford Walking Guild</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="/walkingguild">Home</a></li>
              <li><a href="/walkingguild/about.html">About</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <div class="hero-unit">
        <h1 class="splash-page" id="header">How much do <i>you</i> walk?</h1>
		<br>
        <p class="splash-page">Most people have no idea how much they walk. Take your best guess, and then use our 10 second walking calculator to find out how much you really walk.</p>
        <br>
        <p class="splash-page" id="form">
        	<form class="splash-page" action="calculator.html" method="post">Quick estimate: <input type="text" value="0" class="input-small" id="estimate-box" name="estimate" required="required"> min/day
        	<button type="submit" class="btn btn-primary btn-large" id="submit-button">Submit</button>
			</form>
	  	</p>
      </div>

      <hr>

      <footer>
      	<!-- If we ever want a copyright in the footer:
        <p>© Company 2012</p> -->
      </footer>

    </div> <!-- /container -->

  

</body></html>