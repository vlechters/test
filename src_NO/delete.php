<?php
    require 'databaseconnection.php';
    $id = 0;
     
if (!empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	};
     
     
if (isset($_POST['submit'])) {
		$conn = DatabaseConnection::getConnection();
		$id = $_POST['id'];
		$sqlDelete = "DELETE FROM cms_login WHERE rollen !=1 AND rollen !=2 AND id = :id";
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
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">

<style>
input[type="submit"],
input[type="button"]{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 70%;
    max-width:620px;
    padding: 2%;
    background: #e20363;
    text-align:center;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;    
    color: #fff;
    font-size:16px;
    font-family: 'Amaranth', sans-serif;
}
input[type="submit"]:hover,
input[type="button"]:hover{
    background:#FF3B72;
    cursor:pointer; 
}
</style>
</head>
 
<body>
<center>
    <form action="delete.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id;?>"/>
    <p>Gebruiker verwijderen ?</p>
    <button type="submit" name="submit">Bevestigen</button>
    <button type="submit" name="cancel">Annuleren</button>
    </form>
</center>
</body>
</html>
