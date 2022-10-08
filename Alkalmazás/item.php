<!DOCTYPE html>
	<html>
		<!--
			Creation Date: Wed Oct  5 10:10:44 AM CEST 2022
		-->
		<?php
			require 'controller/dbms.php';
			$connection = std_connect();

			# --- Debug values ---
			$product_id = 1;
			$is_moderator = true;
			###

			$item = $connection->query("select * from product where product_id=" . $product_id)->fetch_assoc();
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
			<link rel="stylesheet" type="text/css" href="./styles/item.css">
			<link rel="stylesheet" type="text/css" href="./styles/loginPopup.css">
			<script src="./bootstrap,jquery/jquery-3.6.1.min.js"></script>
			<script src="./bootstrap,jquery/bootstrap.min.js"></script>
			<!-- -->
			<style>
			</style>
		</head>
		<body>
			<!-- -->
			<div style="width: 100%; height: 70px; background-color: rgba(0, 0, 0, 0.7);">
				<?php /*require 'menubar.php';*/?>
			</div>
			<!-- -->
			<!-- Item main -->
			<div id=item_bubble class="bubble rounded">
				<h1 id=item_name class=h1 <?=($is_moderator ? "contentEditable=true" : "")?>><?=$item["product_name"]?></h1>
				<?php
					if($is_moderator):
				?>
					<form class=actionButton>
						<button class="save rounded">Mentés</button>
					</form>
					<form class=actionButton style="margin-right: 1%;" action="controller/delItem.php">
						<button class="delete rounded">Termék&nbsptörlése</button>
						<input style="display: none" name="product_id"  value="<?=$product_id?>"></input>
					</form>
				<?php
					endif;
				?>
				<hr size=4px></hr>
				<div id=item_body>
					<!--
					<img id=item_img src="../Források/kép/stock_item.jpg">
					-->
					<span id="item_desc" class=h3 <?=($is_moderator ? "contentEditable=true" : "")?>>
						<?=$item["description"]?>
					</span>
				</div>
				<!--
				<?php
				/*
					if($is_moderator):
				?>
					<input type=file></input>
				<?php
					endif;
				*/
				?>
				-->
			</div>

			<!-- Contribute -->
			<div action="controller/addReview.php" method=post id=contribute class="bubble rounded">
				<form action="controller/addReview.php" method=post>
					<div>
						<h1 class=h1>Hagyja ön is itt a véleményét:</h1>
						<button class=rounded type=button onClick="contribute_attempt()">+</button>
					</div>
					<input style="display: none;" name=product_id value="<?=$product_id?>"></input>
				</form>
				<div id=contribute_error></div>
			</div>

			<!-- Review list -->
			<?php
				$qry = "select name, message from review
						inner join user on user_id = review.added_by
						where product_id=" . $product_id;
				$reviews = $connection->query($qry);
				foreach($reviews as $r):
			?>
				<div class="bubble rounded review">
					<div class=review_title>
						<h1 class=h1>Írta: <h2 class=h2><?=$r["name"]?></h2></h1>
						<?php
							if($is_moderator):
						?>
							<button class="save rounded">Mentés</button>
							<button class="delete rounded">Értékelés törlése</button>
						<?php
							endif;
						?>
					</div>
					<hr size=4px></hr>
					<span id="item_desc" class=h3 <?=($is_moderator ? "contentEditable=true" : "")?>>
						<?=$r["message"]?>
					<span>
				</div>
			<?php
				endforeach;
			?>

			<!-- -->
			<?php
				$connection->close();
			?>

			<script>
				let hContribute = document.getElementById('contribute');

				function contribute_attempt(){
					if(!is_logged_in()){
						login_popup_init();
						return false;
					}

					var bT = hContribute.getElementsByTagName('form')[0].appendChild(document.createElement('textarea'));
					bT.id = "cont_message";
					bT.name = "message";
					bT.placeholder = "Ide gépelhet...";
					var hB = hContribute.getElementsByTagName('button')[0];
					hB.innerText = "Publikálás";
					hB.onclick = contribute;
					// ?!
					//hB.style.fontSize = Math.floor((parseInt(hB.style.fontSize) - 2)) + "rem";

					//var hF = hContribute.getElementsByClassName('form')[0];

					return true;
				}
				function contribute(){
					if(document.getElementById('cont_message').value == ""){
						document.getElementById('contribute_error').innerText = "*Az értékelés szövege üres, melynek kitöltése kötelező";
						return
					}
					hContribute.getElementsByTagName('form')[0].submit();
				}

				function login_popup_init(){
					console.log('pop init')
					var hPopup = document.body.appendChild(document.createElement('div'));
					var popupHtml = `<?php require 'loginPopup.php'?>`;
					popupHtml = popupHtml.substr(0, popupHtml.length-1);
					hPopup.innerHTML = popupHtml;
				}

				function login_popup_die(){
					document.getElementById('login_popup').remove();
				}

				function is_logged_in(){	// debug implementation
					return true;
					//return false;
				}
				function is_moderator(){	// debug implementation
					return true;
				}
			</script>
		</body>
	</html>
