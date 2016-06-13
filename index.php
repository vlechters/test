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
	
			
	
		});
		function OpenMenu(){
			document.getElementById('sideMenu').style.width = '300px';
			document.body.style.marginLeft = '300px';
			
		}
	
	</script>
	<script src="jquery.cycle2.min.js" type="text/javascript"></script>	<!--SPECIAL J-QUERY VOOR SLIDER-->

</head>
									<!-- BEGIN-BODY -->
<body>
	<div class="top-bar">
		<div id="sideMenu">
			<ul>
				<li><i class="fa fa-home fa-2x"></i>&nbsp;&nbsp;Home</li>
				<li><i class="fa fa-info-circle fa-2x"></i>&nbsp;&nbsp;Informatie</li>
				<li><i class="fa fa-newspaper-o fa-2x"></i>&nbsp;&nbsp;Nieuws</li>
				<li><i class="fa fa-cog fa-2x"></i>&nbsp;&nbsp;Instellingen</li>
			</ul>
		</div>

		<div class="banner">

			<i class="fa fa-bars fa-2x hamburger" onclick="OpenMenu()"></i>

			<div class="begroeting">
				Dag Mohammed! <i class="fa fa-chevron-circle-down"></i>
			</div>
			<ul class="menu">
				<a href="#">
					<li class="home">
						<i class="fa fa-home fa-3x"></i>
						<br>Home
					</li> | 
				</a>

				<a href="#">
					<li >
						<i class="fa fa-info-circle fa-3x"></i>
						<br>Informatie
					</li> | 
				</a>

				<a href="#">
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
			<h2>Welkom op de website van de VERENIGING VAN VLECHTERS</h2>
			<img src="logo.gif" alt="logo">
				
			<p>De Vereniging van Vlechters is een vereniging, die contacten tussen mensen met belangstelling voor het vlechten wil stimuleren en onderhouden.</p>
			<p>Deze onderlinge contacten wil onze vereniging bevorderen door deze website, door het periodiek uitgeven van een Vlechtbulletin en door het organiseren van contactdagen.</p>
		</div>
		

		<div id="Boxez">
			<div class="boxes" id="box1">
				<h3>Litora torquent per conubia nostra.</h3>
				<p><img src="logo.gif" >Mauris eu nibh vel turpis feugiat iaculis sit amet eu neque. Ut eget sem sit amet nisl viverra mattis. Aenean fringilla augue lorem, et ultricies eros bibendum ac. Sed sit amet aliquam massa, sit amet eleifend tortor. Etiam eu massa id ligula rutrum laoreet. Proin ut massa sollicitudin, suscipit ligula vitae, facilisis ipsum. Sed tincidunt sodales augue aliquet aliquam. Duis ut diam purus. In rhoncus felis enim.</p>
				<div class="auteur">Mohammad Masoumi</div><div class="datum"> 13-05-2016</div><!-- auteur en datum aangemaakt -->
			</div>
			<div class="boxes" id="box2">
				<h3>Dolor sit amet, consectetur, adipisci.</h3>
				<p>Pellentesque leo purus, rutrum scelerisque pulvinar at, mollis a nibh. Suspendisse ut erat tincidunt, faucibus nibh aliquet, eleifend velit. Etiam non maximus metus. Donec justo mauris, tincidunt eu magna eget, tristique egestas tortor. Mauris id egestas diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent fermentum ante non aliquam gravida.

</p>
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