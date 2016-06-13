<?php
require("toolkit.php"); 
include("shared_header.php");
require("databaseconnection.php");
session_start();

checkCredentials([
    ROLE_SUPER_ADMIN,
    ROLE_ADMIN,
    ROLE_CLIENT
]) or die(); 

$conn = DatabaseConnection::getConnection();
$sql = "INSERT INTO `incrowd`
(`email_klant`,
`naam_app`,
 `url`,
`google_account`,
`ios`,
`android`,
`windows`,
`support_email`,
`weergave_naam`,
`email_onthouden`,
`wachtwoord_onthouden`,
`apparaat_activatie`,
`incrowds_1`,
`incrowds_2`,
`incrowds_3`,
`incrowds_4`,
`incrowds_5`,
`ongelezen_berichten`,
`rol_1`,
`email_1`,
`rol_2`,
`email_2`,
`rol_3`,
`email_3`,
`bijlage_1`,
`bijlage_2`,
`bijlage_3`,
`gebruikersnaam`,
`ip`,
`browser`)
VALUES (
'".$_POST["email_klant"]."',
'".$_POST["naam_app"]."',
'".$_POST["url"]."',
'".$_POST["showthis"]."',
'".$_POST["ios"]."',
'".$_POST["android"]."',
'".$_POST["windows"]."',
'".$_POST["support_email"]."',
'".$_POST["weergave_naam"]."',
'".$_POST["email_onthouden"]."',
'".$_POST["wachtwoord_onthouden"]."',
'".$_POST["apparaat_activatie"]."',
'".$_POST["incrowds_1"]."',
'".$_POST["incrowds_2"]."',
'".$_POST["incrowds_3"]."',
'".$_POST["incrowds_4"]."',
'".$_POST["incrowds_5"]."',
'".$_POST["ongelezen_berichten"]."',
'".$_POST["gebruiker_1"]."',
'".$_POST["email_1"]."',
'".$_POST["gebruiker_2"]."',
'".$_POST["email_2"]."',
'".$_POST["gebruiker_3"]."',
'".$_POST["email_3"]."',
'".$_POST["bijlage_1"]."',
'".$_POST["bijlage_2"]."',
'".$_POST["bijlage_3"]."',
'".$_SESSION["gebruikersnaam"]."',
'".$_SERVER["REMOTE_ADDR"]."',
'".$_SERVER['HTTP_USER_AGENT']."')";
$stmt = $conn->prepare($sql);
$stmt->execute();


$datum = date('d-m-Y - H:i'). 'U';
$klant = $_POST["email_klant"];
$naam_app = $_POST['naam_app'];
$url = $_POST['url'];
$google = $_POST['showthis'];
$ios = $_POST['ios'];
$android = $_POST['android'];
$windows = $_POST['windows'];
$support = $_POST["support_email"];
$weergave_naam = $_POST["weergave_naam"];
$email_onthouden = $_POST["email_onthouden"];
$wachtwoord_onthouden = $_POST["wachtwoord_onthouden"];
$apparaat_activatie = $_POST["apparaat_activatie"];
$inc1 = $_POST["incrowds_1"];
$inc2 = $_POST["incrowds_2"];
$inc3 = $_POST["incrowds_3"];
$inc4 = $_POST["incrowds_4"];
$inc5 = $_POST["incrowds_5"];
$ong_berichten = $_POST["ongelezen_berichten"];
$gebruiker_1 = $_POST["gebruiker_1"];
$email_1 = $_POST["email_1"];
$gebruiker_2 = $_POST["gebruiker_2"];
$email_2 = $_POST["email_2"];
$gebruiker_3 = $_POST["gebruiker_3"];
$email_3 = $_POST["email_3"];
$bijlage_1 = $_POST["bijlage_1"];
$bijlage_2 = $_POST["bijlage_2"];
$bijlage_3 = $_POST["bijlage_3"];
 


if ($ios == true){
		$ios = "Ja";
	}
else {
		$ios = "Nee";
}


if ($android == true){
		$android = "Ja";
	}
else {
	$android = "Nee";
}


if ($windows == true){
	$windows = "Ja";
	}
else {
	$windows = "Nee";
}


if ($email_onthouden == true){
	$email_onthouden = "Ja";
	}
else {
	$email_onthouden = "Nee";
}


if ($wachtwoord_onthouden == true){
	$wachtwoord_onthouden = "Ja";
	}
else {
	$wachtwoord_onthouden = "Nee";
}

if ($apparaat_activatie == true){
	$apparaat_activatie = "Ja";
	}
else {
	$apparaat_activatie = "Nee";
}




// Maakt PDF bestand aan na submit v/d form en versturen per mail 
require("fpdf/fpdf.php");
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->addPage();
$pdf->setFont("Arial", "B", 16);


$pdf->Image('http://www.incrowdpro.nl/templates/responsive/images/incrowd2.jpg',57,14.5,95,18);


$pdf->Cell(0, 30, "",1,1,C);
$pdf->SetTextColor(0,0,0);


