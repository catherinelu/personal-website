<?php
    $request_method = $_SERVER["REQUEST_METHOD"];
    if($request_method == "GET"){
      $query_vars = $_GET;
    } elseif ($request_method == "POST"){
      $query_vars = $_POST;
    }
    reset($query_vars);
    $t = date("U");

    $file = $_SERVER['DOCUMENT_ROOT'] . "/../data/gdform_" . $t;
    $fp = fopen($file,"w");
    while (list ($key, $val) = each ($query_vars)) {
     fputs($fp,"<GDFORM_VARIABLE NAME=$key START>\n");
     fputs($fp,"$val\n");
     fputs($fp,"<GDFORM_VARIABLE NAME=$key END>\n");
     if ($key == "redirect") { $landing_page = $val;}
    }
    fclose($fp);
    if ($landing_page != ""){
	// Information for connecting to the mySQL server
	$mysql_server = 'walkingguild.db.10110685.hostedresource.com';
	$mysql_user = 'walkingguild';
	$mysql_pass = 'Foggcs377t!';
	$mysql_database = 'walkingguild';

	// Opens connection to the mySQL server. Throws error if connection failed with message.
    $mysqli = mysqli_connect($mysql_server, $mysql_user, $mysql_pass, $mysql_database);

    // Throw error with failed connection
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
	printf("hi");
    session_start();

	header("Location: http://".$_SERVER["HTTP_HOST"]."/$landing_page");
    } else {
	header("Location: http://".$_SERVER["HTTP_HOST"]."/");
    }


?>
