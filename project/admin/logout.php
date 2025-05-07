<?php
include 'member.php';

	session_start();
	
	if (!isset($_SESSION['user'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: index1.html");
	} else if(isset($_SESSION['user'])!="") {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: index1.html");
	}
	
	if (isset($_GET['logout'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: index1.html");
		exit;
	}