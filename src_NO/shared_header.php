<?php
session_start();
?>

<!-- Rechtsboven - De log uit knop -->
<div class="loguit"><a title="Uitloggen" href="logout.php"><img width="73%" src="images/logout23.png" onmouseover="this.src='images/logout2.png';" onmouseout="this.src='images/logout23.png';" /></a></div>

 <!-- Teller voor automatische uitlog -->
<div id='countdown'></div>


<!-- Welkom bericht linksboven met de naam en rol van de gebruiker -->
<div class="welkom"></div> 




<!-- Checkt rollen -->
<?php
$rol=$_SESSION['rollen'];
	
	// Normale gebruiker - Heeft weinig tot geen rechten
	if($rol==0){
		$rol= "Gebruiker";
	}
	
	// Administrator - Heeft alle rechten behalve die van Super administrator
	elseif($rol==1){
		$rol="Admin";
	}
	

	// Super Administrator - Heeft alle rechten	
	elseif($rol==2){
		$rol="Super Admin";
	}
	
	// Als het geen standaard gebruiker is ( of niet herkend ), dan is het onbekend	
	else{
		$rol="onbekend";
	};
?> 
</div



<?php // Toon linksboven de naam en rolnaam van de ingelogde persoon
	echo '<center>'. 
	'<p style="text-align:left; color:#820000; font-size:14px; margin-left:5px; margin-top:10px;">Welkom '.
 	$_SESSION['gebruikersnaam'] . "<br> ".
	'Rol: '.
	$rol. "<br>".
	'</p></center></div>' ; ?>
	</div>
<hr>
