<?php
require("toolkit.php"); 
require("databaseconnection.php"); 
require("shared_header.php");
session_start();
//(functie in tookit.php) Er wordt gekeken naar wie een toestemming heeft om deze pagina te kunnen zien
checkCredentials([
    ROLE_SUPER_ADMIN,
    ROLE_ADMIN
]) or die(); 
?>

<?php
if(isset($_POST['username'])){
		$conn = DatabaseConnection::getConnection();
		$sql = "UPDATE `cms_login` SET `gebruikersnaam` = :username WHERE id = :id";
		$statement = $conn-> prepare($sql);
		$statement->bindValue(':id', $_POST['id']);
		$statement->bindValue(':username', $_POST['username']);
		$update = $statement->execute();

			if($update){
				header('Location: accountbeheer.php'); 
			}
};


if(isset($_POST['admin_username'])){
		$conn = DatabaseConnection::getConnection();
		$sql = "UPDATE `cms_login` SET `gebruikersnaam` = :admin_username WHERE id = :id";
		$statement = $conn-> prepare($sql);
		$statement->bindValue(':id', $_POST['id']);
		$statement->bindValue(':admin_username', $_POST['admin_username']);
		$update = $statement->execute();

			if($update){
				header('Location: accountbeheer.php'); 
			}
};	



if(isset($_POST['password'])){
		$conn = DatabaseConnection::getConnection();
		$sql = "UPDATE `cms_login` SET `wachtwoord` = :password WHERE id = :id";
		$statement = $conn-> prepare($sql);
		$statement->bindValue(':id', $_POST['id']);
		$statement->bindValue(':password', $_POST['password']);
		$update = $statement->execute();

			if($update){
				header('Location: accountbeheer.php'); 
			}
};


if(isset($_POST['admin_password'])){
		$conn = DatabaseConnection::getConnection();
		$sql = "UPDATE `cms_login` SET `wachtwoord` = :admin_password WHERE id = :id";
		$statement = $conn-> prepare($sql);
		$statement->bindValue(':id', $_POST['id']);
		$statement->bindValue(':admin_password', $_POST['admin_password']);
		$update = $statement->execute();
		
			if($update){
				header('Location: accountbeheer.php'); 
			}
};
?>