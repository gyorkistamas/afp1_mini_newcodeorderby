<?php

$success = isset($_GET['success']) ? ($_GET['success'] == "True" ? True : False) : False;

$error = isset($_GET['error']) ? $_GET['error'] : "Ismeretlen hiba";


?>

<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../bootstrap,jquery/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/global.css">
    <script src="../bootstrap,jquery/jquery-3.6.1.min.js"></script>
    <script src="../bootstrap,jquery/bootstrap.min.js"></script>

	<title>Regisztráció</title>
</head>
<body>

<div class="container cardpart text-white my-5">
	<div class="row">
		<div class="col-12 text-center p-2">
			<h1><?= $success ? "Sikeres" : "Sikertelen" ?> regisztráció!</h1>
			<p <?= $success ? "hidden" : "" ?> >Oka: <?= $error ?></p>
			<a href="auth.php" class="btn btn-danger">Vissza a regisztrációhoz</a>
		</div>
	</div>
</div>
	
<?php 

if ($success) {
	echo '<meta http-equiv="refresh" content="3; url=../index.php">';
}

?>

</body>
</html>