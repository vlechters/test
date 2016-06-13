<?php
require("cookie.php");
require("toolkit.php"); 
require("artikeldatabase.php"); 
require("databaseconnection.php"); 
require("shared_header.php");
require("shared_taglinks.php");

//(functie in tookit.php) Er wordt gekeken naar wie een toestemming heeft om deze pagina te kunnen zien
checkCredentials([
	ROLE_SUPER_ADMIN,
	ROLE_ADMIN,
	ROLE_CLIENT
	]) or die(); 

date_default_timezone_set("Europe/Amsterdam"); // Standaard tijdzone instellen
$datum_aangemaakt = date('Y/m/d H:i:s');
$titel = htmlspecialchars($_POST['titel'], ENT_QUOTES); // Formatting voor speciale karakters en aanhalingtekens 
$artikel_inhoud =  htmlspecialchars($_POST['artikel_inhoud'], ENT_QUOTES);  // Formatting voor speciale karakters en aanhalingtekens 
$afbeelding_url = htmlspecialchars($_POST['afbeelding_url'], ENT_QUOTES);
$auteur = $_SESSION["gebruikersnaam"];



if (isset($_POST['submit'])) {
		$conn = DatabaseConnection::getConnection();
		$conn = ArtikelDatabase::getConnection();
		$sql = "INSERT IGNORE INTO `artikels` (datum_aangemaakt,titel,artikel_inhoud,auteur,afbeelding_url) VALUES ('$datum_aangemaakt','$titel','$artikel_inhoud', '$auteur','$afbeelding_url')";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		echo "<center>Artikel verzonden</center>";
		echo "<script>";
		echo "function Redirect() 
		{  
			window.location='home.php'; 
		} 
		setTimeout('Redirect()', 3000); ";
		echo "</script>";
	};
?>