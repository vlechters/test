<?php
require ('connecties/artikeldatabase.php');
require("src/toolkit.php") 	; 
require 'connecties/databaseconnection.php';
/*$artikel_id = 0;

if (!empty($_GET['artikel_id'])) {
	$artikel_id = $_REQUEST['artikel_id'];
};*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing livestyle</title>
	
									<!-- FILE-LINKSSSSSS -->
<!-- CSS STYLE -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="FontAwesome/css/font-awesome.min.css"><!-- ICONSPACK FONT-AWESOME -->


	
									<!-- J-QUERY -->
	<script src="js/jquery-2.2.4.js" type="text/javascript"></script>	
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){

			$('.hamburger,#sideMenuBar').click(function(){
					$('#sideMenu').toggleClass('open');
					$('#sideMenuBar').toggleClass('open');
					$('body').toggleClass('open');
			});

			
	
		});
	
	</script>
	<script src="js/jquery.cycle2.min.js" type="text/javascript"></script>	<!--SPECIAL J-QUERY VOOR SLIDER-->

</head>
									<!-- BEGIN-BODY -->
<body>

	<div class="top-bar">
		<div id="sideMenu">
			<ul>
				<a href="index.php">    <li><i class="fa fa-home fa-2x"></i>&nbsp;&nbsp;Home</li>    </a>
				<a href="informatie.php">    <li><i class="fa fa-info-circle fa-2x"></i>&nbsp;&nbsp;Informatie</li>    </a>
				<a href="nieuws.php">    <li><i class="fa fa-newspaper-o fa-2x"></i>&nbsp;&nbsp;Nieuws</li>    </a>
				<a href="">    <li><i class="fa fa-cog fa-2x"></i>&nbsp;&nbsp;Instellingen</li>    </a>
			</ul>
		</div>
		<div id="sideMenuBar"></div>

		<div class="banner">

			<i class="fa fa-bars fa-2x hamburger"></i>
			<!-- <i class="fa fa-bars fa-2x hamburger" onclick="OpenMenu()"></i> -->

			<a href="src/index.php"><div class="begroeting">
							Log In <i class="fa fa-chevron-circle-down"></i>
						</div></a>
			<ul class="menu">
				<a href="index.php">
					<li class="home">
						<i class="fa fa-home fa-3x"></i>
						<br>Home
					</li> | 
				</a>

				<a href="informatie.php">
					<li >
						<i class="fa fa-info-circle fa-3x"></i>
						<br>Informatie
					</li> | 
				</a>

				<a href="artikelen.php">
					<li >
						<i class="fa fa-newspaper-o fa-3x"></i>
						<br>Artikelen
					</li> | 
				</a>
				
				<a href="#">
					<li class="settings">
						<i class="fa fa-cog fa-3x"></i>
						<br>Instellingen
					</li>
				</a>
			</ul>
			
		</div>
	</div>
	

	
	<div class="gig">
		<div class="content">
			

			<div id="artikel_AllBox">
			<?php
				// Rows ophalen van DB 
			
			// Rows ophalen van DB 

					try{
						$conn = ArtikelDatabase::getConnection();
						$q = "SELECT * FROM artikels ";
						$stmt = $conn->prepare( $q );
						// $stmt->bindParam(':artikel_id', $artikel_id, PDO::PARAM_INT);
						$stmt->execute();
						$conn = null; //sluit connectie

					}
					catch(PDOException $e) {
						trigger_error('Er is een fout onstaan bij het ophalen van de gebruikers in de database:' . $e->getMessage(), E_USER_ERROR);
					}

					?>


					<?php
					while($row = $stmt->fetch()){
						echo "<center>";
						echo "<div class='artikel_boxes'>";
						echo "<div class='styled'>";

						$artikel_id=$row['artikel_id'];
						$artikel_titel=$row['titel'];
						
								$artikel_inhoud = htmlspecialchars_decode($row['artikel_inhoud']); // Formateer raw html code uit mysql code
								echo "<h1>".$artikel_titel."<h1>";
								echo "<hr>";
								echo $artikel_inhoud;
								echo "<br><br>";
								echo "</div>";
								echo "</div>";
								echo "</center>";

							}; 
						?>
			</div>

		</div>
	</div>
</body>
</html>