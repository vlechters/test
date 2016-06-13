<?php 
require("databaseconnection.php");
require("toolkit.php");
session_start();
?>

<?php
$errmsg_arr = array();
$errflag = false;

if (isset($_POST["inloggen"])) {

	 
	$user = $_POST['gebruikersnaam'];
	$password = $_POST['wachtwoord'];

	 
	if($user == '') {
		$errmsg_arr[] = 'Voer een geldige gebruikersnaam in';
		$errflag = true;
		echo $errflag;
	}
	if($password == '') {
		$errmsg_arr[] = 'Voer een geldige wachtwoord in';
		$errflag = true;
		echo $errflag;
	}
	 
	 
	
	// query

	$conn = DatabaseConnection::getConnection();
	$result = $conn->prepare("SELECT * FROM cms_login WHERE gebruikersnaam= :USERID AND wachtwoord= :PASSWORD");
	$result->bindParam(':USERID', $user);
	$result->bindParam(':PASSWORD', $password);
	$result->execute();
	$rows = $result->fetchAll();
	$count = $result->rowCount();
	if($count > 0) {
			foreach($rows as $row) {
				$_SESSION['id'] = $row['id'];
				$_SESSION['gebruikersnaam'] = $row['gebruikersnaam'];
				$_SESSION['rollen'] = $row['rollen'];
			
			}

}
	
	else{
		echo "geen account gevonden";
		sleep();
	}



if($_SESSION['rollen'] == 1) {
		echo '<script>window.open("home.php","_self")</script>';
	}

elseif($_SESSION['rollen'] == 0) {
		echo '<script>window.open("home.php","_self")</script>';
	}

elseif($_SESSION['rollen'] == 2) {
		echo '<script>window.open("home.php","_self")</script>';
	}


else{
		echo '<div id="error">!  Er is helaas geen account gevonden met door uw ingevoerde gegevens  !</div>';
	}

 } 
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="nl" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="nl" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="nl" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="nl" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
 <html lang="nl" class="no-js"> <!--<![endif]-->
<head>
<title>Log in op Vereniging Van Vlechters</title>
<?php require("shared_taglinks.php"); ?>
<!-- Uitzondering CSS  -->
<style>

#login-block{
	border-radius: 10px;
	width: 85%;
	max-width:600px;
	box-shadow: 0 0 0 2px white, 6px 6px 7px 6px rgba(5, 5, 0, 0.3); 
	margin-top:5% !important;
	display:block;
	margin: 0 auto;
	padding: 15px;
	background-color: rgba(255,255,255,0.3);
	};
</style>
</head>
   
   
   
<body>
<br><br><br><br><br>
<div id="login-block">
	<form action="index.php" method="POST" id="inloggen"> 
	<center><img style="margin-top:5px;" src="images/logo.png" width='45%'>
	<hr></center>
    <br>
		<!--<h3 style="text-align:center; color:#607D8B;">Gebruikersnaam:</h3-->
		<input id="gebruikersnaam" name="gebruikersnaam"  required type="text" maxlength=15 placeholder="Gebruikersnaam" required/>
		<!--h3 style="text-align:center; color:#607D8B;">Wachtwoord:</h3-->
		<input id="wachtwoord" name="wachtwoord" required type="password" placeholder="Wachtwoord" maxlength=15 required />  
		<input style="text-align:center; display:block; margin: 0 auto; width:50%;" type="submit" name="inloggen"  value="Log in" id="inloggen" /> 
	</form>
</div>
<br>

<center>
	<div id="home">
		<br><a href="" class='terug'><img src='images/terug.png' width='40px' title='Terug naar Home'><br>Terug</a></div>
</center> 
</div>
</div>
				
</body>
<footer></footer>
</html>