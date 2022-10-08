<?php

require "../controller/userLoggedIn.php";

if (!isLoggedIn())
{
	header("Location: auth.php");
}

?>



<!DOCTYPE html>
<html lang="hu">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="image/x-icon" href="../imgs/favicon.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap,jquery/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/global.css">
	<link rel="stylesheet" type="text/css" href="../styles/addProduct.css">
	<script src="../bootstrap,jquery/jquery-3.6.1.min.js"></script>
	<script src="../bootstrap,jquery/bootstrap.min.js"></script>


	<title>Termék hozzáadása</title>
</head>

<body>

	<!-- Menü sor -->
	<div style="width: 100%; height: 70px; background-color: rgba(0, 0, 0, 0.7); text-align: center;">
		<?php require '../menubar.php';?>
	</div>

	<!-- Termék hozzáadása űrlap -->
	<div class="container cardpart text-white">
		<div class="row">
			<div class="col-12 text-center">
				<h1>Termék hozzáadása</h1>
				<hr>
			</div>
		</div>

		<form method="POST" action="../controller/addProduct.php">
			<div class="row">
				<div class="col-12">
					<div class="form-floating col-12 text-black">
						<input type="text" class="form-control" id="productName" name="productName"
							placeholder="Márkanév Pendrive 32 GB IDABC123" required>
						<label for="productName">Termék megnevezése*</label>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-12">
					<div class="form-floating col-12 text-black">
						<textarea class="form-control h-25" id="productDesc" name="productDesc"
							placeholder="Ez egy leírás" rows="10" required></textarea>
						<label for="productDesc">Termék leírása*</label>
					</div>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-12">
					<div class="form-floating col-12 text-black">
						<button class="btn btn-success" type="submit">Küldés</button>
						<br>
						<h6 class="text-danger">*: a mező kitöltése kötelező</h6>
					</div>
				</div>
			</div>

		</form>
	</div>

</body>

</html>