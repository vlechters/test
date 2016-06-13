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
	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="FontAwesome\css\font-awesome.min.css"><!-- ICONSPACK FONT-AWESOME -->


	
									<!-- J-QUERY -->
	<script src="jquery-2.2.4.js" type="text/javascript"></script>	
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){


			click = true;
			$('.hamburger').click(function(){
				if(click){
					$('#sideMenu').css('width','300px');
					$('body').css('margin-left','300px');
					$('body').toggleClass('open');
					click = false;
				}else{
					$('#sideMenu').css('width','0');
					$('body').css('margin-left','0');
					click = true;
				}
			});

			if(click==false){
				$('body').click(function(){
					$('#sideMenu').css('width','0');
					$('body').css('margin-left','0');
					click = true;
				});
				
			};


			
			
	
		});
		function OpenMenu(){
			document.body.style.backgroundColor = "rgba(0,0,0,1)";
			
		}
	
	</script>
	<script src="jquery.cycle2.min.js" type="text/javascript"></script>	<!--SPECIAL J-QUERY VOOR SLIDER-->

</head>
									<!-- BEGIN-BODY -->
<body id="page">
	<div class="top-bar">
		<div id="sideMenu">
			<ul>
				<a href="index.php">    <li><i class="fa fa-home fa-2x"></i>&nbsp;&nbsp;Home</li>    </a>
				<a href="informatie.php">    <li><i class="fa fa-info-circle fa-2x"></i>&nbsp;&nbsp;Informatie</li>    </a>
				<a href="nieuws.php">    <li><i class="fa fa-newspaper-o fa-2x"></i>&nbsp;&nbsp;Nieuws</li>    </a>
				<a href="">    <li><i class="fa fa-cog fa-2x"></i>&nbsp;&nbsp;Instellingen</li>    </a>
			</ul>
		</div>

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

				<a href="nieuws.php">
					<li >
						<i class="fa fa-newspaper-o fa-3x"></i>
						<br>Nieuws
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
				<img src="wallpaper1.jpg">
				<img src="wallpaper2.jpg">
				<img src="wallpaper3.jpg">
			</div>

			<a href=# class="SlideButton" id="Bl">&lang;</a>
			<a href=# class="SlideButton" id="Br">&rang;</a>
		</div>
	
		<br>
		<br>
		<br>								<!-- BEGIN HOOFD-INHOUD WEBSITE -->
		<div class="content1">
			<h2 onclick="OpenMenu()">Welkom op de website van de VERENIGING VAN VLECHTERS</h2>
			<img src="logo.gif" alt="logo">
				
			<p>De Vereniging van Vlechters is een vereniging, die contacten tussen mensen met belangstelling voor het vlechten wil stimuleren en onderhouden.</p>
			<p>Deze onderlinge contacten wil onze vereniging bevorderen door deze website, door het periodiek uitgeven van een Vlechtbulletin en door het organiseren van contactdagen.</p>
		</div>
		

		<div id="Boxez">
			<div class="boxes" id="box1">
				<h3>Litora torquent per conubia nostra.</h3>

					</p>


				<div class="auteur">Mohammad Masoumi</div><div class="datum"> 13-05-2016</div><!-- auteur en datum aangemaakt -->
			</div>
			<div class="boxes" id="box2">
				<h3>Dolor sit amet, consectetur, adipisci.</h3>
				<p><?php
					// Rows ophalen van DB 
					$conn = ArtikelDatabase::getConnection();
					$q = "SELECT auteur,afbeelding_url,titel,artikel_inhoud,datum_aangemaakt FROM artikels";
					$stmt = $conn->prepare( $q );
					$stmt->execute();

					while($row = $stmt->fetch()){
						echo 	"<tr>";
						echo	"<td style='color:#e20363; text-align:center; display:none'><input type='text' value='{$row['auteur']}' name='id' readonly></td>";
						echo	"<td><input   type='text' value='{$row['afbeelding_url']}' name='afbeelding_url'></td>";
						echo	"<td><input   type='text' value='{$row['titel']}' name='titel' ></td>";
						echo	"<td ><input  type='text' value='{$row['artikel_inhoud']}' name='artikel_inhoud' ></td>";
						echo	"<td ><input  type='text' value='{$row['datum_aangemaakt']}' name='datum_aangemaakt' ></td>";
					}
					?></p>
			</div>
			<div class="boxes" id="box3">
				<h3>Arcu nec dapibus. Vivamus et ligula nec.</h3>
				<p>Pellentesque accumsan porta lacus, non aliquet erat venenatis at. Aenean varius, justo sit amet cursus semper, enim nulla egestas ante, sit amet auctor metus ligula sed quam. In convallis faucibus quam et dapibus. Suspendisse feugiat lorem neque, ut porta neque faucibus ac. Nullam varius convallis malesuada. Quisque consequat luctus arcu nec dapibus. Vivamus et ligula nec urna posuere ultrices pretium vitae ipsum. Maecenas at laoreet tortor.</p>
			</div>
			<div class="boxes" id="box4">
				<h3>Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</h3>
				<p>In felis justo, laoreet a tempus at, accumsan a sem. Suspendisse laoreet quis libero quis luctus. Praesent pulvinar pellentesque felis, in gravida dui. Etiam volutpat dignissim enim, et facilisis neque molestie a. Nam auctor velit sit amet velit pharetra gravida. Quisque vulputate lacus non arcu dignissim consectetur. Etiam vitae placerat est, sit amet efficitur dolor. Suspendisse aliquet libero quam, non venenatis eros sollicitudin sit amet. Vivamus auctor neque quis metus mattis venenatis.</p>
			</div>
		</div>

	</div>
	
</body>
</html>