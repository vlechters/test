<?php
require ('databaseconnection.php');
$id = 0;
    $user = $_GET['admin_username'];
     
if ( !empty($_GET['id'])) {
     $id = $_REQUEST['id'];
	};
          
if (isset($_POST['submit'])) {
		// Hou post values bij
		$id = $_POST['id'];
		$conn = DatabaseConnection::getConnection();
		$sqlDelete = "DELETE FROM cms_login WHERE rollen =1 AND id = :id";
		$preparedStatement = $conn->prepare($sqlDelete);
		$preparedStatement->execute(array(':id' => $id));
		echo "<script>window.location.href = 'accountbeheer.php';</script>";
	}
	
else if (isset($_POST['cancel'])) {
	echo "<script>window.location.href = 'accountbeheer.php';</script>";
	}
	
else{
	echo "";
	};
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin verwijderen</title>
<?php require("shared_taglinks.php"); ?>
</head>
 
<body>
<center>
<div id="box">
	<form action="delete_admin.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id;?>"/>
		<p>Admin verwijderen?</p>
		<button type="submit" name="submit">Bevestigen</button>
		<button type="submit" name="cancel">Annuleren</button>
	</form>
</div>
</center>
</body>
<footer><center><a href='home.php' class='terug'><img src='images/terug.png' width='40px' title='Terug'><br>Terug</a></center></footer>
</html>
