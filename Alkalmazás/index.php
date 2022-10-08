
<?php

require 'controller/dbms.php';
require 'controller/userLoggedIn.php';
//$status = isLoggedIn();




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

$btnViewProduct = "<button class='btn btn-info'>Termék megtekintése</button>";

$con = connect("review_site", "afp", "password", 3306);

$query = "SELECT p.product_name, p.description, u.name 
            FROM product AS p INNER JOIN user AS u 
            ON p.added_by = u.user_id";


$execQuery = mysqli_query($con, $query);
$products = mysqli_fetch_all($execQuery); //null;


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

    <div style="width: 100%; height: 70px; background-color: rgba(0, 0, 0, 0.7); text-align: center;">
        <?php require 'menubar.php';?>
    </div>
    
    <h1 class='text-white' style='padding-top: 2.5%; text-align: center;' >Jelenlegi termékek:</h1>

    <div class='cardpart' style="width: 75%; background-color: rgba(0, 0, 0, 0.7); margin-top: 2.5%; margin-left: auto; margin-right: auto; padding: 5%;">

        <?php 
            // if ( isset($_SESSION['UserData']) ) {
            //     $userData = $_SESSION['UserData'];
            //     foreach ($userData as $key => $value) {
            //         echo "<h3 class='text-white'>${key}: ${value}</h3>";
            //     }
            // }
            // else {
            //     echo "<h2 class='text-white'>Hoppá! Nem vagy bejelentkezve!</h2>";
                
            // }

            
            
            // echo "<h1 class='text-white'> Termkék száma: ".count($products)."</h1>"

            if ( $products == null || count($products) == 0 ) {
                echo "<h2 class='text-white'>Hoppá! Még nem töltött fel senki sem terméket!</h2>";
            }
            else 
            {
                for ($i = 0; $i < count($products); $i++) {
                    array_push($products[$i], $btnViewProduct);
                }

                for ($i=0; $i < count($products); $i++) { 
                    echo "<h2 class='text-white'> Termék neve: ".$products[$i][0]."</h2>";

                    echo "<hr class='border border-primary border-3 opacity-75'>";
                    
                    echo "<h3 class='text-white'> Leírás: ".$products[$i][1]."</h3>";
                    echo "<h4 class='text-white'> Hozzáadta: ".$products[$i][2]."</h4>";
                    echo "<a href='item.php'>".$products[$i][3]."</a>";

                    echo "<hr class='border border-primary border-5 opacity-75'>";
                }

            }

        ?>

    </div>
    

    
</body>

</html>

