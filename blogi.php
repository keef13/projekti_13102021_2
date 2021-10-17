<?php
/* Suojattujen sivujen alkuun */
if (!session_id()) session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    $_SESSION['next_page'] = $_SERVER['PHP_SELF']; 
    header("location: kirjaudu.php");
    exit;
}
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
<?php /*include("./config/db.php");*/ ?>
<?php include('login.php'); /*include('./controllers/login.php');*/ ?>

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

<!-- <h1 id="info">
</h1> -->
<br><br><br><br>
<!-- 
<section>
  <h1>Mônica Saturno Busatta</h1>
</section> -->

<!-- https://s.cdpn.io/6859/iphone.png -->




<div style="margin: auto;width: 50%;"/>


<h1>Blogi</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quam risus, consectetur pharetra mattis hendrerit, placerat at lorem. Maecenas molestie erat quis orci blandit accumsan. Fusce nec blandit metus. Donec et velit cursus, gravida lectus quis, suscipit tortor. Proin non vehicula est, id interdum mauris. Nunc eu nibh sapien. Vestibulum risus ante, mollis ac sodales et, laoreet in felis. Suspendisse dolor est, tempus ut accumsan nec, sollicitudin ut felis. Praesent ut risus suscipit, sollicitudin sapien ut, consectetur lectus. Suspendisse laoreet massa sem, accumsan tristique velit vestibulum eget. Quisque molestie leo nec fermentum mattis. Vivamus a pretium risus, ac varius risus. Nulla imperdiet dignissim feugiat. Sed rutrum hendrerit ex, vulputate commodo felis malesuada ut. Cras commodo porttitor sollicitudin.</p>


<h2>Vastaa</h2>
<form action="" method="post">
Kommentti<br><textarea name="kommentti" rows="4" cols="50"></textarea>
<div class="grid-container">

<!--<div class="grid-item">Nimi*<br><input name="nimi" size="10"></div>
<div class="grid-item">Sähköpostiosoite*<br><input size="10" name="email"></div>

<div class="grid-item">Kotisivu<br><input size="10" name="kotisivu"></div><br>-->
</div>
<div class="grid-item"><button type="submit" name="lisaa" value="lisaa" class="button">Lähetä</button></div>

</form>


	<!-- <a href="#" onclick="writeMsg();">Uusi kysymys</a> -->

<?php


/* 11102021 */
//$sql = "SELECT firstname, kommentti from kommentit inner join users id_user=id";

//}



//$row2 = $result -> fetch_assoc();


// Free result set
//$result -> free_result();

//$mysqli -> close();

	
	
	
// Associative array
/*while($row = mysqli_fetch_array($result)){
printf ("%s (%s)\n", $row["firstname"], $row["kommentti"]);
echo "<br>";
}*/
/*
foreach($result2 as $row2){
printf ("%s (%s)\n", $row2["firstname"], $row2["kommentti"]);
echo "<br>";
}*/

// Free result set
/*$result -> free_result();

$mysqli -> close();
*/






$kommentti=trim($_POST['kommentti']);

/* 17102021 */ 
$kommentti=htmlspecialchars($kommentti);

if(isset($_POST['kommentti']) and !empty($_POST['kommentti'])){
$kommentti= $_POST['kommentti'];



$id=$_SESSION['id'];
/* 17102021 */
date_default_timezone_set("Europe/Helsinki");
$timestamp = date("Y-m-d H:i:s");
$sql = "INSERT INTO kommentit (kommentti, id_user, timestamp) VALUES ('$kommentti', '$id', '$timestamp')";

if ($connection->query($sql) === TRUE) {

} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}

//$sql = "INSERT INTO users ( firstname, lastname) SELECT id_user, kommentti FROM kommentit p";



/*
if ($connection->query($sql) === TRUE) {

} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}
*/
//$connection->close();

}

$nimi=null;
if(isset($_POST['nimi']))
$nimi=$_POST['nimi'];
$email=null;
if(isset($_POST['email']))
$email=$_POST['email'];
$sql = "INSERT INTO users (firstname, email) VALUES ('$nimi','$email')";
//$result = $connection->query($sql11);

/*
$sql10="INSERT INTO kommentit (kommentti) VALUES ('$kommentti')";
$result3 = $connection->query($sql10);
$sql11="INSERT INTO users (id) VALUES (LAST_INSERT_ID())";
$result4 = $connection->query($sql11);
*/



//echo $kommentti;



//$sql = "SELECT firstname, kommentti from kommentit inner join users id_user=id";
$sql2 = "SELECT kommentti from kommentit";




//if ($result->num_rows > 0) {
  // output data of each row
  


// 12102021
$sql2 = "SELECT Users.firstname, Users.lastname, Kommentit.kommentti, Kommentit.timestamp FROM Users RIGHT JOIN Kommentit ON Kommentit.id_user = Users.id";
$result2 = $connection->query($sql2);
	 ?>
<table>
<?php

while($row2 = $result2->fetch_assoc()) {
	
	$date=date_create($row2["timestamp"]);
$date2=date_format($date,"d.m.Y H:i:s"); 
//$date2=date("d.m.Y H:i:s", $date);	


		//printf ("%s %s %s\n", $row2["firstname"], $row2["lastname"], $row2["kommentti"]);
		?><tr><td><div style="border:1px solid #000;"><?php echo $row2["firstname"]." ".$row2["lastname"]." ". $date2 ?><br><?php echo $row2["kommentti"] ?></div></td></tr>
		<!--<tr><td><?php /*echo $row2["kommentti"]*/ ?></td></tr>-->
	
		
		<?php
		/*echo $row2["firstname"] . " ".$row2["lastname"]; ?> <br>
		<?php		echo $row2["kommentti"]; ?>
		
		<br>*/
	  }
	  ?>
</table>
<?php
$connection->close();


?>

<div class="demo" style="margin-bottom:150px;"></div>

<!--<h2>Esitä vastaus</h2>-->
<?php /*$x=true;
$apu="";
if(isset($_GET['lisaa']))
$apu=$_GET['lisaa'];
*/
//if ($apu){
	
	//if($apu==null || isset($apu)){
	
	//echo $_SESSION['id'];

	?>


	<?php
	//$x=false;
	//$apu.=$apu;
	
//}
//}

?>
</div>

<!-- https://s.cdpn.io/6859/iphone.png -->
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