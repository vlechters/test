<?php
require 'connecties\artikeldatabase.php';
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

	<?php
	require('header+side_menu.php');
	?>
	

	
	<div class="gig">
		<div class="content">

			<div class="slider-container">		<!-- BEGIN FOTO-SLIDER-->

				<div class="cycle-slideshow"
				data-cycle-auto-height="16:9"
				data-cycle-loader="wait"
				data-cycle-fx="scrollHorz"
				data-cycle-speed="1000"

				data-cycle-prev="#Bl"
				data-cycle-next="#Br"
				>
				<!-- <div class="cycle-pager"></div> -->
					<img src="img/wallpaper1.jpg">
					<img src="img/wallpaper2.jpg">
					<img src="img/wallpaper3.jpg">
				</div>

				<a href=# class="SlideButton" id="Bl">&lang;</a>
				<a href=# class="SlideButton" id="Br">&rang;</a>
			</div>
		
			<br>
			<br>
			<br>								<!-- BEGIN HOOFD-INHOUD WEBSITE -->
			<div class="content1">
				<h2 onclick="OpenMenu()">Welkom op de website van de VERENIGING VAN VLECHTERS</h2>
				<img src="img/logo.gif" alt="logo">
					
				<p>De Vereniging van Vlechters is een vereniging, die contacten tussen mensen met belangstelling voor het vlechten wil stimuleren en onderhouden.</p>
				<p>Deze onderlinge contacten wil onze vereniging bevorderen door deze website, door het periodiek uitgeven van een Vlechtbulletin en door het organiseren van contactdagen.</p>
			</div>
			

			<div id="AllBox">
				<div class="boxes" id="box1">
					<?php
						// Rows ophalen van DB 
						$conn = ArtikelDatabase::getConnection();
						$q = "SELECT auteur,titel,artikel_inhoud,datum_aangemaakt FROM artikels WHERE artikel_id = ?" ;
						$stmt = $conn->prepare( $q );
						$stmt->execute(array(1));
	
						while($row = $stmt->fetch()){
							echo "<h3>".$row['titel']."</h3>";
							echo $row['artikel_inhoud']."<hr>";
							echo "<span>".$row['auteur']."</span><span>".$row['datum_aangemaakt']."</span>";
						}
					?>
				</div>
				<div class="boxes" id="box2">
					<?php
						// Rows ophalen van DB 
						$conn = ArtikelDatabase::getConnection();
						$q = "SELECT auteur,titel,artikel_inhoud,datum_aangemaakt FROM artikels WHERE artikel_id = ?" ;
						$stmt = $conn->prepare( $q );
						$stmt->execute(array(2));
	
						while($row = $stmt->fetch()){
							echo "<h3>".$row['titel']."</h3>";
							echo "<p>".$row['artikel_inhoud']."</p><hr>";
							echo "<span>".$row['auteur']."</span><span>".$row['datum_aangemaakt']."</span>";
						}
					?>
				</div>
				<div class="boxes" id="box3">
					<?php
						// Rows ophalen van DB 
						$conn = ArtikelDatabase::getConnection();
						$q = "SELECT auteur,titel,artikel_inhoud,datum_aangemaakt FROM artikels WHERE artikel_id = ?" ;
						$stmt = $conn->prepare( $q );
						$stmt->execute(array(3));
	
						while($row = $stmt->fetch()){
							echo "<h3>".$row['titel']."</h3>";
							echo "<p>".$row['artikel_inhoud']."</p><hr>";
							echo "<span>".$row['auteur']."</span><span>".$row['datum_aangemaakt']."</span>";
						}
					?>
				</div>
				<div class="boxes" id="box4">
					<?php
						// Rows ophalen van DB 
						$conn = ArtikelDatabase::getConnection();
						$q = "SELECT auteur,titel,artikel_inhoud,datum_aangemaakt FROM artikels WHERE artikel_id = ?" ;
						$stmt = $conn->prepare( $q );
						$stmt->execute(array(4));
	
						while($row = $stmt->fetch()){
							echo "<h3>".$row['titel']."</h3>";
							echo "<p>".$row['artikel_inhoud']."</p><hr>";
							echo "<span>".$row['auteur']."</span><span>".$row['datum_aangemaakt']."</span>";
						}
					?>
				</div>
			</div>

		</div>
	</div>
</body>
</html>