<?php


require "../controller/userLoggedIn.php";

if (!isLoggedIn())
{
	header("Location: notLoggedIn.php");
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
	<script src="../bootstrap,jquery/jquery-3.6.1.min.js"></script>
	<script src="../bootstrap,jquery/bootstrap.min.js"></script>

	<title>Termék hozzáadása</title>
</head>

<body>

	<div class="container cardpart text-white">
		<div class="row">
			<div class="col-12 text-center">
				<h1>Termék hozzáadása</h1>
				<hr>
			</div>
		</div>

		<form method="POST" action="">
			<div class="row">
				<div class="col-12">
					<div class="form-floating col-12 text-black">
						<input type="text" class="form-control" id="productName" name="productName"
							placeholder="Márkanév Pendrive 32 GB IDABC123" required>
						<label for="productName">Termék megnevezése*</label>
					</div>
				</div>
			</div>
		</form>
	</div>

</body>

</html>