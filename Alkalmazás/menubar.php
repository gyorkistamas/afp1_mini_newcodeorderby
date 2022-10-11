<?php
    $status = isLoggedIn();

    $thisPage = basename($_SERVER['PHP_SELF']);
	
    if ( isset($_POST['HomePageBtn']) ) {
        header("Location:  /index.php");
    }

    if ( isset($_POST['AddProductBtn']) ) {
        header("Location: /view/addProduct.php");
    }

    if ( isset($_POST['LoginBtn']) ) {
        header("Location: /view/auth.php");
    }

    if ( isset($_POST['LogoutBtn']) ) {
        unset($_SESSION['UserData']);
        session_destroy();
        header("Location: /index.php");
    }
?>

<form id=menubar action='' method='post'>
	<button style='color: DarkSlateGray;'
		type='submit' name='HomePageBtn' class='btn btn-info'
        <?=($thisPage == 'index.php' ? 'disabled' : '')?>>Főoldal</button>
   		<?php if($status): ?>
			<button style='color: DarkSlateGray;'
				type='submit' name='AddProductBtn' class='btn btn-info'
				<?=($thisPage == 'addProduct.php' ? 'disabled' : '')?>
			>
				Termék hozzáadása
			</button> 
            <button type='submit' name='LogoutBtn' class='btn btn-danger'>
				Kijelentkezés
			</button>
		<?php else:?>
            <button style='color: DarkSlateGray;'
				type='submit' name='LoginBtn' class='btn btn-info'
				<?=($thisPage == 'auth.php' ? 'disabled' : '')?>
			>
				Bejelentkezés/Regisztráció
			</button>
    	<?php endif; ?>
</form>

