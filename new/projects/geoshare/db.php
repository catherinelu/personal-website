<?php

$host="localhost";
//$username="cglu_user";
//$password="p4lmtre3";
$username="cglu";
$password="s5cltI;ny7Hu";
$database="cglu_wrdp1";

// Open a connection to the mySQL server
$connection = mysql_connect($host, $username, $password);
if (!$connection) {
 	print "Failed to connect to the server: " . mysql_error();
}

// Set the active mySQL database
$db_selected = mysql_select_db($database, $connection);
if (!db_selected) {
	print "Failed to insert into the database: " . mysql_error();
}

?>