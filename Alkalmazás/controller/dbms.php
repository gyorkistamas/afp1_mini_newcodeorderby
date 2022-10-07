<?php

function connect($dbname, $username, $password, $port)
{
    $con = mysqli_connect('localhost', $username, $password, $dbname, $port);
    return $con;
}

function std_connect(){
	return new mysqli('localhost', 'afp', 'password', 'review_site');
}

?>
