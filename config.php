<?php
	
	$dbhost = "localhost";
	$dbusername = "root";
	$dbpassword = "password";
	$database = "crud";

	$mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $database);

	$config_date_format = "Y-m-d h:m:s";
	$config_app_name = "CRUD";
	$config_max_records_per_page = 5;
?>
