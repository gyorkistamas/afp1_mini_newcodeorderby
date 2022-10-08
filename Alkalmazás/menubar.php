<?php
    $status = isLoggedIn();

    $route = explode("/", $_SERVER['PHP_SELF']);
    $thisPage = end($route);

    $styleAttr = "margin-top: 1%";

    if ( isset($_POST['HomePageBtn']) ) {
        header("Location: ../index.php");
    }

    if ( isset($_POST['AddProductBtn']) ) {
        header("Location: view/addProduct.php");
    }

    echo "<form action='' method='post'>";

        echo "<button style='".$styleAttr."; color: DarkSlateGray;' type='submit' name='HomePageBtn' class='btn btn-info'"
        .($thisPage == 'index.php' ? 'disabled' : '').">Főoldal</button> ";
    
        echo $status ? "<button style='".$styleAttr."; color: DarkSlateGray;' type='submit' name='AddProductBtn' class='btn btn-info'".($thisPage == 'addProduct.php' ? 'disabled' : '').">Termék hozzáadása</button> 
            <button style='".$styleAttr."' type='submit' name='LogoutBtn' class='btn btn-danger'>Kijelentkezés</button>": 
                "<button style='".$styleAttr."; color: DarkSlateGray;' type='submit' name='LoginBtn' class='btn btn-info'".($thisPage == 'auth.php' ? 'disabled' : '').">Bejelentkezés/Regisztráció</button>";
    
    echo "</form>";
?>

