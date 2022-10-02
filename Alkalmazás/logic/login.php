<?php

    require '../dbcon/dbms.php';
    if ( isset($_POST['loginEmail']) && !empty($_POST['loginEmail']) && 
         isset($_POST['loginPass']) && !empty($_POST['loginPass']) ) 
    {
        $loginEmail = $_POST['loginEmail'];
        $loginPass = md5($_POST['loginPass']);

        //Felhasználó lekérdezése az adatbázisból:

        $con = connect('review site', 'root', '', 3306);
        $query = "SELECT * FROM user WHERE email LIKE '".$loginEmail."'";
        $result = mysqli_query($con, $query);
        $results = mysqli_fetch_all($result);

        if ($results == null) 
        {
            print("Ez a felhasználó nem létezik");
        }
        else 
        {
            //Felhasználó adatainak lekérése az adatbázisból a session létrehozásához:

            $query = "SELECT name, email, password, moderator FROM user WHERE email LIKE '".$loginEmail."'";
            $aggregate = mysqli_query($con, $query);
            $aggregates = mysqli_fetch_row($aggregate);

            $name = $aggregates[0];
            $email = $aggregates[1];
            $password = $aggregates[2];
            $role = $aggregates[3] == 0 ? "User" : "Moderator";

            //Felhasználó adatainak eltárolása egy tömbben és annak továbbadása Session változóként:
            
            $UserData = array('Name' => $name, 'Email' => $email, 'Password' => $password, 'Role' => $role);
            session_start();
            $_SESSION['UserData'] = $UserData;
            //header("Location: ../index.php");
        }

    }
    else
    {
        print("Nem töltöttél ki minden mezőt!");
    }

   

?>