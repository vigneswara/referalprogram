<?php
	// Connect to the database =========================================================
	# Type="MYSQL"
	# HTTP="true"
	$hostname = "localhost";
	
	$database = "itcomp";
	$dbusername = "admin";
	$dbpassword = "password";

	$conn = mysql_pconnect("$hostname", "$dbusername", "$dbpassword") or die(mysql_error());
	mysql_select_db($database, $conn) or die(mysql_error());
	// =================================================================================
	
	?>