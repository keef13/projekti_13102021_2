<?php  
 require 'rekisteroidy/Exception.php';
require 'rekisteroidy/PHPMailer.php';
require 'rekisteroidy/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

   
    // Database connection
   // include('config/db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <title>Blogi</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<link rel="stylesheet" href="https://code.jquery.com/jquery-3.2.1.min.js">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/245137f78c.js">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	
<script>


function writeMsg() {


}

$(function() {
	$('.toggler').on('click', function() {
		$('nav').slideToggle(500);
  });
});


</script>

	
	
  </head>

<body>
<?php include("./config/db.php"); ?>
<?php

//12102021 
                    
					$msg = "";
					$Nimi="";
					$Email="";
					$Puhnum="";


					//if($sqlQuery) {
				if(isset($_GET['viesti']))
                   $msg = "Viesti: ".htmlspecialchars($_GET['viesti']);
				   
				   if(isset($_GET['nimi']))
                   $Nimi = "Nimi: ".htmlspecialchars($_GET['nimi']);	
				   
				   if(isset($_GET['email']))
                   $Email = "Email: ".htmlspecialchars($_GET['email']);	

				   if(isset($_GET['puhnum']))
                   $Puhnum = "Puhnum: ".htmlspecialchars($_GET['puhnum']);	

				   $msg=$msg."<br>".$Nimi."<br>".$Email."<br>".$Puhnum;


					//03102021
					/*$msg = 'Click on the activation link to verify your email. <br><br>
                          <a href="http://localhost/projekti/rekisteroidy/user_verification.php?token="> Click here to verify email</a>
                        ';*/
					$emailFrom = "terol@vivaldi.net";
					$emailFromName = "Palaute";
					$emailToName = "";
					$mail = new PHPMailer;
					$mail->isSMTP(); 
					$mail->CharSet = 'UTF-8';
					$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
					$mail->Host = "smtp.vivaldi.net"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
					$mail->Port = 587; // TLS only
					$mail->SMTPSecure = 'tls'; // ssl is depracated
					$mail->SMTPAuth = true;
					$mail->Username = "terol@vivaldi.net";
					$mail->Password = "Storykeef#13!!!";
					$mail->setFrom($emailFrom, $emailFromName);
					$email="laakso_tero@hotmail.com";
					$mail->addAddress($email, $emailToName);
					$mail->Subject = "Palaute sivustolta";
	
	
    $msg = wordwrap($msg,70);
	
	
	$mail->msgHTML($msg); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
	$mail->AltBody = 'HTML messaging not supported';
	
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file


if(!$mail->send()){
    $tulos = false;
	
	echo "virhe: ". $mail->ErrorInfo;
	
   // debuggeri("Mailer Error: " . $mail->ErrorInfo);
}else{
    $tulos = true;
	
    //debuggeri("Message sent!");
}
               
			   
			   
                   //}
?>

<header> 
  <div class="content">
    
    <a class="logo" href="#">Logo</a>
    <div class="toggler"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
    
    <!-- Start Navigation -->
    <nav>
      <ul>
				<li><a href="index.php" class="active">Aloitus</a></li>
				<li><a href="palaute.php">Palaute</a></li>
				<li><a href="rekisteroidy/logout.php">Kirjaudu ulos</a></li>
				<li><a href="rekisteroidy.php">Rekisteröidy</a></li>
				<li><a href="kirjaudu.php">Kirjaudu</a></li>
				<li><a href="blogi.php">Blogi</a></li>
			</ul>
				
      <!-- Side navigation on desktop -->
		<!--	<div class="side-nav">
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		</div> -->
	</nav>
    
  </div> 
</header>

<h1 id="info"><!-- Resize and Scroll the Page -->
</h1>


<!-- https://s.cdpn.io/6859/iphone.png -->


<div style="margin: auto;width: 50%;"/>


<strong>Kiitos palautteesta!</strong>





<div class="demo"></div>




</div>

<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script src='https://use.fontawesome.com/245137f78c.js'></script>
	<script id="rendered-js" >
$(function () {
$('.toggler').on('click', function () {
  $('nav').slideToggle(500);
});
});
//# sourceURL=pen.js
  </script>

</body>
</html>