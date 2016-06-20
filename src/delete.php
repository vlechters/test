<?php
    require 'artikeldatabase.php';
    require 'databaseconnection.php';
    require 'toolkit.php';
    $artikel_id = 0;
     
if (!empty($_GET['artikel_id'])) {
		$artikel_id = $_REQUEST['artikel_id'];
	};
     
     
if (isset($_POST['submit'])) {  // Als er op OK wordt gedrukt, verwijder dan de record

        $conn = ArtikelDatabase::getConnection();
        $artikel_id = $_POST['artikel_id'];
 		$sqlDelete = "DELETE FROM artikels WHERE  artikel_id = :artikel_id";
		$preparedStatement = $conn->prepare($sqlDelete);
		$preparedStatement->execute(array(':artikel_id' => $artikel_id));

    if($sqlDelete){
        echo "<script>window.location.href = 'contentbeheer.php';</script>";
        
    }

	}
	
	else if (isset($_POST['cancel'])) { // Als er op cancel gedrukt wordt, ga dan terug 
		echo "<script>window.location.href = 'contentbeheer.php';</script>";
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
    <input type="hidden" name="artikel_id" value="<?php echo $artikel_id;?>"/>
    <p>Artikel <?php echo $artikel_id ?> verwijderen ?</p>
    <button type="submit" name="submit">Bevestigen</button>
    <button type="submit" name="cancel">Annuleren</button>
    </form>
</center>
</body>
</html>
