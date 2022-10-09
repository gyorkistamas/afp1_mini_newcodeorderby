<?php
	session_start();	// debug csalás
	if(session_status() === PHP_SESSION_NONE || $_SERVER["REQUEST_METHOD"] != "GET" ||
		!array_key_exists('table', $_GET) ||
		!array_key_exists('field', $_GET) ||
		!array_key_exists('value', $_GET)
	){
		header("Location: ../index.php");
	}

	$table = $_GET['table'];
	unset($_GET['table']);
	$field = $_GET['field'];
	unset($_GET['field']);
	$value = $_GET['value'];
	unset($_GET['value']);
	if(isset($_GET['redirect'])){
		$redirect = $_GET['redirect'];
		unset($_GET['redirect']);
	}

	require 'dbms.php';
	$connection = std_connect();
	$qry = 'UPDATE ' . $table  . ' SET ';
	foreach($_GET as $k => $v){
		$qry .= $k . "='" . $v . "',";
	}
	$qry = substr($qry, 0, strlen($qry)-1);
	$qry .= ' WHERE ' . $field . '=' . $value .';';
	$connection->query($qry);
	$connection->close();

	if(isset($redirect)){
		header("Location: " . $redirect);
	}else{
		header("Location: ../index.php");
	}
?>
