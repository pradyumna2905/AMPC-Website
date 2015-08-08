<?php
/**
* index.php
*
* Created by: Pradyumna Shembekar
* Email: pshembe@calstatela.edu
* Created on: 01/25/2015
*/
?>

<?php
  require("header.php");
?>

    <title>Form Submitted</title>
  </head>
  <h3 align="center">Thank you, <?php echo ($_POST['fname']); ?> We have submitted your request through email and have forwarded you the same!</h3>
  <body>


<?php

/* Creating constants for each attribite */

$requestedMaterial = implode(', ', $_POST["material"]);
$requestedFormat = implode(', ', $_POST["format"]);
$name = $_POST["fname"];
$cin = $_POST["cin"];
$phno = $_POST["phno"];
$email = $_POST["email"];
$quarter = $_POST["quarter"];
$year = $_POST["year"];
$libcall = $_POST["libcall"];
$pgneeded = $_POST["pgneeded"];

/* Email constants */

$to = 'pradyumna2905@gmail.com';
$subject = 'New Student Media Request';
$message = 'Name: '.$name."\r\n".
	'CIN: '.$cin."\r\n".
	'Phone Number: '.$phno."\r\n".
	'Email: '.$email."\r\n".
	'Quarter: '.$quarter.' '.$year."\r\n".
	'Library Call  #: '.$lib."\r\n".
	'Pages Needed: '.$pgneeded."\r\n".
	'Requested Material: '. $requestedMaterial."\r\n".
	'Requested Formats: '. $requestedFormat;
$headers = 'From: trialwebsite@thisismytrial.website' . "\r\n" .
    'Reply-To: trialwebsite@thisismytrial.website' . "\r\n" ;
$mail_sent = mail($to, $subject, $message, $headers);

if ($mail_sent) {
$subject_student = 'Your AMPC Request';
$to = $_POST["email"];
    mail($to, $subject_student, $message, $headers);
    }
?>

<?php
  require("footer.php");
?>
