<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8" />
    <title>Jakub Dąbrowski Page</title>
	<link rel="stylesheet" href="styles.css"/>
  </head>
  <body>
  	<?php
  		session_start();

		if(isset($_POST['login'])) {
			$username = $_POST['username'];
    		$password = $_POST['password'];

    		if(1==1) //$username === 'admin' && $password === 'admin'
    		{
    			$_SESSION['username'] = $username;
    			header('Location: form.php');
    			exit();
    		}
    		else
    		{
    			$_SESSION['error'] = 'Nieprawidłowe dane logowania!';
    		}
		}
	?>
	<header>
    <h1>Jakub Dąbrowski Page</h1>
	</header>
	<nav>
	<ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="text.html">Tekst</a></li>
		<li><a href="gallery.html">Galeria</a></li>
		<li><a href="form.php">Formularz</a></li>
		<li><a href="calculator.html">Kalkulator</a></li>
		<li><a href="database.php">Baza danych</a></li>
	</ul>
	</nav>
	<main>
		<div class="entry">
			<h2>Zaloguj się</h2>
			<div class="content">
				<form action="login.php" method="post">
					<div class="login" id="login">
						<p>Login: admin, hasło: admin.</p>
						<?php if (isset($_SESSION['error'])) : ?>
    						<span class="important"><?= $_SESSION['error'] ?></span><br>
						<?php endif ?>
						<label for="imie" id="imie_label">Login:</label><br>
						<input type="text" id="username" name="username" value="admin"><br>
						<label for="nazwisko">Hasło:</label><br>
						<input type="password" id="password" name="password" value="admin">
					</div>
					<h2><input type="submit" name="login" value="Zaloguj się"></h2>
				</form>
			</div>
		</div>
	</main>
	<footer>
	</footer>
	<script src="forms_validations.js"></script>
  </body>
</html>