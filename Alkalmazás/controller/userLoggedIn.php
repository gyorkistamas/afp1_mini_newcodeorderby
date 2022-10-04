<?php

session_start();

function isLoggedIn(): bool {
    return !isset($_SESSION['UserData']);
}

$status = isLoggedIn();

if ($status) {
    session_destroy();
    header("Location: ../view/auth.php");
}

?>

