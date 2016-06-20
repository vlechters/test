<?php
require("toolkit.php"); 
require("databaseconnection.php"); 
require("artikeldatabase.php");
require("shared_header.php");


checkCredentials([
	ROLE_SUPER_ADMIN,
	ROLE_ADMIN,
	ROLE_CLIENT
	]) or die(); 

$gebruikersnaam = $_SESSION['gebruikersnaam'];
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=300, initial-scale=1.0">
	<title>Account(s) bewerken</title>
	<?php require("shared_taglinks.php"); ?>
	<style>

		input[type="text"]{
			font-size: 11pt;
			width:90% !important;
			height:30px !important;
			background-color: transparent;
			border: 1px dotted #8d1d1a !important;
			
		}


	</style>
</head>


<body>
	<div id="top-navigation">

		<?php
// Rows ophalen van DB 
		$conn = ArtikelDatabase::getConnection();
		$q = "SELECT artikel_id,titel,artikel_inhoud,auteur,datum_aangemaakt,datum_aangepast FROM artikels  WHERE auteur = :gebruikersnaam";
		$stmt = $conn->prepare( $q );
		$stmt->bindParam(':gebruikersnaam', $gebruikersnaam, PDO::PARAM_INT);
		$stmt->execute();
$count = $stmt->rowCount(); // tel aantal rijen


if ($count==0){
	echo "<script>alert('Geen artikels gevonden. Plaats nu een nieuwe artikel')</script>";
	echo "<script>window.location.replace('artikel_toevoegen.php')</script>";
}
?>


<div id="box">
	<!-- Table -->
	<center>
		<table >
			<thead>
				<tr>
					<!--<th>ID <br> </th>-->
					<th style="padding:5px">Voorbeeld<br></th>
					<th style="padding:10px">  Titel  <br></th>
					<th style="padding:10px"> Geplaatst op <br></th>
					<th style="padding:10px">Laatst bewerkt op<br></th>

					<!--th style="padding:10px" >Auteur <br></th-->
					
					<th style="padding:5px">Bewerken<br></th>
					<th style="padding:5px">Verwijderen<br></th>
				</tr>
			</thead>
			<tbody>
			</div>

			<?php
			while($row = $stmt->fetch()){
				$artikel_id=$row['artikel_id'];
				$datum_aangepast = $row['datum_aangepast'];

		// Toon niets als de artikel nog nooit bewerkt is
				if($datum_aangepast == "0000-00-00 00:00:00"){
					$datum_aangepast = "";
				}


				echo 	"<tr>";
				echo	"<form id='submit_form' name='submit_form' action='update.php' method='post'>";

// VOORBEELD ARTIKEL
				echo	'<td  width="5%" id="submit_form"><a onclick="openVenster()" id="voorbeeld" href="voorbeeld.php?artikel_id='.$row['artikel_id'].'" target="_blank" width="640" height="480"><img title="Voorbeeld van het artikel" style="padding:1px;  float:right; margin-right:30%" id="bewerken" src="images/voorbeeld.png" width="35px"</a></td>';



				// TITEL ARTIKEL
				echo	"<td width='30%' id='usrn'><input type='text' value='{$row['titel']}' name='titel' readonly></td>";




				// DATUM & TIJD ARTIKEL GEPLAATST
				echo	"<td width='27%' id='usrn'><input id='inhoud_focus' style='width:80%' type='text' value='{$row['datum_aangemaakt']}' name='datum_aangemaakt' readonly></td>";

				// DATUM & TIJD LAATSTE BEWERKING ARTIKEL
				echo	"<td width='30%' id='usrn'><input id='inhoud_focus;  style='width:80%' type='text' value='$datum_aangepast' name='datum_aangepast' readonly></td>";

				// AUTEUR ARTIKEL
				//echo	"<td id='usrn'><input style='width:80%' type='text' value='{$row['auteur']}' name='auteur' readonly></td>";



				


				


				// ARTIKEL BEWERKEN
				echo	'<td width="5%" id="submit_form"><a href="artikel_bewerken.php?artikel_id='.$row['artikel_id'].'"><img title="Artikel Bewerken" style="padding:1px;  float:right; margin-right:30%" id="bewerken" src="images/bewerken.png" width="35px"</a></td>';

				// ARTIKEL VERWIJDEREN
				echo	'<td width="5%"><a href="delete.php?artikel_id='.$artikel_id.'"><img title="Artikel Verwijderen" style="padding:5px; margin-left:7% float:left" id="remove_user" src="images/remove.png" width="40px"</a></td>';



				echo 	"</form>";
				echo '<center>';
				echo	'</center>';
				echo	"</tr>";

			};
			?>

		</tbody>
	</thead>
</table>
</div>
</div>



<!--?php if (checkCredentials([
    ROLE_SUPER_ADMIN,
    ROLE_ADMIN
])){
		include_once('accountbeheer_admin.php');
		}
		?-->

	</div>
	<hr>
	<center><a href="home.php" class='terug'><img src='images/terug.png' width='40px' title='Terug naar Home'><br>Terug</a></center>