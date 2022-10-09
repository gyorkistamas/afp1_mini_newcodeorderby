
<?php

require 'controller/dbms.php';
require 'controller/userLoggedIn.php';


//Bejelentkező oldalra navigálás:

if ( isset($_POST['LoginBtn']) ) {
    header("Location: view/auth.php");
}

//'Termék megtekintése' gomb eltárolása egy változóban:

$btnViewProduct = "<button class='btn btn-success'>Termék megtekintése</button>";

//Adatbázishoz kapcsolódás + termékek lekérése:

$con = connect("review_site", "afp", "password", 3306);

$query = "SELECT p.product_id, p.product_name, p.description, u.name 
          FROM product AS p INNER JOIN user AS u 
          ON p.added_by = u.user_id";


$execQuery = mysqli_query($con, $query);

/*
    Az adatbázisból lekért termékek eltárolása egy tömböket tartalmazó tömbben.
    Azért így van implementálva, mert ezzel a módszerrel csak végig kell iterálni a tömböket tartalmazó tömbbön...
*/

$products = mysqli_fetch_all($execQuery); //null érték használata a debugoláshoz;


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

        <style>

            @media screen and (max-width: 600px) {
                div.col-4 {
                    width: 90%;
                }
            }

        </style>


        <title>Főoldal</title>
    </head>

    <body>

        <div style="width: 100%; height: 70px; background-color: rgba(0, 0, 0, 0.7); text-align: center;">
            <?php require 'menubar.php';?>
        </div>
        
        <h1 class='text-white' style='padding-top: 2.5%; text-align: center;'>Jelenlegi termékek:</h1>

        <div class='cardpart container' style="width: 75%; background-color: rgba(0, 0, 0, 0.7); margin-top: 2.5%; margin-left: auto; margin-right: auto; padding: 5%;">

            <?php

                if ( $products == null || count($products) == 0 ) {
                    echo "<h2 class='text-white'>Hoppá! Még nem töltött fel senki sem terméket!</h2>";
                }
                else {

                    //Cikluson belül minden egyes tömbbhöz hozzáadom a korábban már eltárolt gombot:
                    
                    for ($i = 0; $i < count($products); $i++) {
                        array_push($products[$i], $btnViewProduct);
                    }

                    echo "<div class='row justify-items-evenly'>";
                        
                            for ($i=0; $i < count($products); $i++) { 

                                echo "<div class='col-md-6 col-12 col-xl-4'>";

                                    echo "<div class='card text-bg-dark mb-3' style='width: 18rem;'>";

                                        echo "<div class='card-header'>".$products[$i][3]."</div>";

                                        echo "<div class='card-body'>";

                                            echo "<h5 class='card-title'>".$products[$i][1]."</h5>";
                                            echo "<p class='card-text'>".$products[$i][2]."</p>";
                                            echo "<a href='item.php?product_Id=".$products[$i][0]."'>".$products[$i][4]."</a>";

                                        echo "</div>";

                                    echo "</div>";

                                echo "</div>";
                            }
                        
                    echo "<div>";

                }

            ?>

        </div>
        
    </body>

</html>

