<?php
	session_start();	// debug csalás
	if(session_status() === PHP_SESSION_NONE || $_SERVER["REQUEST_METHOD"] != "GET" ||
		!array_key_exists('product_id', $_GET)
	){
		header("Location: ../index.php");
	}

	require 'dbms.php';
	$connection = std_connect();
	$qry = "DELETE FROM product WHERE product_id=" . $_GET['product_id'] .";";
	echo $qry;
	$connection->query($qry);
	$connection->close();

	header("Location: ../index.php");
?>
