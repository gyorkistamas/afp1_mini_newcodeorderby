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
					.review_title>h1,h2 {
						display: inline;
					}
					.contribute div {
						display: flex;
						justify-content: space-between;
						padding-top: 1%;
					}
						.contribute h1 {
						}
						.contribute button {
							background: var(--button-color);
							border: none;
							font-size: 4rem;
							padding-left: 1%;
							padding-right: 1%;
							float: right;
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
					<img id=item_img src="../Források/kép/stock_item.jpg">
					<span id="item_desc" class=h3>
						<?=$item["description"]?>
					<span>
				</div>
			</div>

			<div class="bubble rounded contribute">
				<div>
					<h1 class=h1>Hagyja ön is itt a véleményét:</h1><button class=rounded>+</button>
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
						<h1 class=h1>Írta: <h2 class=h2><?=$r["name"]?></h2></h1>
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
				let v

				function attempt_to_contribute(){
					if(!is_logged_in()){
						login_popup_init();
						return false;
					}

					

					return true;
				}

				function login_popup_init(){

				}

				function login_popup_die(){
					
				}

				function is_loged_in(){
					return true;
				}
			</script>
		</body>
	</html>
