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
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$department = $_POST['department'];
$minwalking = (int) $_POST['minwalking'];
mysql_query("INSERT INTO $usertable (firstname, lastname, email, department, minwalking) VALUES ('$firstname', '$lastname', '$email', '$department', $minwalking)");
header('Location: http://www.walkingguild.com/thanks');	
?>