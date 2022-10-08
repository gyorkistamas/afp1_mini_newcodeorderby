<?php

function connect()
//function connect($dbname, $username, $password, $port)
{
    //$con = mysqli_connect('localhost', $username, $password, $dbname, $port);
    try {
        $con = mysqli_connect('localhost', 'afp', 'password', 'review_site', 3306);
        return $con;
    } catch (\Throwable $th) {
        header("Location: ../view/dbError.php");
    }
}

function std_connect(){
    try {
        return new mysqli('localhost', 'afp', 'password', 'review_site');
    } catch (\Throwable $th) {
        header("Location: ../view/dbError.php");
    }

}

?>
