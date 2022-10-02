<?php

session_start();

function isLoggedIn(): bool {
    return !isset($_SESSION['UserData']);
}

$status = isLoggedIn();

if ($status) {
    header("Location: ./auth.php");
}

?>

