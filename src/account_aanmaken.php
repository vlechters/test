<?php
require("cookie.php");
require("toolkit.php"); 
session_start();

checkCredentials([
	ROLE_SUPER_ADMIN,
	ROLE_ADMIN
	]) or die(); 
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<?php
		require("shared_taglinks.php");
		require("shared_header.php");
		?>
		<title>Account aanmaken</title>


		<!-- uitzondering: CSS in head omdat hij het niet oppakt uit style.css - zie issues op Github -->
		<style>
		#box{
			color:#ed0f84;
			line-height: 1.3em;
			border: 1px outset #ECECEC;
			border-radius: 10px;
			width: 60%;
			max-width:700px;
			box-shadow: 0 0 0 2px #ECECEC, 6px 6px 7px 6px rgba(5, 5, 0, 0.1); 
			display:block;
			padding: 15px;
			background:rgba(96,125,139,0.1);
		};
		</style>
	</head>


	<body>
		<center>
			<div id="framework_acc_add">
				<div id="panel2">
					<form action="account_aanmaken_2.php" method="POST">
						<br>

						<div id="box">
							<p class="add_usern" style="color:#607D8B;">Gebruikersnaam:<br> <input id="usern" type="text" name="gebruikersnaam" value="" required</p>
							<p class="add_passw" style="color:#607D8B;">Wachtwoord:<br> <input id="passw" type="password" name="wachtwoord" value="" required></p><div>
							<p class="add_passw_confirm" style="color:#607D8B;">Wachtwoord bevestigen:<br> <input id="passw_confirm" type="password" name="wachtwoord_confirm" value="" required></p>
								<div>
							

							<?php
							/* geen gebruik gemaakt van Toolkit (CheckCredentials ) omdat hij users die geen toestemming hebben om een deel van / functie in een pagina te zien,
							meteen terugstuurt / uitlogt.*/
							if($_SESSION['rollen'] == 2){ 
								echo 'Administrator:<input id="check" type="checkbox" name="rollen"><br><br>';
							}
							?>

							<input id="passw" type="submit" name="submit" value="Account aanmaken"> 
						</form>
					</div>
				</div>
				<br>
			</center>
		</body>

		<footer>
			<hr>
			<center>
				<a href='home.php' class='terug'><img src='images/terug.png' width='40px' title='Terug'><br>Terug</a>
			</center>
		</footer>
		</html>