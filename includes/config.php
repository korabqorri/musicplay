<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/Tirane");

	$con = mysqli_connect("localhost:81", "root", "", "musicplay");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>