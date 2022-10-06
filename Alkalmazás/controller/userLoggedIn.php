<?php

session_start();

function isLoggedIn(): bool {
    return isset($_SESSION['UserData']);
}

?>

