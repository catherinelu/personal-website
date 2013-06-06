<?php
//Connect to database
$hostname = "walkingguild.db.10110685.hostedresource.com";
$username = "walkingguild";
$password = "Foggcs377t!";
$dbname = "walkingguild";
$usertable = "powerwalkers";
mysql_connect($hostname, $username, $password) or die("<html><script language='JavaScript'>alert('Sorry, we're currently having a database connection issue. Please check back again later')</script></html>");
mysql_select_db($dbname);
// This works!
//mysql_query("INSERT INTO $usertable (firstname, lastname, email, minwalking, contactok) VALUES ('testfirst', 'testlast', 'testemail', 100, 1)");
//$firstname = $_POST['firstname'];
//$lastname = $_POST['lastname'];
//$email = $_POST['email'];
$minwalking = (int) intval($_POST['total']);
//mysql_query("INSERT INTO $usertable (firstname, lastname, email, minwalking, contactok) VALUES ('$firstname', '$lastname', '$email', $minwalking, 1)");
if ($minwalking >= 30) { // redirect to get them to sign up 
	header('Location: http://www.walkingguild.com/congrats.php?t=' . $minwalking);	
	exit;
} else {
	header('Location: http://www.walkingguild.com/result.php?t=' . $minwalking);	
	exit;
}
?>