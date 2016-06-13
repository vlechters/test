<?php
require("cookie.php");
require_once("toolkit.php"); 

checkCredentials([
    ROLE_SUPER_ADMIN,
    ROLE_ADMIN
]) or die(); 
?>

<hr><div id="sliding_up_admin"><img style="display:block; margin: 0 auto" src="images/omhoog.png" width="25px"></div>
<h3 style='text-align:center; font-family: amaranth; color:#607D8B' id='admn'>Administrators</h3>
<div id="sliding_down_admin"><img style="display:block; margin: 0 auto;" src="images/omlaag.png" width="25px"></div><br>
<div id='bottom-navigation'>

<?php
$q = "SELECT gebruikersnaam,wachtwoord,id,rollen FROM cms_login WHERE rollen =1";
$stmt = $conn->prepare( $q );
$stmt->execute();
?>


<center>
<table>
	<thead>
		<tr>
			<!--<th style = 'color:#e20363'>ID <br> </th>-->
			<th style="padding:10px">Gebruikersnaam <br></th>
			<th style="padding:10px">Wachtwoord<br></th>
			<th style="padding:10px; min-width:73px">Actie<br></th>
		</tr>
    </thead>
    <tbody>
</body>


<?php
while($row = $stmt->fetch()){
		$id=$row['id'];
		echo "<tr>";
		echo "<form action='update.php' method='post'>";
		echo	"<td style='color:#e20363; text-align:center; display:none'><input type='tekst' value='{$row['id']}' name='id' readonly></td>"; 
		echo	"<td id='usrn'><input style='width:80%' type='text' value='{$row['gebruikersnaam']}' name='admin_username' ></td>";
		echo	"<td id='pssw'><input style='width:80%' type='password' value='{$row['wachtwoord']}' name='admin_password' ></td>";
		echo	'<td><input title="Bijwerken" type="image" style="padding:5px;display:block;float:left;" src="images/opslaan.png" width="35px" id="submit_form" value="submit">';
		echo	'<a href="delete_admin.php?id='.$row['id'].'"><img title="Verwijderen" style="padding:5px;float:left;" id="remove_user" src="images/remove.png" width="35px"</a></td>';
		echo 	"</form>";
		echo '<center>';
		echo	'</center>';
		echo "</tr>";
	}

echo "</tbody>";
echo "</table>";
echo "<br><br>";
?>


