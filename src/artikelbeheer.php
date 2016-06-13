<?php

require("toolkit.php"); 
require("shared_header.php");
require("shared_taglinks.php");



//(functie in tookit.php) Er wordt gekeken naar wie een toestemming heeft om deze pagina te kunnen zien
checkCredentials([
	ROLE_SUPER_ADMIN,
	ROLE_ADMIN,
	ROLE_CLIENT
	]) or die();
	?>



	<!DOCTYPE html>
	<html>
	<head>
		<title>Welkom</title>
		<style>

	input[type="text"]{
    width: 50% !important;
	}
	
			

		</style>

	</head>

	<body> 


		<div id="artikels">

			<form name="artikelbeheer" method="POST" action="artikel_verzenden.php">
			<br>
				<input type="text" placeholder="Titel..." name="titel" required>
	
				<textarea name="artikel_inhoud"  placeholder="Artikel inhoud..." required></textarea>
				<center>
<br>
				Kies een afbeelding: <input name="afbeelding_url" type="text" placeholder="Voer een URL in ...">

				<br>
					<input type="submit" name="submit">
					<br><br>

				</textarea>
			</form>
		</center>
	</div>



</body>

<footer>
</footer>
</html>
