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

											<!-- BEGIN HOOFD-INHOUD WEBSITE -->
			<div class="content1">
				<h2 onclick="OpenMenu()">INFOURMAAAAAYSJUUUUUNNN </h2>
				<img src="img/logo.gif" alt="logo">
					
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quibusdam quis suscipit, est et, sequi laudantium odio maxime quod quas rerum, repudiandae unde dolore molestias perferendis! Blanditiis repellat ipsam et deleniti soluta omnis eligendi velit tempore facilis iusto, suscipit, doloribus.</p>	
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum dolorem, perspiciatis? Consequatur eligendi nesciunt voluptatum, dolorum sed doloremque quia, nemo? Ipsum dolor sit amet, consectetur adipisicing elit. Neque laboriosam, incidunt repellat libero voluptatem corporis repudiandae iusto illum atque! Animi!</p>

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