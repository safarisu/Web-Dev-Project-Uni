<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8" />
    <title>Jakub Dąbrowski Page</title>
	<link rel="stylesheet" href="styles.css"/>
  </head>
  <body>
  	<?php
	  	$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "DB_2023";

		$mysqli = new mysqli($servername, $username, $password, $dbname);

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
		<li><a href="database.php" class="active">Baza danych</a></li>
	</ul>
	</nav>
	<main>
		<div class="entry">
			<h2>Baza danych</h2>
			<div class="content">
					<?php
						if (isset($_POST["kasuj"])) {

							$stmt = $mysqli->prepare("DELETE FROM studenci WHERE id=?");
							$stmt->bind_param("i", $_POST["id"]);
							$stmt->execute();

						} elseif (isset($_POST["dodaj"])) {

							$stmt = $mysqli->prepare("INSERT INTO studenci (imie, nazwisko, wiek) VALUES (?, ?, ?)");
							$stmt->bind_param("ssi", $_POST["imie"], $_POST["nazwisko"], $_POST["wiek"]);
							$stmt->execute();

						} elseif (isset($_POST["edytuj"])) {
							$stmt = $mysqli->prepare("UPDATE studenci SET imie=?, nazwisko=?, wiek=? WHERE ID=?");
							$stmt->bind_param("ssii", $_POST["imie"], $_POST["nazwisko"], $_POST["wiek"], $_POST["id"]);
							$stmt->execute();
						}

						$result = $mysqli->query("SELECT * FROM studenci WHERE 1");

						if (mysqli_num_rows($result) > 0) {
							echo '<div class="db-form" action="database.php" method="post">
							      <div><strong>Imię</strong></div><div><strong>Nazwisko</strong>
							      </div><div><strong>Wiek</strong></div><div></div><div></div></div>';

						  while($row = mysqli_fetch_assoc($result)) {
						    echo '<form class="db-form" action="database.php" method="post">
						          <input type="hidden" name="id" value="' . $row["ID"] . '">
						          <div>' . $row["imie"]. "</div>
						          <div>" . $row["nazwisko"]. "</div>
						          <div>" . $row["wiek"]. '</div>
						          <button type="button" class="edytuj">Edytuj</button>
						          <input type="submit" value="Kasuj" name="kasuj">
						          </form>';

						  }
						} else {

						  echo "<p>Baza pusta!</p>";

						}

						echo '<br>
						      <form class="db-form" action="database.php" method="post" id="submit-form">
						      <input type="hidden" name="id">
						      <input type="text" placeholder="Imię" name="imie">
						      <input type="text" placeholder="Nazwisko" name="nazwisko">
						      <input type="number" placeholder="Wiek" name="wiek">
						      <input type="submit" value="Dodaj" name="dodaj">
						      </form>';

						$mysqli->close();
					?>
					<script>
						const buttons = document.querySelectorAll('button');

						buttons.forEach((button) => {
						  button.addEventListener('click', () => {
						    const form = button.parentElement;
						    const submit_form = document.getElementById('submit-form');

						    submit_form.children[0].value = form.children[0].value;
						    submit_form.children[1].value = form.children[1].textContent;
						    submit_form.children[2].value = form.children[2].textContent;
						    submit_form.children[3].value = form.children[3].textContent;

						    submit_form.children[4].value = "Edytuj";
						    submit_form.children[4].name = "edytuj";
						  });
						});
					</script>
				</div>
			</div>
		</div>
	</main>
	<footer>
	</footer>
  </body>
</html>