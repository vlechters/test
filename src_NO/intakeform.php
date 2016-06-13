<?php
require("cookie.php");
require("toolkit.php"); 
require("shared_header.php");
session_start();

checkCredentials([
  ROLE_SUPER_ADMIN,
  ROLE_ADMIN,
  ROLE_CLIENT
  ]) or die(); 

if(isset($_POST["submit"])){
  $conn = DatabaseConnection::getConnection();
  $_SESSION['email_klant']          = $_POST['email_klant'];
  $_SESSION['naam_app']             = $_POST['naam_app'];
  $_SESSION['url']                  = $_POST['url'];
  $_SESSION['showthis']             = $_POST['showthis'];
  $_SESSION['ios']                  = $_POST['ios'];
  $_SESSION['android']              = $_POST['android'];
  $_SESSION['windows']              = $_POST['windows'];
  $_SESSION['support_email']        = $_POST['support_email'];
  $_SESSION['weergave_naam']        = $_POST['weergave_naam'];
  $_SESSION['email_onthouden']      = $_POST['email_onthouden'];
  $_SESSION['wachtwoord_onthouden'] = $_POST['wachtwoord_onthouden'];
  $_SESSION['apparaat_activatie']   = $_POST['apparaat_activatie'];
  $_SESSION['amountInput']          = $_POST['amountInput'];
  $_SESSION['incrowds_1']           = $_POST['incrowds_1'];
  $_SESSION['incrowds_2']           = $_POST['incrowds_2'];
  $_SESSION['incrowds_3']           = $_POST['incrowds_3'];
  $_SESSION['incrowds_4']           = $_POST['incrowds_4'];
  $_SESSION['incrowds_5']           = $_POST['incrowds_5'];
  $_SESSION['ongelezen_berichten']  = $_POST['ongelezen_berichten'];
  $_SESSION['gebruiker_1']          = $_POST['gebruiker_1'];
  $_SESSION['email_1']              = $_POST['email_1'];
  $_SESSION['gebruiker_2']          = $_POST['gebruiker_2'];
  $_SESSION['email_2']              = $_POST['email_2'];
  $_SESSION['gebruiker_3']          = $_POST['gebruiker_3'];
  $_SESSION['email_3']              = $_POST['email_3'];
  $_SESSION['bijlage_1']            = $_POST['bijlage_1'];
  $_SESSION['bijlage_2']            = $_POST['bijlage_2'];
  $_SESSION['bijlage_3']            = $_POST['bijlage_3'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Intakeformulier</title>
  <?php require("shared_taglinks.php"); ?>
  <!-- Onderstaande 2 tag links worden enkel hier gebruikt -->
  <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'> 
  <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
</head>


<body>

  <!--<img id="toggle" style="display:block; float:left; margin-bottom:110px;" src="images/toggle.png" width="25px" onmouseover="this.src='images/toggle2.png';" onmouseout="this.src='images/toggle.png';" />-->
  <div id="form_container">
    <div class="form-style-6_help">
      <div class="menu">
        <img class="helpmij" style="float:left;" src="images/helpmij.png"> <img class="helpmij" style="float:right;" src="images/helpmij.png">
        Heeft u hulp nodig bij het invullen? <br> Ga met uw muis over  <img style="display:inline" width="3%" src="images/vraagteken.png">  heen voor meer uitleg!
        <hr>
      </div></div>
      <img src="images/incrowd_logo.png" style="margin-top:-20px" width='30%'><hr>
      <div class="form-style-6">


        <form method="post" action="intakeform_process.php" id="intake" name="intake">
          <div id="intake_formulier">

            <span class="email_klant"  title="tipso" data-tipso="Wordt enkel gebruikt om u een kopie van het intakeformulier te mailen">
            <img width="4%" src="images/vraagteken.png"></span>
            <h4>Uw emailadres:</h4>
            <script>$('.email_klant').tipso({});</script>
            <input type="email" name="email_klant" placeholder="Uw emailadres" required/><hr>

           <span class="naam_app"  title="tipso" data-tipso="Voorbeelden:<br> Retail Vandaag, To Go Games, MoneyCare.<br><br> Vanwege de beperkte ruimte onder het icoon kan de naam maximaal 12-14 karakters lang zijn.">
            <img width="4%" src="images/vraagteken.png"></span>
            <h4 >De naam van de app is:</h4>
            <script>$('.naam_app').tipso({});</script>
            <input type="text" name="naam_app" placeholder="Naam van de app" required/><hr>


            <span class="url" title="tipso" data-tipso="Dit is de URL waarop het CMS en Incrowd Web beschikbaar zijn.<br><br>(doorgaans de bedrijfsnaam)<br><br>Voorbeeld: https://voorbeeld.incrowdpro.nl">
              <img width="4%" src="images/vraagteken.png"></span>
              <h4>De URL is:</h4>
              <script>$('.url').tipso({});</script>
              <input type="text" name="url" placeholder="URL.incrowdpro.com" required /><hr>


              <span class="analytics" title="tipso" data-tipso="Indien gewenst worden de gegevens met betrekking tot het gebruik van de applicaties en website gemeten met Google Analytics.<br><br> Met een Google-account heeft u toegang tot de verzamelde informatie.<br> Klik op het knopje hieronder om het in te schakelen">
                <img width="4%" src="images/vraagteken.png"></span>
                <h4>Google Analytics Inschakelen?</h4>
                <script>$('.analytics').tipso({});</script>
                <center><input style="margin-top:10px" type="checkbox" name="checkbox" id="checkbox" value="scheckbox" /><br>
                <input id="showthis" name="showthis" size="50" type="text" value="" placeholder="Uw Google-account" /></center>
                <hr>

                <h4> Mobiele platformen </h4>

                <p>iOS (iPhone & iPad)</p>
                <center> <input type="checkbox" name="ios"> </center><br>
                <p>Android</p>     
                <center> <input type="checkbox" name="android"> </center><br>
                <p>Windows Phone</p>
                <center> <input type="checkbox" name="windows"> </center><hr>


                <span class="supportadres" title="tipso" data-tipso="Incrowd verstuurt een aantal e-mails naar gebruikers, bijvoorbeeld bij het opvoeren van een nieuwe gebruiker of in geval van het resetten van een wachtwoord.<br> Deze berichten worden altijd verzonden vanuit support@incrowdpro.com<br><br> De mailbox wordt door Incrowd gelezen, maar de meeste vragen zullen gericht zijn aan de helpdesk van de organisatie die Incrowd in gebruik heeft genomen.<br><br> Daarom kunnen we de verzonden berichten vanuit support@incrowdpro.com voorzien van een &#39;reply-to&#39;-veld."/><h4>Het emailadres van de helpdesk is:</h4></span>
                <script>$('.supportadres').tipso({});</script>
                <p> </p> <input type="email" name="support_email" placeholder="Emailadres" /><br>

                <h4>De weergave naam is:</h4>
                <input type="text" name="weergave_naam" placeholder="Weergave naam" /><hr>


                <span class="opslaan" title="tipso" data-tipso="De gebruikelijke manier om in te loggen op de app, is met behulp van een combinatie van een emailadres en zelfgekozen wachtwoord, pincode of touch id"> <h4>Emailadres en wachtwoord opslaan</h4></span><br>
                <script>$('.opslaan').tipso({});</script>

                <p>Emailadres onthouden toestaan</p>
                <center><input type="checkbox" name="email_onthouden"  /></center><br>

                <p>Wachtwoord/pincode/touch id onthouden toestaan:</p>
                <center><input type="checkbox" name="wachtwoord_onthouden"></center><hr>

                <h4> Apparaat activatie </h4>
                <p>Apparaat activatie:</p>
                <center><input type="checkbox" name="apparaat_activatie"></center> 




                <hr>


                <span class="incrowds" title="tipso" data-tipso="Voorbeelden: Directie, Medewerkers, Leidinggevenden, Businesspartners, Klanten"><h4>Incrowds</h4></span><br>
                <script>$('.incrowds').tipso({});</script>
                <input type="text" name="incrowds_1"> <br>
                <input type="text" name="incrowds_2"><br>
                <input type="text" name="incrowds_3"><br>
                <input type="text" name="incrowds_4"><br>
                <input type="text" name="incrowds_5"><hr>


                <span class="categorie" title="tipso" data-tipso="Gebruikers worden ingedeeld in ieder van de hoofdcategorie&#235;n. Berichten kunnen verzonden worden naar een selectie van categorie&#235;n. Categorie&#235;n worden in een boomstructuur opgezet."><h4>Categorie&#235;n</h4></span><br>
                <script>$('.categorie').tipso({});</script><hr>




                <h4> Menu&#39;s en submenu&#39;s </h4><hr>
                <h4> Menu structuur </h4><hr>
                <h4> Start en Tools </h4><hr>

                <h4> &#39;Ongelezen berichten&#39;-badge </h4>
                <input type="text" name="ongelezen_berichten" placeholder="Menu's"/><hr>

                <h4> Contactpersonen</h4><hr>

                <h4> Locaties </h4><hr>

                <h4> Gebruikersrechten </h4>
                <input type="text" name="gebruiker_1" placeholder="Rol" /><br>
                <input type="email" name="email_1" placeholder="Emailadres" />
                <input type="text" name="gebruiker_2" placeholder="Rol" /><br>
                <input type="email" name="email_2" placeholder="Emailadres" />
                <input type="text" name="gebruiker_3" placeholder="Rol" />                
                <input type="email" name="email_3" placeholder="Emailadres" /><hr>  


                <h4> Account activatie e-mail </h4>
                <span class="bijlage_1" title="tipso" data-tipso="Account activatie berichten bevatten tekst, links en plaatjes.<br><br>Graag de gewenste tekst aanleveren."><p>Het bericht dat zij ontvangen ziet er als volgt uit:</p></span><br>
                <script>$('.bijlage_1').tipso({});</script>
                <textarea name="bijlage_1"></textarea><hr>

                <h4> Apparaat activatie e-mail </h4>
                <span class="bijlage_2" title="tipso" data-tipso="Het is mogelijk om gebruikers elke keer dat zij de Incrowd app op een nieuw toestel geïnstalleerd hebben en voor de eerste keer inloggen, te vragen om het nieuwe apparaat te activeren."><p>Het bericht dat zij ontvangen ziet er als volgt uit:</p></span><br>
                <script>$('.bijlage_2').tipso({});</script>
                <textarea name="bijlage_2"></textarea><hr>

                <h4> Wachtwoord vergeten </h4>
                <span class="bijlage_3" title="tipso" data-tipso="Gebruikers die hun wachtwoord vergeten zijn kunnen op het startscherm van de Incrowd applicaties via een link hun gebruikersnaam (e-mailadres) invoeren.<br><br>
                  Zij ontvangen een e-mail bericht met de mogelijkheid om een nieuw wachtwoord te kiezen. Dit bericht ziet er als volgt uit:"><p>Het bericht dat zij ontvangen ziet er als volgt uit:</p></span><br>
                  <script>$('.bijlage_3').tipso({});</script>
                  <textarea name="bijlage_3"></textarea></div><hr>


                  <input type="submit" value="Verzenden" name="submit" />
                </form>
              </div>
            </div>
          </div>

        </body>

        <hr>
        <footer>
          <center><a href='home.php' class='terug'><img src='images/terug.png' width='40px' title='Terug'>Terug</a></center><br>
        </footer>
        </html>