<!DOCTYPE html>
	<html>
		<!--
			Creation Date: Wed Oct  5 10:10:44 AM CEST 2022
		-->
		<?php
			if(!isset($_GET['product_Id'])){
				header('Location: index.php');
			}
			require 'controller/dbms.php';
			require 'controller/userLoggedIn.php';

			$connection = std_connect();
			$isModerator = isModerator();
			
			$productId = $_GET['product_Id'];

			$item = $connection->query("select * from product where product_id=" . $productId)->fetch_assoc();

			# --- Debug values ---
			#$productId = 1;
			#$is_moderator = true;
			###
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
			<script src="./bootstrap,jquery/bootstrap.min.js"></script>
			<!-- -->
		</head>
		<body>
			<!-- -->
        	<div style="width: 100%; height: 70px; background-color: rgba(0, 0, 0, 0.7); text-align: center;">
				<?php require 'menubar.php';?>
			</div>
			<!-- -->
			<!-- Item main -->
			<div id=item_bubble class="bubble rounded">
				<h1 id=item_name class=h1 <?=($isModerator ? "contentEditable=true" : "")?>><?=$item["product_name"]?></h1>
				<?php
					if($isModerator):
				?>
					<form class=actionButton  onsubmit="SaveItem();" action="controller/modRecord.php">
						<button class="save rounded">Mentés</button>
						<input style="display: none" name="table"  value="product"></input>
						<input style="display: none" name="field"  value="product_id"></input>
						<input style="display: none" name="value"  value="<?=$productId?>"></input>
						<input style="display: none" name="redirect"  value="../item.php?id=<?=$productId?>"></input>
						<input id=GET_item_name style="display: none" name="product_name"  value=""></input>
						<input id=GET_item_desc style="display: none" name="description"  value=""></input>
					</form>
					<form class=actionButton style="margin-right: 1%;" action="controller/delRecord.php">
						<button class="delete rounded">Termék&nbsptörlése</button>
						<input style="display: none" name="table"  value="product"></input>
						<input style="display: none" name="field"  value="product_id"></input>
						<input style="display: none" name="value"  value="<?=$productId?>"></input>
					</form>
				<?php
					endif;
				?>
				<hr size=4px></hr>
				<div id=item_body>
					<!--
					<img id=item_img src="../Források/kép/stock_item.jpg">
					-->
					<span id="item_desc" class=h3 <?=($isModerator ? "contentEditable=true" : "")?>>
						<?=$item["description"]?>
					</span>
				</div>
				<!--
				<?php
				/*
					if($isModerator):
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
						<button class=rounded type=button onClick="ContributeAttempt()">+</button>
					</div>
					<input style="display: none;" name=product_id value="<?=$productId?>"></input>
				</form>
				<div id=contribute_error></div>
			</div>

			<!-- Review list -->
			<?php
				$qry = "select name, message, review_id from review
						inner join user on user_id = review.added_by
						where product_id=" . $productId;
				$reviews = $connection->query($qry);
				foreach($reviews as $r):
			?>
				<div class="bubble rounded review">
					<div class=review_title>
						<h1 class=h1>Írta: <h2 class=h2><?=$r["name"]?></h2></h1>
						<?php
							if($isModerator):
						?>
						<!--<form class=actionButton action="controller/modRecord.php.php">-->
						<form class=actionButton onsubmit="SaveReview(event);" action="controller/modRecord.php">
							<button type=submit class="save rounded">Mentés</button>
							<input style="display: none" name="table"  value="review"></input>
							<input style="display: none" name="field"  value="review_id"></input>
							<input style="display: none" name="value"  value="<?=$r['review_id']?>"></input>
							<input style="display: none" name="redirect"  value="../item.php?id=<?=$productId?>"></input>
							<input class="send_msg" style="display: none" name="message"  value=""></input>
						</form>
						<form class=actionButton style="margin-right: 1%;" action="controller/delRecord.php">
							<button class="delete rounded">Értékelés törlése</button>
							<input style="display: none" name="table"  value="review"></input>
							<input style="display: none" name="field"  value="review_id"></input>
							<input style="display: none" name="value"  value="<?=$r['review_id']?>"></input>
							<input style="display: none" name="redirect"  value="../item.php?id=<?=$productId?>"></input>
						</form>
						<?php
							endif;
						?>
					</div>
					<hr size=4px></hr>
					<span class="review_desc" class=h3 <?=($isModerator ? "contentEditable=true" : "")?>>
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

				function ContributeAttempt(){
					if(!IsLoggedIn()){
						LoginPopupInit();
						return false;
					}

					var bT = hContribute.getElementsByTagName('form')[0].appendChild(document.createElement('textarea'));
					bT.id = "cont_message";
					bT.name = "message";
					bT.placeholder = "Ide gépelhet...";
					var hB = hContribute.getElementsByTagName('button')[0];
					hB.innerText = "Publikálás";
					hB.onclick = Contribute;
					// ?!
					//hB.style.fontSize = Math.floor((parseInt(hB.style.fontSize) - 2)) + "rem";

					//var hF = hContribute.getElementsByClassName('form')[0];

					return true;
				}
				function Contribute(){
					if(document.getElementById('cont_message').value == ""){
						document.getElementById('contribute_error').innerText = "*Az értékelés szövege üres, melynek kitöltése kötelező";
						return
					}
					hContribute.getElementsByTagName('form')[0].submit();
				}

				function LoginPopupInit(){
					//console.log('pop init')
					var hPopup = document.body.appendChild(document.createElement('div'));
					var popupHtml = `<?php require 'view/loginPopup.php'?>`;
					popupHtml = popupHtml.substr(0, popupHtml.length-1);
					hPopup.innerHTML = popupHtml;
				}

				function LoginPopupDie(){
					document.getElementById('login_popup').remove();
				}

				function IsLoggedIn(){
					return <?=var_export(IsLoggedIn())?>;
				}
				function IsModerator(){
					return <?=var_export($isModerator)?>;
				}

				function SaveItem(){
					hName = document.getElementById('item_name');
					var hGETItemName = document.getElementById('GET_item_name');
					var hDesc = document.getElementById('item_desc');
					var hGETItemDesc = document.getElementById('GET_item_desc');
					GET_item_name.setAttribute('value', hName.innerText);
					GET_item_desc.setAttribute('value', hDesc.innerText);
				}
				function SaveReview(e){
					//e.preventDefault();
					var hDesc = e.target;
					while(!hDesc.classList.contains('bubble')){
						hDesc = hDesc.parentElement;
					}
					var hRoot = hDesc;
					hDesc = hRoot.getElementsByClassName('review_desc')[0];
					var hMsg = hRoot.getElementsByClassName('send_msg')[0];
					hMsg.setAttribute('value', hDesc.innerText);
				}
			</script>
		</body>
	</html>
