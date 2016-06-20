<?php
require ('artikeldatabase.php');
require("toolkit.php"); 
require 'databaseconnection.php';
require("shared_header.php");
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


		<style>


table,td,th{
	width:50% !important;
}

			input[type="text"]{
				font-size: 1.2em !important;
				width: 90% !important;
				border: 1px solid #bcc35d;
			}

			::-webkit-input-placeholder {
				font-size:1em !important;
				border-color: #87100e !important;
			}
			:-moz-placeholder { /* voor Firefox 18- */
				font-size:1em !important;
				border-color: #87100e !important;
			}

			::-moz-placeholder {  /* voor Firefox 19+ */
				font-size:1em !important;
				border-color: #87100e !important;

			}

			:-ms-input-placeholder {  
				font-size:1em !important;
				border-color: #87100e !important;
			}
			

		</style>
	</head>


	<body>
		<div id="top-navigation">

			<center>
				<!--textarea id="edit_area"><h3>&nbsp;</h3>

<h3><span style="font-size:14px"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1)</strong>&nbsp;<em>Schrijf hier uw artikel (met opmaak)</em><br />
<strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2)</strong>&nbsp;<em>Klik op&nbsp;<img alt="" src="images/broncode.png" style="height:28px; width:87px" /></em><em>&nbsp;rechtsboven,&nbsp;</em><strong>selecteer en kopieer</strong><em>&nbsp;alles&nbsp;<strong>&nbsp;</strong>(&nbsp;</em><strong>CTRL</strong> + <strong>A</strong><em> )</em><br />
<strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;3)</strong>&nbsp;<strong>Plak ( CTRL</strong> + <strong>V&nbsp;)&nbsp;de code</strong><em>&nbsp;in de bijhorende&nbsp;artikel hieronder&nbsp;en druk op &#39;</em><strong>Opslaan&#39;</strong>&nbsp;( <img alt="" src="images/save.png" />&nbsp; )</span></h3>

<p><span style="font-size:14px"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;4)</strong>&nbsp;<em>Artikel is nu geplaatst</em>&nbsp;<img alt="yes" src="http://localhost/mohammad_login/ckeditor/plugins/smiley/images/thumbs_up.png" style="height:23px; width:23px" title="yes" /></span></p>

<p>&nbsp;</p>

</textarea-->

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
					$conn = null;
				
}
				catch(PDOException $e) {
					trigger_error('Er is een fout onstaan bij het ophalen van de gebruikers in de database:' . $e->getMessage(), E_USER_ERROR);
				}

				?>


				<?php
				while($row = $stmt->fetch()){
						
				

					echo "<center>";
					echo "<table>";
					echo "<thead>";
					echo "<tbody>";

					echo "	<td>Auteur</td> ";
					echo "	<td>Titel</td>";
					echo "	<td>  Opslaan   </td>";
					echo "	<td>    Verwijderen   </td>";


					$artikel_id=$row['artikel_id'];
					$artikel_titel=$row['titel'];
							$artikel_inhoud = htmlspecialchars_decode($row['artikel_inhoud']); // Formateer raw html code uit mysql code
							echo "<tr>";
							echo	"<form id='submit_form' name='submit_form' action='update.php' method='post'>";


							// ARTIKEL ID
							echo	"<td style='color:blue; text-align:center; display:none'><input type='text' value='{$row['artikel_id']}' name='artikel_id' readonly></td>"; 

							// AUTEUR
							echo	"<td width:10% style='color:#e20363; text-align:center;'><input type='text' value='{$row['auteur']}' name='auteur' readonly></td>";


							 // TITEL
							echo	"<td width='30%'><input style='width:99%' type='text' value='{$row['titel']}' name='titel'></td>";  // ARTIKEL TITEL

							

							// OPSLAAN
							echo	'<td width="10%%"><input name="submit_form" title="Artikel Opslaan" type="image" style="padding:5px; margin: 0 auto;" src="images/opslaan.png" width="45px" id="submit_form" value="submit"></td>';


							// DELETE
							echo	'<td id="submit_form" width="5%"><a href="delete.php?artikel_id='.$row['artikel_id'].'"><img title="Artikel Verwijderen" style="padding:1px;  float:right; margin-right:10px" id="remove_user" src="images/remove.png" width="40px"</a></td>';
							echo "</table>";


							// TEXTAREA

							echo 	"<textarea name='artikel_inhoud' id='artikel_inhoud'>.$artikel_inhoud.</textarea>";


							
							//VERVANG TEXTAREA MET CKEDITOR		

							echo 	"<script> CKEDITOR.replace( 'artikel_inhoud');</script>";
							
							echo 	"</form>";
							echo "<hr>";
							echo "</center>";



						}; 
						?>
<center><a href="contentbeheer.php" class='terug'><img src='images/terug.png' width='40px' title='Terug naar Home'><br>Terug</a></center>
						<center>
						</div>
					</div>

	</html>
	








