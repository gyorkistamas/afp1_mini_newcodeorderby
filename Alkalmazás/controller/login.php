<?php

    require 'dbms.php';
    if ( isset($_POST['loginEmail']) && !empty($_POST['loginEmail']) && 
         isset($_POST['loginPass']) && !empty($_POST['loginPass']) ) 
    {
        $loginEmail = $_POST['loginEmail'];
        $loginPass = md5($_POST['loginPass']);

        //Felhasználó lekérdezése az adatbázisból:

        $con = connect();
        $query = "SELECT * FROM user WHERE email LIKE '".$loginEmail."' AND password LIKE '".$loginPass."'";
        $result = mysqli_query($con, $query);
        $results = mysqli_fetch_all($result);

        if ($results == null) 
        {
            //print("Ez a felhasználó nem létezik");
            header("Location: ../view/loginfeedback.php?error=Ez a felhasználó nem létezik!");
        }
        else 
        {
            //Felhasználó adatainak lekérése az adatbázisból a session létrehozásához:

            $query = "SELECT user_id, name, email, password, moderator FROM user WHERE email LIKE '".$loginEmail."'";
            $aggregate = mysqli_query($con, $query);
            $aggregates = mysqli_fetch_row($aggregate);

            $id = $aggregates[0];
            $name = $aggregates[1];
            $email = $aggregates[2];
            $password = $aggregates[3];
            $role = $aggregates[4] == 0 ? "User" : "Moderator";

            //Felhasználó adatainak eltárolása egy tömbben és az továbbadása Session változóként:
            
            $UserData = array('Id' => $id, 'Name' => $name, 'Email' => $email, 'Password' => $password, 'Role' => $role);
            session_start();
            $_SESSION['UserData'] = $UserData;
            header("Location: ../index.php");
        }

    }
    else
    {
        //print("Nem töltöttél ki minden mezőt!");
        header("Location: ../view/loginfeedback.php?error=Nem töltött ki minden mezőt!");
    }

   

?>
