<?php

function connect($dbName, $userName, $pass, $port) 
{
    $connection = mysqli_connect('localhost', $userName, $pass, $dbName, $port);
    /*
    if (!isset($connection)) {
        die("Hiba:".mysqli_errno($connection));
    }
    */
    return $connection;
}

?>