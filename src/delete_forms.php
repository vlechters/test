<?php
require ('databaseconnection.php');
$intake_id = 0;

if ( !empty($_GET['intake_id'])) {
		$intake_id = $_REQUEST['intake_id'];
	};
     

if ( !empty($_POST)) {
		// Hou post values bij
		$intake_id = $_POST['intake_id'];
		$sqlDelete = "DELETE FROM incrowd WHERE intake_id = :intake_id";
		$preparedStatement = $conn->prepare($sqlDelete);
		$preparedStatement->execute(array(':intake_id' => $intake_id));
		echo "<script>window.location.href = 'forms_inzien.php';</script>";
	};
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Intakeformulier verwijderen</title>
<?php require("shared_taglinks.php"); ?>
</head>
 
<body>
<center>
<div id="box">
	<form action="delete_forms.php" method="post">
		<input type="hidden" name="intake_id" value="<?php echo $intake_id;?>"/>
		<p>Weet je het zeker ?</p>
        <button type="submit">Ja</button>
    	<a href="forms_inzien.php"><button>Nee</button></a> 
    </form>
</div>
</center>
</body>
</html>
