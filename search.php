<?php 
	define('DB_HOST', getenv('127.8.149.130'));
	define('DB_PORT', getenv('3306'));
	define('DB_USER', getenv('adminFY55S2j'));
	define('DB_PASS', getenv('yTDlCJyDTwWs'));
	define('DB_NAME', getenv('tecinasectemp'));

	$dbhost = constant("DB_HOST"); // Host name 
	$dbport = constant("DB_PORT"); // Host port
	$dbusername = constant("DB_USER"); // Mysql username 
	$dbpassword = constant("DB_PASS"); // Mysql password 
	$db_name = constant("DB_NAME"); // Database name 

	$MySQLConnect = mysqli_connect($dbhost, $dbusername, $dbpassword, "", $dbport) or die("Error: " . mysqli_error($MySQLConnect));
	mysqli_select_db($MySQLConnect, $db_name) or die("Error: " . mysqli_error($MySQLConnect));

	if ($MySQLConnect == false) {
		echo "Not connected...";
	}
	else {
		echo "Connected!!";
	}

?>