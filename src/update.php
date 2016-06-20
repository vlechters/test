<?php
require("toolkit.php"); 
require("databaseconnection.php"); 
require("artikeldatabase.php"); 
require("shared_header.php");

//(functie in tookit.php) Er wordt gekeken naar wie een toestemming heeft om deze pagina te kunnen zien
checkCredentials([
    ROLE_SUPER_ADMIN,
    ROLE_ADMIN,
    ROLE_CLIENT
]) or die(); 
?>

<?php

date_default_timezone_set("Europe/Amsterdam"); // Standaard tijdzone instellen
$datum_aangepast = date('Y/m/d H:i:s');
$titel = htmlspecialchars($_POST['titel'], ENT_QUOTES); // Formatting voor speciale karakters en aanhalingtekens 
$artikel_inhoud =  $_POST['artikel_inhoud'];  // Formatting voor speciale karakters en aanhalingtekens 
$auteur = $_SESSION["gebruikersnaam"];

// htmlspecialchars($_POST['artikel_inhoud'], ENT_QUOTES);


// UPDATE TITEL
if(isset($_POST['titel'])){   
		$conn = ArtikelDatabase::getConnection();
		$sql = "UPDATE `artikels` SET `titel` = :titel WHERE artikel_id = :artikel_id";
		$statement = $conn-> prepare($sql);
		$statement->bindValue(':artikel_id', $_POST['artikel_id']);
		$statement->bindValue(':titel', $_POST['titel']);
	    $statement->execute();
		$conn = null; // sluit connectie


		$conn = ArtikelDatabase::getConnection();
		$sql = "UPDATE `artikels` SET `datum_aangepast` = :datum_aangepast WHERE artikel_id = :artikel_id";
		$statement = $conn-> prepare($sql);
		$statement->bindValue(':artikel_id', $_POST['artikel_id']);
		$statement->bindValue(':datum_aangepast', $datum_aangepast);
	    $statement->execute();
		$conn = null; 
			
};

// UPDATE ARTIKEL
if(isset($_POST['artikel_inhoud'])){
		$conn = ArtikelDatabase::getConnection();
		$sql = "UPDATE `artikels` SET `artikel_inhoud` = :artikel_inhoud WHERE artikel_id = :artikel_id";
		$statement = $conn-> prepare($sql);
		$statement->bindValue(':artikel_id', $_POST['artikel_id']);
		$statement->bindValue(':artikel_inhoud', $_POST['artikel_inhoud']);
		$update = $statement->execute();
		$conn = null; // sluit connectie

			if($update){
				header('Location: contentbeheer.php'); 
			}
};	

?>