<?php
	//$db_host = "localhost";
	//$user_name = "phil";
	//$password = "doughnut";
	//$db_name = "bakery_inc";
	//good practice to define variables as constants (these are global throughout the script)
	define("DB_HOST", "localhost");
	define("USER_NAME", "phil");
	define("DB_PASS", "doughnut");
	define("DB_NAME", "bakery_inc");
	


	$connection = mysqli_connect(DB_HOST,USER_NAME,DB_PASS,DB_NAME);
	if (!$connection) {
		die ("Database connection failed: ". mysqli_connect_error().
			"(". mysqli_connect_errno(). ")" );
	}
?>