
<?php

require 'controller/userLoggedIn.php';
$status = isLoggedIn();




//Kijelentkezés megvalósítása:

if ( isset($_POST['LogoutBtn']) ) {
    unset($_SESSION['UserData']);
    session_destroy();
    header("Location: view/auth.php");
}

//Bejelentkező oldalra navigálás:

if ( isset($_POST['LoginBtn']) ) {
    header("Location: view/auth.php");
 }


?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="imgs/favicon.png">
    <link rel="stylesheet" type="text/css" href="./bootstrap,jquery/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./styles/global.css">
    <script src="./bootstrap,jquery/jquery-3.6.1.min.js"></script>
    <script src="./bootstrap,jquery/bootstrap.min.js"></script>

    <title>Főoldal</title>
</head>

<body>

    
    <div style="width: 100%; height: 70px; background-color: rgba(0, 0, 0, 0.7);">
        <?php require 'menubar.php';?>
    </div>

    
    <h1 class='text-white'>Felhasználó adatai:</h1>


    <?php 
    if ( isset($_SESSION['UserData']) ) {
        $userData = $_SESSION['UserData'];
        foreach ($userData as $key => $value) {
            echo "<h3 class='text-white'>${key}: ${value}</h3>";
        }
    }
    else {
        echo "<h2 class='text-white'>Hoppá! Nem vagy bejelentkezve!</h2>";
        
    }
    
    ?>

    
</body>

</html>