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

			



</body>

<footer>
</footer>
</html>
