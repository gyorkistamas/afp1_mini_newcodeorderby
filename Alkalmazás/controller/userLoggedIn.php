<?php

session_start();

function isLoggedIn(): bool {
    return isset($_SESSION['UserData']);
}

function isModerator(): bool {
	if(!isLoggedIn()){ return false; }
	return ($_SESSION['UserData']['Role'] == "Moderator");
}

?>

