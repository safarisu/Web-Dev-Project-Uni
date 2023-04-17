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

		if (!isset($_SESSION['username'])) {
			header('Location: login.php');
			exit(); 
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
		<li><a href="form.php" class="active">Formularz</a></li>
		<li><a href="calculator.html">Kalkulator</a></li>
		<li><a href="database.php">Baza danych</a></li>
	</ul>
	</nav>
	<main>
		<div class="entry">
			<?php 
				if (isset($_POST["form"])) {
					include("form_submitted.php");
				}
				else {
					readfile("form_to_fill.html");
				}
			?>
		</div>
	</main>
	<footer>
	</footer>
	<script src="forms_validations.js"></script>
  </body>
</html>