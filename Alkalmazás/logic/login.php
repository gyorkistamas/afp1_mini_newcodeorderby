<?php

    require '../dbcon/dbms.php';

    if ( isset($_POST['loginEmail']) && !empty($_POST['loginEmail']) && 
         isset($_POST['loginPass']) && !empty($_POST['loginPass']) ) 
    {
        $loginEmail = $_POST['loginEmail'];
        $loginPass = md5($_POST['loginPass']);

        //Felhasználó lekérdezése az adatbázisból:

        // $con = connect('dbname', 'root', '', 3306);
        // $query = "";
        // $result = mysqli_query($con, $query);
        $results = /*mysqli_fetch_all($result);*/ null;

        if ($results == null) 
        {
            print("Ez a felhasználó nem létezik");
        }
        else 
        {

            print("Bejelentkezés...");
            
            //Felhasználó adatainak lekérése az adatbázisból a session létrehozásához:

            // $query = "insert the query here!";
            // $aggregate = mysqli_query($con, $query);
            // $aggregates = mysqli_fetch_row($aggregate);

            // $email = $aggregates[0];
            // ...


            
            // $_SESSION['email'] = $email;
        }

    }
    else
    {
        print("Nem töltöttél ki minden mezőt!");
    }

   

?>