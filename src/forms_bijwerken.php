<?php
require("cookie.php");
require("toolkit.php");  
require("shared_header.php");
require("databaseconnection.php");
session_start();

//(functie in tookit.php) Er wordt gekeken naar wie een toestemming heeft om deze pagina te kunnen zien
checkCredentials([
    ROLE_SUPER_ADMIN,
    ROLE_ADMIN,
]) or die(); 

if(isset($_POST['submit'])){
		$conn = DatabaseConnection::getConnection();
		$sql = "UPDATE `incrowd` SET `gebruikersnaam` = :gebruikersnaam,
		`naam_app` = :naam_app,
		`url` = :url,
		`google_account` = :google_account,
		`ios` = :ios,
		`android` = :android,
		`windows` = :windows,
		`support_email` = :support_email,
		`weergave_naam` = :weergave_naam,
		`email_onthouden` = :email_onthouden,
		`wachtwoord_onthouden` = :wachtwoord_onthouden,
		`apparaat_activatie` = :apparaat_activatie,
		`beveiliging` = :beveiliging,
		`incrowds_1` = :incrowds_1,
		`incrowds_2` = :incrowds_2,
		`incrowds_3` = :incrowds_3,
		`incrowds_4` = :incrowds_4,
		`incrowds_5` = :incrowds_5,
		`ongelezen_berichten` = :ongelezen_berichten,
		`rol_1` = :rol_1,
		`email_1` = :email_1,
		`rol_2` = :rol_2,
		`email_2` = :email_2,
		`rol_3` = :rol_3,
		`email_3` = :email_3,
		`bijlage_1` = :bijlage_1,
		`bijlage_2` = :bijlage_2,
		`bijlage_3` = :bijlage_3,
		`gebruikersnaam` = :gebruikersnaam,
		`ip` = :ip WHERE intake_id = :intake_id";

		$statement = $pdo-> prepare($sql);
		$statement->bindValue(':gebruikersnaam', $_POST['gebruikersnaam']);
		$statement->bindValue(':naam_app', $_POST['naam_app']);
		$statement->bindValue(':url', $_POST['url']);
		$statement->bindValue(':google_account', $_POST['google_account']);
		$statement->bindValue(':ios', $_POST['ios']);
		$statement->bindValue(':android', $_POST['android']);
		$statement->bindValue(':windows', $_POST['windows']);
		$statement->bindValue(':support_email', $_POST['support_email']);
		$statement->bindValue(':weergave_naam', $_POST['weergave_naam']);
		$statement->bindValue(':email_onthouden', $_POST['email_onthouden']);
		$statement->bindValue(':wachtwoord_onthouden', $_POST['wachtwoord_onthouden']);
		$statement->bindValue(':apparaat_activatie', $_POST['apparaat_activatie']);
		$statement->bindValue(':beveiliging', $_POST['beveiliging']);
		$statement->bindValue(':incrowds_1', $_POST['incrowds_1']);
		$statement->bindValue(':incrowds_2', $_POST['incrowds_2']);
		$statement->bindValue(':incrowds_3', $_POST['incrowds_3']);
		$statement->bindValue(':incrowds_4', $_POST['incrowds_4']);
		$statement->bindValue(':incrowds_5', $_POST['incrowds_5']);
		$statement->bindValue(':ongelezen_berichten', $_POST['ongelezen_berichten']);
		$statement->bindValue(':rol_1', $_POST['rol_1']);
		$statement->bindValue(':email_1', $_POST['email_1']);
		$statement->bindValue(':rol_2', $_POST['rol_2']);
		$statement->bindValue(':email_2', $_POST['email_2']);
		$statement->bindValue(':rol_3', $_POST['rol_3']);
		$statement->bindValue(':email_3', $_POST['email_3']);
		$statement->bindValue(':bijlage_1', $_POST['bijlage_1']);
		$statement->bindValue(':bijlage_2', $_POST['bijlage_2']);
		$statement->bindValue(':bijlage_3', $_POST['bijlage_3']);
		$statement->bindValue(':gebruikersnaam', $_POST['gebruikersnaam']);
		$statement->bindValue(':ip', $_POST['ip']);
		$statement->bindValue(':intake_id', $_POST['intake_id']);
		$update = $statement->execute();

			if($update){
					header('Location: forms_inzien.php'); 
			};
};