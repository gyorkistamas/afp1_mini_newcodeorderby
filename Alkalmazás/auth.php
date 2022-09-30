<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autentikáció</title>
    <link rel="stylesheet" type="text/css" href="bootstrap,jquery/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/auth.css">
    <script href="bootstrap,jquery/jquery-3.6.1.min.js"></script>
    <script href="bootstrap,jquery/bootstrap.min.js"></script>
</head>

<body>

    <!-- Ide majd a menüsor -->


    <div class="container my-3">
        <div class="row">
            <!-- Bejelentkezési űrlap -->
            <div class="col-lg-5 col-md-12 mb-5">
                <form method="POST" action="logic/login.php" id="login">
                    <div class="container">

                    <div class="row">
                        <div class="col-12">
                            <h1>Bejelentkezés</h1>
                            <hr>
                        </div>
                    </div>

                        <div class="row mb-3">
                            <div class="form-floating col-12">
                                <input type="email" class="form-control" id="emailForLogin" name="loginEmail" placeholder="test@email.com"
                                    required>
                                <label for="emailForLogin">E-mail cím*</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-floating col-12">
                                <input type="password" class="form-control" name="loginPass" id="passwordForLogin"
                                    placeholder="badpassword" required>
                                <label for="passwordForLogin">Jelszó*</label>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12 mb-2">
                                <button type="submit" class="btn btn-primary">Bejelentkezés</button></div>
                            <div class="col-lg-2"></div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="col-lg-2"></div>

            <!-- Regisztrációs űrlap -->
            <div class="col-lg-5 col-md-12">
                <form method="POST" action="logic/register.php" id="register">
                    <div class="container">

                    <div class="row">
                        <div class="col-12">
                            <h1>Regisztráció</h1>
                            <hr>
                        </div>
                    </div>

                        <!-- Megjelenő név -->
                        <div class="row">
                            <div class="col-12 form-floating mb-3">
                                <input type="text" class="form-control" name="displayName" id="nameForRegister" placeholder="Teszt Elek">
                                <label for="nameForRegister">Megjelenő név</label>
                            </div>

                            <!-- E-mail cím -->
                            <div class="col-12 form-floating mb-3">
                                <input type="email" class="form-control" name="regEmail" id="emailForRegister"
                                    placeholder="asd@asd.com">
                                <label for="nameForRegister">E-mail cím</label>
                            </div>
                        </div>


                        <!-- Jelszó egyszer -->
                        <div class="row mb-3">
                            <div class="col-lg-5 col-12 form-floating">
                                <input type="password" class="form-control" name="pass1" id="pass1ForRegister" placeholder="asd123">
                                <label for="pass1ForRegister">Jelszó</label>
                            </div>

                            <div class="col-lg-2"></div>


                            <!-- Jelszó kétszer -->
                            <div class="col-lg-5 col-12 form-floating">
                                <input type="password" class="form-control" name="pass2"id="pass2ForRegister" placeholder="asd123">
                                <label for="pass2ForRegister">Jelszó megint</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Regisztráció</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>