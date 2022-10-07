<?php

function connect()
//function connect($dbname, $username, $password, $port)
{
    //$con = mysqli_connect('localhost', $username, $password, $dbname, $port);
    $con = mysqli_connect('localhost', 'afp', 'password', 'review_site', 3306);
    return $con;
}

function std_connect(){
	return new mysqli('localhost', 'afp', 'password', 'review_site');
}

?>
