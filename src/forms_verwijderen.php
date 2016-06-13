<?php
require("cookie.php");
require("toolkit.php"); 
require("databaseconnection.php"); 
require("shared_header.php");
session_start();

//(functie in toolkit.php) Er wordt gekeken naar wie een toestemming heeft om deze pagina te kunnen zien
checkCredentials([
    ROLE_SUPER_ADMIN,
    ROLE_ADMIN,
    ROLE_CLIENT
]) or die(); 
?>
   
   
<?php 
$intake_id = 0;
if ( !empty($_GET['intake_id'])) {
		$intake_id = $_REQUEST['intake_id'];
	};
     
     
if (isset($_POST['submit'])) {
		// Hou post values bij
		$intake_id = $_POST['intake_id'];
		$conn = DatabaseConnection::getConnection();
		$sqlDelete = "DELETE FROM incrowd WHERE intake_id = :intake_id";
		$preparedStatement = $conn->prepare($sqlDelete);
		$preparedStatement->execute(array(':intake_id' => $intake_id));
		echo "<script>window.location.href = 'forms_inzien.php';</script>";
	}
	
	
else if (isset($_POST['cancel'])) {
		echo "<script>window.location.href = 'forms_inzien.php';</script>";
	}
	
else{
		echo "";
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<center>
		<div id="box">
			<form action="forms_verwijderen.php" method="post">
				<input type="hidden" name="intake_id" value="<?php echo $intake_id;?>"/>
				<p>Intakeformulier verwijderen ?</p>
				<button type="submit" name="submit">Bevestigen</button>
				<button type="submit" name="cancel">Annuleren</button>
			</form>
		</div>
	</center>
</body>
</html>
