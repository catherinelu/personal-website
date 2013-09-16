<?php
include_once "db.php";

function get_expir($row) {
  $generic_expir = $row->expir;
  $timestamp = $row->time;
  date_default_timezone_set('America/Los_Angeles');

  switch ($generic_expir) {
    case "1 hour":
      $time = strtotime($timestamp . ' +1 hour');
      return $time <= date_default_timezone_get();
    case "1 day":
      $time = strtotime($timestamp . '+1 day');
      return $time <= date_default_timezone_get();     
    case "1 week":
      $time = strtotime($timestamp . '+1 week');
      return $time <= date_default_timezone_get();     
    case "1 month":
      $time = strtotime($timestamp . '+1 month');
      return $time <= date_default_timezone_get();     
    case "3 months":
      $time = strtotime($timestamp . '+3 months');
      return $time <= date_default_timezone_get();
  }
}

function is_local_link($row) {
  $lat = $_GET["lat"];
  $lng = $_GET["lng"];

  return TRUE;
}

$query = sprintf("SELECT * FROM  `markers` WHERE  `time` >=  '%s';", strtotime("-3 months"));
$result = mysql_query($query);

while ($row = mysql_fetch_object($result)) {
  if (is_local_link($row)) {
    print '<tr><td><a href="' . $row->link . '">' . $row->link .'</a></td><td>' . $row->desc . '</td><td></td>' . get_expir($row) . '</tr>';
  }
}
?>