<?php
	//session_start();	// debug csalás
	require 'userLoggedIn.php';
	if(!isModerator() || $_SERVER["REQUEST_METHOD"] != "GET" ||
		!array_key_exists('table', $_GET) ||
		!array_key_exists('field', $_GET) ||
		!array_key_exists('value', $_GET)
	){
		header("Location: ../index.php");
	}

	require 'dbms.php';
	$connection = std_connect();
	$qry = "DELETE FROM " . $_GET['table'] . " WHERE " . $_GET['field'] . "=" . $_GET['value'] .";";
	//echo $qry;
	//die();
	$connection->query($qry);
	$connection->close();

	if(array_key_exists('redirect', $_GET)){
		header("Location: " . $_GET['redirect']);
	}else{
		header("Location: ../index.php");
	}
?>
