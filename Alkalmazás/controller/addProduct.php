<?php

if(!isset($_POST['productName']) || !isset($_POST['productDesc']))
{
	header("Location: ../view/addProduct.php");
}



require "dbms.php";
require "userLoggedin.php";

if(!isLoggedIn())
{
	header("Location: ../view/auth.php");
}


$con = connect();



$productName = $_POST['productName'];
$productDesc = $_POST['productDesc'];
$userData = $_SESSION['UserData'];
var_dump($userData);
$added_id = $userData['Id'];


$insertProduct = "INSERT INTO product (product_name, description, added_by) VALUES ('".$productName."', '".$productDesc."', '".$added_id."')";
try {

	$operation = mysqli_query($con, $insertProduct);
	header("Location: ../view/addedSuccess.php");

} catch (\Throwable $th) {
	echo "Hiba lépett fel az adatbázisba történő felvitel során!";
	echo $th;
}