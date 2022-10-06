
<?php


include "../controller/userLoggedin.php";

if (isLoggedIn()) {
    header("Location: ../index.php");
}

?>


<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autentikáció</title>

    <link rel="icon" type="image/x-icon" href="../imgs/favicon.png">
    <link rel="stylesheet" type="text/css" href="../bootstrap,jquery/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/auth.css">
    <link rel="stylesheet" type="text/css" href="../styles/global.css">
    <script src="../bootstrap,jquery/jquery-3.6.1.min.js"></script>
    <script src="../bootstrap,jquery/bootstrap.min.js"></script>
    <script src="../js/auth.js" defer></script>
</head>

<body>

    <!-- Ide majd a menüsor -->

    <!-- Menüsör placeholder -->
    <div style="width: 100%; height: 70px; background-color: rgba(0, 0, 0, 0.7);">

    </div>


    <div class="container my-5">
        <div class="row">
            <!-- Bejelentkezési űrlap -->
            <div class="col-lg-5 col-md-12 mb-5">
                <form method="POST" action="../controller/login.php" id="login">
                    <div class="container p-4 cardpart text-white">

                        <div class="row">
                            <div class="col-12">
                                <h1>Bejelentkezés</h1>
                                <hr>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-floating col-12 text-black">
                                <input type="email" class="form-control" id="emailForLogin" name="loginEmail"
                                    placeholder="test@email.com" required>
                                <label for="emailForLogin">E-mail cím*</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-floating col-12 text-black">
                                <input type="password" class="form-control" name="loginPass" id="passwordForLogin"
                                    placeholder="jelszopelda123" required>
                                <label for="passwordForLogin">Jelszó*</label>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 mb-2">
                                <button type="submit" class="btn btn-success">Bejelentkezés</button></div>
                            <div class="col-lg-2"></div>
                        </div>

                        <span class="fs-6">*: a mező kitöltése kötelező</span>
                    </div>
                </form>
            </div>

            <div class="col-lg-2"></div>

            <!-- Regisztrációs űrlap -->
            <div class="col-lg-5 col-md-12">
                <form method="POST" action="../controller/register.php" id="register">
                    <div class="container p-4 cardpart text-white">

                        <div class="row">
                            <div class="col-12">
                                <h1>Regisztráció</h1>
                                <hr>
                            </div>
                        </div>

                        <!-- Megjelenő név -->
                        <div class="row">
                            <div class="col-12 form-floating mb-3 text-black">
                                <input type="text" class="form-control" name="displayName" id="nameForRegister"
                                    placeholder="Teszt Elek" autocomplete="name" required>
                                <label for="nameForRegister">Megjelenő név*</label>
                            </div>

                            <!-- E-mail cím -->
                            <div class="col-12 form-floating mb-3 text-black">
                                <input type="email" class="form-control" name="regEmail" id="emailForRegister"
                                    placeholder="pelda@email.com" required>
                                <label for="nameForRegister">E-mail cím*</label>
                            </div>
                        </div>


                        <!-- Jelszó egyszer -->
                        <div class="row mb-3">
                            <div class="col-lg-5 col-12 mb-3 form-floating text-black">
                                <input type="password" class="form-control" name="pass1" id="pass1ForRegister"
                                    placeholder="jelszopelda123" required>
                                <label for="pass1ForRegister">Jelszó*</label>
                                <div class="invalid" id="invalidPass" hidden>
                                    A jelszónak legalább 8 karakter hosszúnak kell lennie!
                                </div>
                            </div>

                            <div class="col-lg-2"></div>


                            <!-- Jelszó kétszer -->
                            <div class="col-lg-5 col-12 form-floating text-black">
                                <input type="password" class="form-control" name="pass2" id="pass2ForRegister"
                                    placeholder="jelszopelda123" required>
                                <label for="pass2ForRegister">Jelszó megint*</label>
                                <div class="invalid" id="passNotMatch" hidden>
                                    A két jelszó nem egyezik meg!
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success" id="registerButton">Regisztráció</button>
                            </div>
                        </div>

                        <span class="fs-6">*: a mező kitöltése kötelező</span>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>