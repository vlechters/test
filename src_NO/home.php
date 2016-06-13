<?php

require("toolkit.php"); 
require("shared_header.php");

//(functie in tookit.php) Er wordt gekeken naar wie een toestemming heeft om deze pagina te kunnen zien
checkCredentials([
    ROLE_SUPER_ADMIN,
    ROLE_ADMIN,
    ROLE_CLIENT
]) or die(); 
?>
 
<!DOCTYPE html>
<html>
<head>
<title>Welkom</title>
<?php require("shared_taglinks.php"); ?>
</head>

<body> 
<div id="framework">
<br>
<center><img src="images/logo.png" width='50%'><hr></center>
<br>

<div id="top-navigation-home">
<center>
<div id="blur">
<li><a href='artikelbeheer.php'><div class="intake"><br><img src="images/form.png" width="23%" /><p style="color:#fe6300" id="p1">Artikels plaatsen</p></a></li><br>
<li><a href='contentbeheer.php'><div class="intakes_inzien"><br><img src="images/content_beheer.png" width="21%" /><p style="color:#fe6300" id="p1">Contentbeheer</p></div></a></li></div>

</div>
</div>
</div> 
</center>
<footer></footer>
</html>







