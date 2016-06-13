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


input[type="text"]{
   font-size: 1.5em !important;
}


::-webkit-input-placeholder {
 font-size:1.5em !important;
}
:-moz-placeholder { /* voor Firefox 18- */
 font-size:1.5em !important;}

::-moz-placeholder {  /* voor Firefox 19+ */
 font-size:1.5em !important;}

:-ms-input-placeholder {  
 font-size:1.5em !important;} 
			

		</style>

	</head>

	<body> 


		<div id="artikels">

			<form name="artikelbeheer" method="POST" action="artikel_verzenden.php">
			
			<br>
				<input type="text" placeholder="Titel..." name="titel" required>
	
				<textarea id="artikel_inhoud" name="artikel_inhoud" cols="9" rows="9"></textarea>
				<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'artikel_inhoud' );
            </script>
				<center>

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
