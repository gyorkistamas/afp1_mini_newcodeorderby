<?php

function connect($dbname, $username, $password, $port)
{
    $con = mysqli_connect('localhost', $username, $password, $dbname, $port);
    return $con;
}

?>