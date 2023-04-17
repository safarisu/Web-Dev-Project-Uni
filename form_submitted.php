<?php 
	$prawo_jazdy = (isset($_POST["prawo_jazdy"]) ? 'Tak' : 'Nie'); 
?>

<h2>Dane</h2>
<div class="content">
	<p><strong>Imię:</strong> <?=$_POST["imie"]?></p>
	<p><strong>Nazwisko:</strong> <?=$_POST["nazwisko"]?></p>
	<p><strong>Miasto:</strong> <?=$_POST["miasto"]?></p>
	<p><strong>Ulica:</strong> <?=$_POST["ulica"]?></p>
	<p><strong>Numer domu:</strong> <?=$_POST["nr_domu"]?></p>
	<p><strong>Numer mieszkania:</strong> <?=$_POST["nr_mieszkania"]?></p>
	<p><strong>Kod pocztowy:</strong> <?=$_POST["kod_pocztowy"]?></p>
	<p><strong>Płeć:</strong> <?=$_POST["plec"]?></p>
	<p><strong>Uwagi:</strong> <?=$_POST["uwagi"]?></p>
	<p><strong>Data urodzenia:</strong> <?=$_POST["data_urodzenia"]?></p>
	<p><strong>PESEL:</strong> <?=$_POST["pesel"]?></p>
	<p><strong>Prawo jazdy:</strong> <?=$prawo_jazdy?></p>
	<p><strong>Telefon:</strong> <?=$_POST["telefon"]?></p>
	<p><strong>E-mail:</strong> <?=$_POST["e-mail"]?></p>
</div>