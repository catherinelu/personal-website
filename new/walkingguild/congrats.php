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
    </style>
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.united.css" rel="stylesheet">
	<script src="javascript/jquery.js"></script>
	<script src="javascript/smoothscroll.js"></script>
  	<style type="text/css"></style></head>
	<style>
	#result {
		color:#4393D9;	
	}
	</style>
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
        <h1 id="result">You walk <?php echo $_GET['t']?> minutes a day!</h1>
        <p>Congratulations, you’ve earned a place in the Stanford Walking Guild and are on your way to better health. Can't get enough of walking? <a href="http://www.eatingwell.com/nutrition_health/weight_loss_diet_plans/diet_exercise_tips/5_ways_to_walk_more">Here are five ideas to get you walking even more.</a></p>
        <br>
        <h2>Join the Stanford Walking Guild and support this walking pledge:</h2>
        <p><i>I pledge to live a happy, healthy life by continuing to walk, and promoting this healthy lifestyle on the Stanford campus.</i></p>
        <p><a class="btn btn-primary btn-large smoothScroll" href="#sign-up">Join Us »</a></p>
      </div>

	  <!-- Walking calculator -->
	  <a name="sign-up"></a>
	  <br>
	  <div>
	  <form class="form-horizontal well" action="submit-walkingguild.php" method="post">
	  <fieldset>
	  	<legend>Join Us</legend>
	  	<div class="control-group">
		  	<div for="firstname">
		  		<label class="control-label">First Name</label>
		  		<div class="controls"><input type="text" name="firstname" required="required"></div>
		  	</div>
	  	</div>
	  	<div class="control-group">
		  	<div for="lastname">
		  		<label class="control-label">Last Name</label>
		  		<div class="controls"><input type="text" name="lastname" required="required"></div>
		  	</div>
	  	</div>
	  	<div class="control-group">
		  	<div for="email">
		  		<label class="control-label">Email</label>
		  		<div class="controls"><input type="email" name="email" required="required"></div>
		  	</div>
	  	</div>
	  	<div class="control-group">
		  	<div for="department">
		  		<label class="control-label">Department</label>
		  		<div class="controls"><input type="text" name="department" required="required"></div>
		  	</div>
	  	</div>
	    <input type="hidden" name="minwalking" value=<?php echo $_GET['t'] ?>>
	    <div class="form-actions">
	  		<button type="submit" class="btn btn-primary">Submit</button>
	  	</div>
	  </fieldset>
	  </form>  
	  </div>
      <hr>

      <footer>
      	<!-- If we ever want a copyright in the footer:
        <p>© Company 2012</p> -->
      </footer>

    </div> <!-- /container -->

  

</body></html>