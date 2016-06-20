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

<center><img style="min-width:180px" src="images/logo.png" width='50%'><hr></center>
<br>


<center>
<div id="blur">

<li><a href='artikel_toevoegen.php'>
<div class="artikel_toevoegen"><br><img src="images/form.png" width="23%" /><p style="color:#fe6300" id="p1">Artikel plaatsen</p></a></li><br>

<li><a href='contentbeheer.php'><div class="artikel_beheer"><br><img src="images/artikelbeheer.png" width="23%" /><p style="color:#fe6300" id="p2">Artikelbeheer</p></div></a></li><br><hr>

</div>

</div>

</div> 
</center>
<footer></footer>
</html>







