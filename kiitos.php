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

/*document.getElementsByClassName("demo").innerHTML = '<form action="" method="get"><textarea name="kjav3" rows="4" cols="50"></textarea><br><button type="submit" name="lisaa" value="lisaa">Lähetä</button></form>';*/
/*let i=0;
document.getElementsByClassName("demo")[i].innerHTML='<form action="action2.php" method="post"><textarea name="kjav3" rows="4" cols="50"></textarea><br><button type="submit" name="lisaa" value="lisaa">Lähetä</button></form>';

i=i+1;

*/

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
				<li><a href="kirjaudu.php">Kirjaudu</a></li>
				<li><a href="blogi.php">Blogi</a></li>
			</ul>
				
      <!-- Side navigation on desktop -->
			<div class="side-nav">
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		</div>
	</nav>
    
  </div> 
</header>

<h1 id="info"><!-- Resize and Scroll the Page -->
</h1>
<!-- 
<section>
  <h1>Mônica Saturno Busatta</h1>
</section> -->

<!-- https://s.cdpn.io/6859/iphone.png -->
<?php
/*$nimi=null;
if(isset($_POST['nimi']))
$nimi=$_POST['nimi'];
$email=null;
if(isset($_POST['email']))
$email=$_POST['email'];
$sql = "INSERT INTO users (firstname, email) VALUES ('$nimi','$email')";
$result = $connection->query($sql);
*/?>

<div style="margin: auto;width: 50%;"/>


<strong>Kiitos rekisteröitymisestä!</strong>
<p style="margin-top:30px;">Saat sähköpostiisi rekisteröitymisvahvistuksen.</p>





<div class="demo"></div>

<!--<h2>Esitä vastaus</h2>-->
<?php /*$x=true;
$apu="";
if(isset($_GET['lisaa']))
$apu=$_GET['lisaa'];
*/
//if ($apu){
	
	//if($apu==null || isset($apu)){
	
	

	?>


	<?php
	//$x=false;
	//$apu.=$apu;
	
//}
//}

?>
</div>
</body>
</html>