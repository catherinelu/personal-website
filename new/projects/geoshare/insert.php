<?php
include_once "db.php";

// Get parameters from URL
$lat = $_POST["latitude"];
$lng = $_POST["longitude"];
$link = $_POST["link"];
$desc = $_POST["description"];
$dist = $_POST["distance"];
$expir = $_POST["expiration"];

// Insert into the table
$query = sprintf("INSERT INTO `cglu_wrdp1`.`markers` (`id`, `link`, `desc`, `lat`, `lng`, `time`, `expir`, `dist`) VALUES (NULL, '%s', '%s', '%s', '%s', CURRENT_TIMESTAMP, '%s', '%s');",
 				 mysql_real_escape_string($link),
 				 mysql_real_escape_string($desc),
 				 $lat,
 				 $lng,
 				 mysql_real_escape_string($expir),
 				 mysql_real_escape_string($dist));
$result = mysql_query($query, $connection);
if (!$result) {
	print "Query failed: " . mysql_error();
}

mysql_close($connection);

print "Your link has been successfully added!";

?>