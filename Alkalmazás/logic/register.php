<?php

    require '../dbcon/dbms.php';


    if ( isset($_POST['displayName']) && !empty($_POST['displayName']) && 
         isset($_POST['regEmail']) && !empty($_POST['regEmail']) && 
         isset($_POST['pass1']) && !empty($_POST['pass1']) && 
         isset($_POST['pass2']) && !empty($_POST['pass2']) ) 
    {
        $displayName = $_POST['displayName'];
        $regEmail = $_POST['regEmail'];
        

        if ($_POST['pass1'] == $_POST['pass2']) 
        {
            $pass = md5($_POST['pass1']);

            //Megnézzük, van-e ilyen felhasználó már:

            // $con = connect('dbname', 'root', '', 3306);

            // $query = "";
            // $result = mysqli_query($con, $query);
            $results = /*mysqli_fetch_all($result);*/ null;

            if ($results != null) 
            {
                print("Ez a felhasználó már létezik!");
            }
            else
            {
                //Felhasználó adatainak feltöltése az adatbázisba:

                // $insertUser = "";
                // $operation = mysqli_query($con, $insertUser);

                print("Regisztráció...");
            }
        }
        else 
        {
            print("Nem megfelelő jelszó!");
        }
    }
    else 
    {
        print("Nem megfelelően töltötted ki a mezőket!");
    }

?>