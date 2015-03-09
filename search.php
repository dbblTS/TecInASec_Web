<?php

	$dbIp = "127.8.149.130";
	$dbUser = "adminFY55S2j";
	$dbPass = "yTDlCJyDTwWs";
	$dbName = "tecinasectemp";
	$dbPort = 3306;

	$conn = mysqli_connect($dbIp, $dbUser, $dbPass, $dbName, $dbPort);

	if (!$conn) {
	    die('Connection Error: ('.mysqli_connect_errno().')'.mysqli_connect_error());
	}

	echo 'Success... ' . mysqli_get_host_info($conn) . "\n";

	mysqli_close($conn);
?>