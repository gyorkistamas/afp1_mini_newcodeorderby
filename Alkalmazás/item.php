<!DOCTYPE html>
	<html>
		<!--
			Creation Date: Wed Oct  5 10:10:44 AM CEST 2022
		-->
		<?php
			require 'controller/dbms.php';
			$connection = std_connect();

			$tmp = 1;

			$item = $connection->query("select * from product where product_id=" . 1)->fetch_assoc();
		?>
		<head>
			<title><?=$item["product_name"]?> | leírás</title>
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
					.review_title>h1,h2{
						display: inline;
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
				<h1 id=item_name class=h1><?=$item["product_name"]?></h1>
				<hr size=4px></hr>
				<div id=item_body>
					<img id=item_img src="../stock/img/stock_item.jpg">
					<span id="item_desc" class=h3>
						<?=$item["description"]?>
					<span>
				</div>
			</div>

			<?php
				$qry = "select name, message from review
						inner join user on user_id = review.added_by
						where product_id=" . $tmp;
				$reviews = $connection->query($qry);
				foreach($reviews as $r):
			?>
				<div class="bubble rounded review">
					<div class=review_title>
						<h1 class=h1>By: <h2 class=h2><?=$r["name"]?></h2></h1>
					</div>
					<hr size=4px></hr>
					<span id="item_desc" class=h3>
						<?=$r["message"]?>
					<span>
				</div>
			<?php
				endforeach;
			?>

			<script>
			</script>
		</body>
	</html>