$pdf->Cell(0, 10, "INCROWD INTAKEFORMULIER",1,1,C);

$pdf->setFont("Arial", "B", 14);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(88,10,'Datum & tijd van de aanvraag: ','LT',0,'P',0);
$pdf->Cell(0, 10, "{$datum}", 1,1);

$pdf->Cell(88,10,'Naam van de app: ','LT',0,'P',0);
$pdf->Cell(0, 10, "{$naam_app}", 1,1);

$pdf->Cell(88,10,'URL van de app: ','LT',0,'P',0);
$pdf->Cell(0, 10, "http://{$url}.incrowdpro.nl/", 1,1);

$pdf->Cell(88,10,'Google Analytics account:','LT',0,'P',0);
$pdf->Cell(0, 10, "{$google}", 1,1);

$pdf->Cell(88,10,'iOS app: ','LT',0,'P',0);
$pdf->Cell(0, 10, "{$ios}", 1,1);

$pdf->Cell(88,10,'Android app: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$android}", 1,1);

$pdf->Cell(88,10,'Windows app: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$windows}", 1,1);

$pdf->Cell(88,10,'Support Email: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$support}", 1,1);

$pdf->Cell(88,10,'Weergavenaam: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$weergave_naam}", 1,1);

$pdf->Cell(88,10,'Email onthouden: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$email_onthouden}", 1,1);

$pdf->Cell(88,10,'Wachtwoord onthouden:','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$wachtwoord_onthouden}", 1,1);

$pdf->Cell(88,10,'Apparaat activatie: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$apparaat_activatie}", 1,1);

$pdf->Cell(88,10,'Incrowd 1: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$inc1}", 1,1);

$pdf->Cell(88,10,'Incrowd 2: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$inc2}", 1,1);

$pdf->Cell(88,10,'Incrowd 3: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$inc3}", 1,1);

$pdf->Cell(88,10,'Incrowd 4: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$inc4}", 1,1);

$pdf->Cell(88,10,'Incrowd 4: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$inc5}", 1,1);

$pdf->Cell(88,10,'Ongelezen berichten: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$ong_berichten}", 1,1);

$pdf->Cell(88,10,'Gebruiker 1: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$gebruiker_1}", 1,1);

$pdf->Cell(88,10,'Email 1: ','LTR',0,'P',0);
$pdf->Cell(0, 10, "{$email_1}", 1,1);

$pdf->Cell(88,10,'Gebruiker 2: ','LTRB',0,'P',0);
$pdf->Cell(0, 10, "{$gebruiker_2}", 1,1);

$pdf->Cell(88,10,'Email 2: ','LTRB',0,'P',0);
$pdf->Cell(0, 10, "{$email_2}", 1,1);

$pdf->Cell(88,10,'Gebruiker 3: ','LTRB',0,'P',0);
$pdf->Cell(0, 10, "{$gebruiker_3}", 1,1);

$pdf->Cell(88,10,'Email 3: ','LTRB',0,'P',0);
$pdf->Cell(0, 10, "{$email_3}", 1,1);

$pdf->Cell(88,10,'Bijlage 1: ','LTRB',0,'P',0);
$pdf->Cell(0, 10, "{$bijlage_1}", 1,1);

$pdf->Cell(88,10,'Bijlage 2: ','LTRB',0,'P',0);
$pdf->Cell(0, 10, "{$bijlage_2}", 1,1);

$pdf->Cell(88,10,'Bijlage 3: ','LTRB',0,'P',0);
$pdf->Cell(0, 10, "{$bijlage_3}", 1,1);



// email pdf naar:

$to = "masoumiprojects@gmail.com";
$from = "info@mprojects.xyz"; 
$subject = "Intakeformulier Incrowd"; 
$message = "<p>Zie a.u.b. de bijlage voor een kopie van de intakeformulier.</p>";

//random hash 
$separator = md5(time());

// carriage return type 
$eol = PHP_EOL;

// attachment naam
$filename = "test.pdf";

// encode data 
$pdfdoc = $pdf->Output("", "S");
$attachment = chunk_split(base64_encode($pdfdoc));

// main header
$headers  = "From: ".$from.$eol;
$headers .= "CC: ".$klant."\r\n";
$headers .= "MIME-Version: 1.0".$eol; 
$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";



$body = "--".$separator.$eol;
$body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
$body .= "Intakeformulier Incrowd".$eol;

// bericht
$body .= "--".$separator.$eol;
$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
$body .= $message.$eol;

// attachment
$body .= "--".$separator.$eol;
$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
$body .= "Content-Transfer-Encoding: base64".$eol;
$body .= "Content-Disposition: attachment".$eol.$eol;
$body .= $attachment.$eol;
$body .= "--".$separator."--";

// stuur email
mail($to, $subject, $body, $headers);

ob_end_clean();

$pdf->output('intakeformulier-incrowd.pdf', 'I');


$dbh = null;

header('Location: loading_screen/css3-preloader-transition-finish/'); 
?>