<!DOCTYPE html>
	<html>
		<!--
			Creation Date: Wed Oct  5 10:10:44 AM CEST 2022
		-->
		<?php
			require 'controller/userLoggedIn.php';
		?>
		<head>
			<title>[terméknév] | leírás</title>
			<!-- -->
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

			<link rel="icon" type="image/x-icon" href="imgs/favicon.png">
			<link rel="stylesheet" type="text/css" href="./bootstrap,jquery/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="./styles/global.css">
			<script src="./bootstrap,jquery/jquery-3.6.1.min.js"></script>
			<script src="./bootstrap,jquery/bootstrap.min.js"></script>
			<!-- -->
			<style>
				body * {
					color: white !important;
				}
				.bubble {
					width: 80%;
					margin-top: 5%;
					margin-left: auto;
					margin-right: auto;
					padding-top: 0.5%;
					padding-left: 2%;
					padding-right: 2%;
					padding-bottom: 2%;
				}
					#item_body {
						display: flex;
					}
						#item_name {
							margin-top: 0.5rem;
						}
						#item_img {
							border: 7px solid var(--separator-bk);
							display: inline;
						}
						#item_desc {
							margin-left: 1%;
						}
			</style>
		</head>
		<body>
			<!-- -->
			<div style="width: 100%; height: 70px; background-color: rgba(0, 0, 0, 0.7);">
				<?php require 'menubar.php';?>
			</div>
			<!-- -->
			
			<div id=item_bubble class="bubble rounded">
				<h1 id=item_name class=h1>[Termék név]</h1>
				<hr size=4px></hr>
				<div id=item_body>
					<img id=item_img src="../stock/img/stock_item.jpg">
					<span id="item_desc" class=h3>
						Ez egy értelmes hosszúságú egy termékről szóló termék leírás. Képernyőtervet kitöltő egyéb értelmes magyar szöveg.
					<span>
				</div>
			</div>

			<script>
			</script>
		</body>
	</html>
