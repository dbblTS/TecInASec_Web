<?php
	$link = mysqli_connect('127.8.149.130', 'adminFY55S2j', 'yTDlCJyDTwWs', 'tecinasectemp', '3306');

	if (!$link) {
	    die('Connection Error: ('.mysqli_connect_errno().')'.mysqli_connect_error());
	}

	echo 'Success... ' . mysqli_get_host_info($link) . "\n";

	mysqli_close($link);
?>