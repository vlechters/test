<?php
require("cookie.php");
require("toolkit.php"); 
require("databaseconnection.php"); 
require("shared_header.php");
require("shared_taglinks.php");
session_start();

//(functie in tookit.php) Er wordt gekeken naar wie een toestemming heeft om deze pagina te kunnen zien
checkCredentials([
	ROLE_SUPER_ADMIN,
	ROLE_ADMIN
	]) or die(); 

$gebruikersnaam=$_POST["gebruikersnaam"];
$wachtwoord=$_POST["wachtwoord"];
$wachtwoord_confirm=$_POST["wachtwoord_confirm"];
$rollen=$_POST['rollen'];

if ($rollen==true){
	$rollen=1;
};


if (isset($_POST['submit'])) {
	if ($wachtwoord==$wachtwoord_confirm){
		$conn = DatabaseConnection::getConnection();
		$sql = "INSERT IGNORE INTO `cms_login` (gebruikersnaam,wachtwoord,rollen) VALUES ('$gebruikersnaam','$wachtwoord','$rollen')";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		echo"<center>" . "<p style='color:#607D8B;font-size:18px;width:350px;font-weight: bold;background-color: white;'>" ."<br>". "<b>"."Nieuwe account is aangemaakt: " .$gebruikersnaam.   "</b>". "<br>". "</center>". "</p>";
		echo "<script>";
		echo "function Redirect() 
		{  
			window.location='home.php'; 
		} 
		setTimeout('Redirect()', 3000); ";
		echo "</script>";
	}
	else{
		echo "<script>alert ('Uw wachtwoord komt niet overeen met de bevestiging. Probeer het nog eens'); </script>";
		echo "<script>";
		echo "function Redirect() 
		{  
			window.location='account_aanmaken.php'; 
		} 
		setTimeout('Redirect()', 1000); ";
		echo "</script>";
	}
};
?>