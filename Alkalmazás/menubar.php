<?php
    // require './controller/userLoggedIn.php';
    // $status = isLoggedIn();

    $route = explode("/", $_SERVER['PHP_SELF']);
    $thisPage = end($route);

    $styleAttr = "margin-top: 1%";

    echo "<form action='' method='post'>";
        echo "<button style='".$styleAttr."' type='submit' name='HomePageBtn' class='btn btn-success'"
        .($thisPage == 'index.php' ? 'disabled' : '').">Főoldal</button> ";
    
        echo $status ? "<button style='".$styleAttr."' type='submit' name='AddProductBtn' class='btn btn-primary'".($thisPage == 'addProduct.php' ? 'disabled' : '').">Termék hozzáadása</button> 
        <button style='".$styleAttr."' type='submit' name='LogoutBtn' class='btn btn-danger'>Kijelentkezés</button>": 
                "<button style='".$styleAttr."' type='submit' name='LoginBtn' class='btn btn-success'>Bejelentkezés/Regisztráció</button>";

    // if ($status) {
        
    //     echo "<button type='submit' name='LogoutBtn' class='btn btn-success'>Kijelentkezés</button>";
 
    // }
    // else {

    //     echo "<button type='submit' name='LoginBtn' class='btn btn-success'>Bejelentkezés/Regisztráció</button>";
                
    // }
       
        // echo "<h1 class='text-white'>".$thisPage."</h1>";
    echo "</form>";
?>

