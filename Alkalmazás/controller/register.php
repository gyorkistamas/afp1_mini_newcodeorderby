<?php

    require 'dbms.php';

    // Input mezők vizsgálata, aszerint, hogy lett beléjük írva:

    if ( isset($_POST['displayName']) && !empty($_POST['displayName']) && 
         isset($_POST['regEmail']) && !empty($_POST['regEmail']) && 
         isset($_POST['pass1']) && !empty($_POST['pass1']) && 
         isset($_POST['pass2']) && !empty($_POST['pass2']) ) 
    {
        $displayName = $_POST['displayName'];
        $regEmail = $_POST['regEmail'];
        

        if ($_POST['pass1'] == $_POST['pass2']) 
        {
            //MD5-ös titkosított jelszó eltárolása:
            
            $pass = md5($_POST['pass1']);

            //Megnézzük, van-e ilyen felhasználó már:

            $con = connect();

            $query = "SELECT * FROM user WHERE email LIKE '".$regEmail."'";
            $result = mysqli_query($con, $query);
            $results = mysqli_fetch_all($result);

            if ($results != null) 
            {
                //print("Ez a felhasználó már létezik!");
                header("Location: ../view/regfeedback.php?success=False&error=Ez a felhasználó létezik.");
            }
            else
            {
                //Felhasználó adatainak feltöltése az adatbázisba:

                $insertUser = "INSERT INTO user (name, email, password, moderator) VALUES ('".$displayName."', '".$regEmail."', '".$pass."', 0)";
                $operation = mysqli_query($con, $insertUser);

                //print("Regisztráció...");
                header("Location: ../view/regfeedback.php?success=True");
            }
        }
        else 
        {
            //print("Nem megfelelő jelszó!");
            header("Location: ../view/regfeedback.php?success=False&error=Nem megfelelő jelszó!");
        }
    }
    else 
    {
        //print("Nem megfelelően töltötted ki a mezőket!");
        header("Location: ../view/regfeedback.php?succes=False&error=Nem megfelelően kitöltött mezők!");
    }

?>
