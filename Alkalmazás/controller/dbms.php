<?php

function connect($dbname, $username, $password, $port)
{
    $con = mysqli_connect('localhost', $username, $password, $dbname, $port);
    return $con;
}

function std_connect(){
	return new mysqli('localhost', 'afp', substr(file_get_contents("controller/root_passwd.txt"), 0, -1), 'review_site');
}

?>
