
<?php

require './controller/userLoggedIn.php';

$userData = $_SESSION['UserData'];

//Kijelentkezés megvalósítása:

if ( isset($_POST['LogoutBtn']) ) {
    unset($_SESSION['UserData']);
    session_destroy();
    header("Location: ./view/auth.php");
}


?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Front Page</title>
</head>
<body>
    <h1>User Details:</h1>

    <?php foreach ($userData as $key => $value) {
        echo "<h3>${key}: ${value}</h3>";
    }?>

    <form action='' method='post'>
        <button type='submit' name='LogoutBtn'>Logout</button>
    </form>
</body>
</html>