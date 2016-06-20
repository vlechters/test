<?php
require ('artikeldatabase.php');
require("toolkit.php"); 
require 'databaseconnection.php';
$artikel_id = 0;

if (!empty($_GET['artikel_id'])) {
	$artikel_id = $_REQUEST['artikel_id'];
};
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Artikel(s) bewerken</title>
	<?php require("shared_taglinks.php"); ?>
</head>


<body>
	<div id="top-navigation">

		<center>
			<br>
		</center>

		<?php

// Rows ophalen van DB 

		try{
			$conn = ArtikelDatabase::getConnection();
			$q = "SELECT * FROM artikels WHERE artikel_id = :artikel_id";
			$stmt = $conn->prepare( $q );
			$stmt->bindParam(':artikel_id', $artikel_id, PDO::PARAM_INT);
			$stmt->execute();
			$conn = null; //sluit connectie

		}
		catch(PDOException $e) {
			trigger_error('Er is een fout onstaan bij het ophalen van de gebruikers in de database:' . $e->getMessage(), E_USER_ERROR);
		}

		?>


		<?php
		while($row = $stmt->fetch()){
			echo "<center>";

			echo "<hr>";
			$artikel_id=$row['artikel_id'];
			$artikel_titel=$row['titel'];
					$artikel_inhoud = htmlspecialchars_decode($row['artikel_inhoud']); // Formateer raw html code uit mysql code
					echo "<h1>".$artikel_titel."<h1>";
					echo $artikel_inhoud;
					echo "<hr>";
					echo "<br><br>";
					echo '<button type="button" onclick="window.close();">SLUIT VENSTER</button';
					echo "</center>";


				}; 
				?>
				<center>
				</div>
			</div>

			</html>









