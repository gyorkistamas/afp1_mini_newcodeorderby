<?php
	//session_start();	// debug csalás
	require 'userLoggedIn.php';
	if(session_status() === PHP_SESSION_NONE || $_SERVER["REQUEST_METHOD"] != "POST" ||
		!array_key_exists('message', $_POST) || !array_key_exists('product_id', $_POST)
	){
		header("Location: ../index.php");
	}

	require 'dbms.php';
	$connection = std_connect();
	$qry = "INSERT INTO review (added_by, message, product_id) VALUES " .
		'(' . $_SESSION['UserData']['Id'] . ', ' . "'" . $_POST['message'] . "'" . ', ' . $_POST['product_id'] . ');';
	//echo $qry;
	$connection->query($qry);
	$connection->close();

	header("Location: ../item.php?product_Id=" . $_POST['product_id']);
?>
