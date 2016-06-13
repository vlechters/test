<?php
require("toolkit.php"); 
require("databaseconnection.php"); 
require("shared_header.php");


checkCredentials([
    ROLE_SUPER_ADMIN,
    ROLE_ADMIN
]) or die(); 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Account(s) bewerken</title>
		<?php require("shared_taglinks.php"); ?>
</head>
 

<body>
	<img style="margin-down:20px; display:block; margin: 0 auto" src="images/omhoog.png" width="25px" id="sliding_up">
	<h3 style='text-align:center; font-family: amaranth; color:#607D8B;' id="gebr">Gebruikers</h3>
	<img style="display:block; margin: 0 auto" src="images/omlaag.png" width="25px" id="sliding_down"><br>
	<div id="top-navigation">

<?php
// Rows ophalen van DB 
$conn = DatabaseConnection::getConnection();
$q = "SELECT gebruikersnaam,wachtwoord,id FROM cms_login WHERE rollen =0";
$stmt = $conn->prepare( $q );
$stmt->execute();
?>


<div id="box">
<!-- Table -->
<center>
	<table>
		<thead>
			<tr>
			<!--<th>ID <br> </th>-->
				<th style="padding:10px" >Gebruikersnaam <br></th>
				<th style="padding:10px">Wachtwoord<br></th>
				<th style="padding:10px">Wachtwoord bevestigen<br></th>
				<th style="padding:10px">Actie<br></th>
			</tr>
		</thead>
			<tbody>
</div>

<?php
while($row = $stmt->fetch()){
		$id=$row['id'];
		echo 	"<tr>";
		echo	"<form id='submit_form' name='submit_form' action='update.php' method='post'>";
		echo	"<td style='color:#e20363; text-align:center; display:none'><input type='text' value='{$row['id']}' name='id' readonly></td>";
		echo	"<td id='usrn'><input style='width:80%' type='text' value='{$row['gebruikersnaam']}' name='username'></td>";
		echo	"<td id='pssw'><input style='width:80%' type='password' value='{$row['wachtwoord']}' name='password' ></td>";
		echo	"<td id='pssw'><input style='width:80%' type='password' value='' name='confirm_password'></td>";
		echo	'<td id="testing"><input title="Bijwerken" type="image" style="padding:5px; margin-left:15%; float:left" src="images/opslaan.png" width="35px" id="submit_form" value="submit">';
		echo	'<a href="delete.php?id='.$row['id'].'"><img title="Verwijderen" style="padding:5px; margin-left:7% float:left" id="remove_user" src="images/remove.png" width="35px"</a></td>';
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



<?php if (checkCredentials([
    ROLE_SUPER_ADMIN,
    ROLE_ADMIN
])){
		include_once('accountbeheer_admin.php');
		}
?>
</div>
<hr>
