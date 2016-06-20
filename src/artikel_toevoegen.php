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
	 <meta charset="utf-8">
	 <script src="../ckeditor/ckeditor.js"></script>
 

		<title>Artikelbeheer</title>
		<style>


		input[type="submit"]{
				width: 200px !important;
				height:50px !important;
				padding:2px !important;
				font-size:24px;
		}


input[type="text"]{
   width:50% !important;
   border:1px solid #8c1818 !important;
};

input[type="text"]:focus
{
    font-size:120% !important;
}



::-webkit-input-placeholder {
 font-size:1em !important;
    border:none !important;
}
:-moz-placeholder { /* voor Firefox 18- */
 font-size:1em !important;
   border:none !important;}

::-moz-placeholder {  /* voor Firefox 19+ */
 font-size:1em !important;
   border:none !important;}

:-ms-input-placeholder {  
 font-size:1em !important;
   border:none !important;} 
			

		</style>

	</head>

	<body> 


		<div id="artikels">
			<center>
			<form name="artikelbeheer" method="POST" action="artikel_verzenden.php">
			
			<br>
				<input type="text" placeholder="Titel..." name="titel" required>
				<textarea id="artikel_inhoud" name="artikel_inhoud" ></textarea>
				<script> CKEDITOR.replace( 'artikel_inhoud' );</script>
				<center>

					<input type="submit" value="Artikel plaatsen" name="submit">
				





			</form>
		</center>
	</div>
<hr>



</body>
<center><a href="home.php" class='terug'><img src='images/terug.png' width='40px' title='Terug naar Home'><br>Terug</a></center>

<footer>
</footer>
</html>
