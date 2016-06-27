<?php
require ('connecties/artikeldatabase.php');
require("../../mohammad_login/src/toolkit.php") 	; 
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

	<?php
	require('header+side_menu.php');
	?>
	
	
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