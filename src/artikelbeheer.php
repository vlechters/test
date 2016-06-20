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
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Account(s) bewerken</title>
		<?php require("shared_taglinks.php"); ?>
</head>
 

<body>
	<div id="top-navigation">

<?php
// Rows ophalen van DB 
$conn = ArtikelDatabase::getConnection();
$q = "SELECT artikel_id,titel,artikel_inhoud,auteur,datum_aangemaakt FROM artikels # WHERE rollen =0;";
$stmt = $conn->prepare( $q );
$stmt->execute();
$count = $stmt->rowCount();
print_r($count);
?>


<div id="box">
<!-- Table -->
<center>
	<table>
		<thead>
			<tr>
			<!--<th>ID <br> </th>-->
			<th style="padding:10px" >Artikel ID <br></th>
				<th style="padding:10px" >Auteur <br></th>
				<th style="padding:10px">Titel<br></th>
				<th style="padding:10px">Artikel inhoud<br></th>
				<th style="padding:10px">Bewerken<br></th>
				<th style="padding:10px">Verwijderen<br></th>
			</tr>
		</thead>
			<tbody>
</div>

<?php
while($row = $stmt->fetch()){
		$artikel_id=$row['artikel_id'];
		echo 	"<tr>";
		echo	"<form id='submit_form' name='submit_form' action='update.php' method='post'>";
		echo	"<td style='color:#e20363; text-align:center;'><input type='text' value='{$row['artikel_id']}' name='artikel_id' readonly></td>";
		echo	"<td id='usrn'><input style='width:80%' type='text' value='{$row['auteur']}' name='auteur' readonly></td>";
				echo	"<td id='usrn'><input style='width:80%' type='text' value='{$row['titel']}' name='titel'></td>";
						echo	"<td id='usrn'><input id='inhoud_focus' style='width:80%' type='text' value='{$row['artikel_inhoud']}' name='artikel_inhoud'></td>";



							echo	'<td id="submit_form"><a href="artikel_bewerken.php?artikel_id='.$row['artikel_id'].'"><img title="Artikel Verwijderen" style="padding:1px;  float:right; margin-right:30%" id="bewerken" src="images/bewerken.png" width="35px"</a></td>';


		echo	'<td><a href="delete.php?artikel_id='.$artikel_id.'"><img title="Verwijderen" style="padding:5px; margin-left:7% float:left" id="remove_user" src="images/remove.png" width="35px"</a></td>';



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
