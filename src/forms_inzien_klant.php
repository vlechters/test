<?php
require("cookie.php");
require("toolkit.php");  
require("shared_header.php");
require("databaseconnection.php");
require("shared_taglinks.php");
session_start();



checkCredentials([
	ROLE_CLIENT
	]) or die(); 

// rows tellen & weergeven
$conn = DatabaseConnection::getConnection();
//$q = "SELECT * FROM incrowd";
//$stmt = $conn->prepare( $q );
//$stmt->execute();
//$result = $stmt->fetchAll();
//$number_of_rows = count($result);


// Rows ophalen van DB 
$q = "SELECT intake_id,
gebruikersnaam,
naam_app,
url,
google_account,
ios,
android,
windows,
support_email,
weergave_naam,
email_onthouden,
wachtwoord_onthouden,
apparaat_activatie,
incrowds_1,
incrowds_2,
incrowds_3,
incrowds_4,
incrowds_5,
ongelezen_berichten,
rol_1,
email_1,
rol_2,
email_2,
rol_3,
email_3,
bijlage_1,
bijlage_2,
bijlage_3,
ip,
browser FROM `incrowd` WHERE `gebruikersnaam`= '".$_SESSION["gebruikersnaam"]."'";
$stmt = $conn->prepare( $q );
$stmt->execute();
?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<center>
		<legend>
			<h3 class='inzendingen' style='color:#0DB3CD'>Uw intakeformulier terugzien</h3>
			<p style="font-size:12px">( Druk op het pijltje hieronder om uw form in te zien )</p>
		</legend>
	</center>

	<img style="margin-down:20px; display:block; margin: 0 auto" src="images/omhoog.png" width="25px" id="sld-up">
	<img style="display:block; margin: 0 auto" src="images/omlaag.png" width="25px" id="sld-down">
	<?php include('control_buttons.php'); ?>

	<div id="box">
		<!-- Table -->
		<center>
			<table cellpadding="5" cellspacing="5" width="100%">
				<thead>
					<tr>
						<th class='geb'><b>Gebruikersnaam:<b></th>
						<th style='display:none;' class='expand1'><b>Naam App:<b></th>
						<th style='display:none' class='expand2'><b>URL<b></th>
						<th style='display:none' class='expand3'><b>Google Account<b></th>
						<th style='display:none' class='expand4'><b>iOS<b></th>
						<th style='display:none' class='expand5'><b>Android<b></th>
						<th style='display:none' class='expand6'><b>Windows<b></th>
						<th style='display:none' class='expand7'><b>Support Email<b></th>
						<th style='display:none' class='expand8'><b>Weergave naam<b></th>
						<th style='display:none' class='expand9'><b>Email onthouden<b></th>
						<th style='display:none' class='expand10'><b>Wachtwoord onthouden<b></th>
						<th style='display:none' class='expand11'><b>Apparaat activatie<b></th>
						<th style='display:none' class='expand12'><b>Incrowds 1<b></th>
						<th style='display:none' class='expand13'><b>Incrowds 2<b></th>
						<th style='display:none' class='expand14'><b>Incrowds 3<b></th>
						<th style='display:none' class='expand15'><b>Incrowds 4<b></th>
						<th style='display:none' class='expand16'><b>Incrowds 5<b></th>
						<th style='display:none' class='expand17'><b>'Ongelezen berichten' Badge<b></th>
						<th style='display:none' class='expand18'><b>Rol 1<b></th>
						<th style='display:none' class='expand19'><b>Email rol 1<b></th>
						<th style='display:none' class='expand20'><b>Rol 2<b></th>
						<th style='display:none' class='expand21'><b>Email rol 2<b></th>
						<th style='display:none' class='expand22'><b>Rol 3<b></th>
						<th style='display:none' class='expand23'><b>Email rol 3<b></th>
						<th style='display:none' class='expand24'><b>Bijlage 1<b></th>
						<th style='display:none' class='expand25'><b>Bijlage 2<b></th>
						<th style='display:none' class='expand26'><b>Bijlage 3<b></th>
						<th style='display:none' class='expand27'><b>IP adres<b></th>
						<th style='display:none' class='expand28'><b>Browser<b></th>
					</tr>

					<?php
					$intake_id=$row['intake_id'];
					while($row = $stmt->fetch()){
						echo	"<form id='submit_form' name='submit_form' action='forms_bijwerken.php' method='post'>"; 
						echo 	"<tr>";
						
						echo	"<td class='geb' style='color: #ed0f84'  id='usrn' class='clickable'><i> ".$row['gebruikersnaam']."</i></td>";
						echo	"<td class='expand'   style='display:none' text-align:center'><i>".$row['intake_id']."</i></td></div>";
						echo	"<td class='expand1'> 		".$row['naam_app'].				"</td>";
						echo	"<td class='expand2'> 		".$row['url'].					"</td>";
						echo	"<td class='expand3'> 		".$row['google_account'].		"</td>";
						echo	"<td class='expand4'> 		".$row['ios'].					"</td>";
						echo	"<td class='expand5'> 		".$row['android'].				"</td>";
						echo	"<td class='expand6'> 		".$row['windows'].				"</td>";
						echo	"<td class='expand7'> 		".$row['support_email'].		"</td>";
						echo	"<td class='expand8'> 		".$row['weergave_naam'].		"</td>";
						echo	"<td class='expand9'> 		".$row['email_onthouden'].		"</td>";
						echo	"<td class='expand10'> 		".$row['wachtwoord_onthouden'].	"</td>";
						echo	"<td class='expand11'> 		".$row['apparaat_activatie'].	"</td>";
						echo	"<td class='expand12'> 		".$row['incrowds_1'].			"</td>";
						echo	"<td class='expand13'> 		".$row['incrowds_2'].			"</td>";
						echo	"<td class='expand14'> 		".$row['incrowds_3'].			"</td>";
						echo	"<td class='expand15'> 		".$row['incrowds_4'].			"</td>";
						echo	"<td class='expand16'> 		".$row['incrowds_5'].			"</td>";
						echo	"<td class='expand17'> 		".$row['ongelezen_berichten'].	"</td>";
						echo	"<td class='expand18'> 		".$row['rol_1'].				"</td>";
						echo	"<td class='expand19'> 		".$row['email_1'].				"</td>";
						echo	"<td class='expand20'> 		".$row['rol_2'].				"</td>";
						echo	"<td class='expand21'> 		".$row['email_2'].				"</td>";
						echo	"<td class='expand22'> 		".$row['rol_3'].				"</td>";
						echo	"<td class='expand23'> 		".$row['email_3'].				"</td>";
						echo	"<td class='expand24'> 		".$row['bijlage_1'].			"</td>";
						echo	"<td class='expand25'> 		".$row['bijlage_2'].			"</td>";
						echo	"<td class='expand26'> 		".$row['bijlage_3'].			"</td>";
						echo	"<td class='expand27'> 		".$row['ip'].					"</td>";
						echo	"<td class='expand28'> 		".$row['browser'].				"</td>";
				//echo	'<td class="expand29"><input class="expand29" title="Bijwerken" type="image" style="padding:5px;float:left;" src="images/opslaan.png" width="35px" id="submit" name="submit" value="submit">';
				//echo	'<a class="expand29" style="" href="forms_verwijderen.php?intake_id='.$row['intake_id'].'"><img class="expand29" title="Verwijderen" style="padding:5px;float:left" id="remove_user" src="images/remove.png" width="35px"</a></td>';
					};
					?>
				</tr>
			</form>
		</thead>
	</table>
</center>
</div>
<hr>
</body>


