 <!-- 06102021 -->
 <?php  
 require 'rekisteroidy/Exception.php';
require 'rekisteroidy/PHPMailer.php';
require 'rekisteroidy/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

   
    // Database connection
    //include('config/db.php');
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


<header> 
  <div class="content">
    
    <a class="logo" href="#">Blogi</a>
    <div class="toggler"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
    
    <!-- Start Navigation -->
    <nav>
      <ul>
				<li><a href="index.php">Aloitus</a></li>
				<li><a href="palaute.php">Palaute</a></li>
				<li><a href="rekisteroidy/logout.php">Kirjaudu ulos</a></li>
				<li><a href="rekisteroidy.php">Rekisteröidy</a></li>
				<!-- <li><a href="kirjaudu.php">Kirjaudu</a></li> -->
				<li><a href="blogi.php">Blogi</a></li>
			</ul>
				
      <!-- Side navigation on desktop -->
			<!-- <div class="side-nav">
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		</div> -->
	</nav>
    
  </div> 
</header>

 

 <br><br><br><br>


<!-- https://s.cdpn.io/6859/iphone.png -->




<div style="margin: auto;width: 50%;">

<form action="kiitos_palautteesta.php" style="padding:10px;">
	    <fieldset>
			<legend>Palaute</legend>
			Nimi:<br>
			<input type="text" name="nimi" size="20" maxlength="20" required> <br><br>
			
			
			Sähköposti:<br>
			<input type="email" name="email" required placeholder="Lisää validi sähköpostiosoite" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"> <br><br>
			
			Puhelinnumero:<br>
			<input type="text" name="puhnum" size="20" maxlength="20" required> <br><br>


			<!--Aihe:<br>
			<select name="aihe">
			  <option>Kysymys tuotteista</option>
			  <option>Tilaus</option>
			  <option>Yhteydenottopyyntö</option>
			  <option>Muu</option>
			</select>-->
			
			Viesti:<br>
			<textarea name="viesti" maxlength="500" required rows="5" cols="25"></textarea>
			<!-- <br><br>
			<label class="container">Haluan tilata uutiskirjeen
			<input type="checkbox">
			<span class="checkmark"></span>
			</label> -->
			<br><br>
			<input type="submit" value="Lähetä">
		</fieldset>
	  </form>


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