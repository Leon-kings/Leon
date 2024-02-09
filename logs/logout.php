<?php
	session_start();
	
	session_destroy();
	$user = $_SESSION['Name'];
	$message = " $user logged out!";
	header("location: ../index.php?message=$message");
?>