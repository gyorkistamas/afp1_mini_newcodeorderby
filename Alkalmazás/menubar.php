<?php
    // require './controller/userLoggedIn.php';
    // $status = isLoggedIn();

    $route = explode("/", $_SERVER['PHP_SELF']);
    $thisPage = end($route);

    

    

    echo "<form action='' method='post'>";

    echo $status ? "<button type='submit' name='LogoutBtn' class='btn btn-success'>Kijelentkezés</button>
    <button type='submit' name='AddProductBtn' class='btn btn-success'>Termék hozzáadása</button> ": 
        "<button type='submit' name='LoginBtn' class='btn btn-success'>Bejelentkezés/Regisztráció</button>";

    // if ($status) {
        
    //     echo "<button type='submit' name='LogoutBtn' class='btn btn-success'>Kijelentkezés</button>";
 
    // }
    // else {

    //     echo "<button type='submit' name='LoginBtn' class='btn btn-success'>Bejelentkezés/Regisztráció</button>";
                
    // }
        echo "<button type='submit' name='HomePageBtn' class='btn btn-success'>Főoldal</button>";
        echo "<h1>".$thisPage."</h1>";
    echo "</form>";
?>

